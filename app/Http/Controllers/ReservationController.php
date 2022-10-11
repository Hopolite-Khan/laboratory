<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use Illuminate\Http\Request;
use App\Models\LabTest;
use App\Models\Patient;
use App\Models\Reservation;
use DB;
use Carbon\Carbon;
use PDF;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::orderByDesc('id')->paginate(10);
        return view('Reservations.index', ['reservations' => $reservations]);
    }

    public function create()
    {
        return view('Reservations.create', [
            'PATIENTS' =>  Patient::all()->sortByDesc('id'),
            'TESTS' =>   LabTest::all(['test_name', 'test_price', 'test_type', 'id'])->sortByDesc('id')
        ]);
    }

    public function store(Request $request)
    {

        $Reserve = [];
        foreach ($request->except('_token') as $key => $value) {
            if (str_contains($key, "test_id_")) {
                if (!empty($request[$key])) {
                    $Test_id = filter_var($key, FILTER_SANITIZE_NUMBER_INT);
                    array_push($Reserve, [
                        'reservation_type' => $request->booking_type,
                        'reservation_date' => Carbon::now()->toDateTimeString(),
                        'patient_id' =>  $request->patient_id,
                        'lab_test_id' =>  $Test_id
                    ]);
                }
            }
        }

        Reservation::insert($Reserve); // Eloquent approach

        return redirect()->route('Reservation')->with('success', 'New Reservations Registered Successfully');
    }
    public function reservation_booking()
    {
        $patients = Patient::paginate(10);
        return view('Reservations.reservation_booking', ['patients' => $patients]);
    }


    public function view_patient_profile($id)
    {
        $patientID = $id;
        $patient = Patient::find($patientID);
        $reservations = Reservation::where(['patient_id' => $patientID])->paginate(10);
        $hospital = Hospital::find($patient->hospital_id)->get();
        return view('/Patients.patient_profile', [
            'patient' => $patient,
            'HOSPITAL' => reset($hospital),
            'reservations' => $reservations
        ]);
    }

    public function print_patient_barcode($id)
    {
        $results = Patient::find($id);
        $pdf = PDF::loadView('/Patients.Barcode', ['RESERVATION' =>   $results]);
        return $pdf->download('Barcode of ' .  $results[0]->full_name . '.pdf');
    }
    public function destroy($id)
    {
        Reservation::destroy($id);
        return redirect()->route('Reservation')->with('success','it has been deleted successfully.');
    }

    public function view_first_step(){
        return view('Reservations.first_step');
    }

    public function process_first_step(Request $request){

        $patients = [];
        $patient = explode(',' , $request->patient_id[0]);

        for ($index=0; $index < count($patient) ; $index++) {
            array_push($patients ,  Patient::find($patient[$index]) );
        }
        return view('Reservations.second_step' ,
        [
            'booking_type' => $request->booking_type ,
            'patients' => $patients ,
            'tests' => LabTest::latest()->take(8)->get()
        ]);
    }

    public function second_step(Request $request){

        $Latest_RID = Reservation::orderBy('rid', 'desc')->limit(1)->pluck('rid');
        if(is_null($Latest_RID)) $Latest_RID = [0] ;
        $RID = sprintf('%06d', $Latest_RID[0] + 1) ;
        $Reserve = [];
        foreach ($request->except('_token') as $key => $value) {

            $pid = explode('_' , $key);
            $test_id = $value;

            if (str_contains($key, "reserve_")) {
                if (!empty($request[$key])) {
                    array_push($Reserve, [
                        'rid' => $RID ,
                        'reservation_type' => 'Booking',
                        'reservation_date' => Carbon::now()->toDateTimeString(),
                        'patient_id' =>  $pid[1],
                        'lab_test_id' =>  $test_id
                    ]);
                }// end of empty
            }// end of str_contains
        } // end of foreach

        Reservation::insert($Reserve); // Eloquent approach
        return redirect()->route('ThirdStep' , ['pid' => $pid[1] , 'test_id' => $test_id , 'rid' => $RID]);


    } // end of second step

    function third_step($pid , $test_id , $rid){

        $reservations = DB::table('patients')
        ->join('reservations', 'patients.id', '=', 'reservations.patient_id')
        ->join('lab_tests', 'reservations.lab_test_id', '=', 'lab_tests.id')
        ->select(
            'patients.*',
            'reservations.reservation_type',
            'reservations.lab_test_id',
            'reservations.status',
            'reservations.patient_id as pid',
            'reservations.rid',
            'lab_tests.*')
        ->where('reservations.rid' , '=' , sprintf('%06d', $rid))->get() ;

         return view('Reservations.third_step', [ 'reservations' => $reservations ]);
    }

    function cancel_reservation(Request $request){
        if($request->status == 'Cancel') {
            Reservation::where('patient_id' , '=' , $request->pid)
            ->where('lab_test_id' , '=' , $request->test_id)
            ->update(['status'=>'Cancel']);
            return redirect()->route('ThirdStep' , ['pid' => $request->pid , 'test_id' => $request->test_id , 'rid' => $request->rid]);
        }
        else return redirect()->back()->with('error' , 'Somthing went Wrong');

    }

    function recieve_payment(Request $request ){
        dd($request->all());
    }

}
