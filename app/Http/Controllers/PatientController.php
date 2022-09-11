<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use Illuminate\Http\Request;
use App\Models\Patient;
use DB;
class PatientController extends Controller
{
    public function index() {

        return view('/Patients.index' , ['PATIENTS' =>  Patient::all() ]);
    }
    public function create() {
        $hospitals = Hospital::all();
        return view('/Patients.create', ['hospitals' => $hospitals]);
    }

    public function store(Request $request){
        dd($request);
        $this->validate($request, [
            'full_name' => 'required',
            'passport_id' => 'required',
            'mobile' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
         ]);
        Patient::create($request->all());
        return redirect()->route('GetPatient')->with('success' , 'New Patient Registered Successfully');

    }


    public function search(Request $request) {
            $data = '';
            $search = $request->search;
            if($search != '')
            {
                $field = 'full_name';
                if(is_numeric($search)) $field = 'mobile';
                $data = DB::table('patients')->where( $field  ,'LIKE','%' . $search . '%')->get();
            }
            return json_encode($data);
    }




}
