<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LabTest;
use App\Models\Patient;
use App\Models\Reservation;
use DB;
use Carbon\Carbon;
use PDF;
class ReservationController extends Controller
{
    public function index() {
        $reservations = Reservation::orderByDesc('id')->paginate(10);
        return view('/Reservations.index' , ['reservations' => $reservations]);
    }

    public function create() {
        return view('/Reservations.create' , [
          'PATIENTS' =>  Patient::all()->sortByDesc('id')   ,
          'TESTS' =>   LabTest::all( ['test_name', 'test_price','test_type' , 'id' ])->sortByDesc('id')] );
    }

    public function store(Request $request){

        // dd($request->all());

        // if (!function_exists('str_contains')) {
        //     function str_contains($haystack, $needle) {
        //         return $needle !== '' && mb_strpos($haystack, $needle) !== false;
        //     }
        // }
        // Retrieve a piece of data from the session...
        // $value = session('booking_type');

        // // Specifying a default value...
        // $value = session('key', 'default');

        // Store a piece of data in the session...
        // $value =  session(['patient_id' => $request->patient_id]);

        // dd($request->session()->all());



     $Reserve = [];
      foreach ($request->except('_token') as $key => $value) {
        if (str_contains($key, "test_id_")) {
            if (!empty($request[$key])) {
                $Test_id = filter_var($key, FILTER_SANITIZE_NUMBER_INT);
                 array_push($Reserve , [
                    'reservation_type' => $request->booking_type,
                    'reservation_date' => Carbon::now()->toDateTimeString() ,
                    'patient_id' =>  $request->patient_id,
                    'lab_test_id' =>  $Test_id
                ]);
            }
        }

        //   echo $key . ' : ' . $value . '<br>';

      }


    // $this->validate($request, [
        //     'full_name' => 'required',
        //     'passport_id' => 'required',
        //     'mobile' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
        //  ]);

    Reservation::insert($Reserve); // Eloquent approach



        // $request->session()->put('key', 'value');
        // echo $request->patient_id;


        // // $request->session()->flush();

        // if(!$request->session()->has('patient_id') && !$request->session()->has('booking_type') ) {
        //     $request->session()->put(['patient_id' => $request->patient_id , 'booking_type' => $request->booking_type ] );
        // }

        // $patient  = Patient::FindOrFail( $request->patient_id , ['full_name', 'mobile' , 'gender' , 'id' ]);
        // $tests = LabTest::all( ['test_name', 'test_type' , 'id' ])->sortByDesc('id');
        // // dd($pa->full_name);
        // return view('Reservations.AssignTestPatient', [ 'PATIENTS' => $patient , 'TESTS' => $tests]);

        // dd('no data!');
        // Patient::create($request->all());
        return redirect()->route('Reservation')->with('success' , 'New Reservations Registered Successfully');
    }
    public function reservation_booking(){

        $reservations = DB::select("SELECT *
        FROM patients
        INNER JOIN reservations ON patients.id = reservations.patient_id
        INNER JOIN lab_tests ON lab_tests.id = reservations.lab_test_id  GROUP BY patients.full_name ORDER BY reservations.id DESC ", []);

        return view('/Reservations.reservation_booking' , [  'RESERVATIONS' => $reservations]);
    }
    public function view_patient_profile(Request $request) {
        // dd($request->id);
        $patientID = $request->id;
        $results = DB::select("SELECT
            COUNT(reservations.patient_id) AS reservation_count ,
            SUM(lab_tests.recieved_amount) AS payment_amount ,
            patients.id , patients.dob , patients.full_name,patients.mobile,patients.gender,patients.country,patients.status,patients.id_type,patients.passport_id , patients.hospital_id
            FROM patients
            INNER JOIN reservations ON patients.id = reservations.patient_id
            INNER JOIN lab_tests ON lab_tests.id = reservations.lab_test_id
            WHERE reservations.patient_id = ? ", [$request->id]);
        $patient = Patient::find($patientID);
        // dd($patient);
        $reservation = reset($results);
        $hospital = DB::table('hospitals')->where('id', $reservation->hospital_id)->get();
        $RESERVE = DB::select("SELECT *
                FROM patients
                INNER JOIN reservations ON patients.id = reservations.patient_id
                INNER JOIN lab_tests ON lab_tests.id = reservations.lab_test_id
                WHERE reservations.patient_id = ?  ORDER BY reservations.id DESC ", [$request->id]);
                // dd(reset($results));
        return view('/Patients.patient_profile' , [
          'PATIENTS' => Patient::find($patientID),
          'RESERVATION' => reset($results), 'HOSPITAL' => reset($hospital),
          'RESERVE' => $RESERVE] );
    }

    public function print_patient_barcode ($id){
         $results = DB::select("SELECT * FROM patients WHERE id = ? ", [$id]);
         $pdf = PDF::loadView('/Patients.Barcode', ['RESERVATION' =>   $results ]);
         return $pdf->download( 'Barcode of ' .  $results[0]->full_name .'.pdf');
    }

}
