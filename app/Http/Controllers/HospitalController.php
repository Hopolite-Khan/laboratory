<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hospital; 
use DB; 

class HospitalController extends Controller
{
   
    public function index() {
        return view('/Hospital.index' , ['HOSPITALS' =>  Hospital::all() ]);
    }


    public function create() {
        return view('/Hospital.create');
    }

    public function store(Request $request){
        // dd($request->all());


        $this->validate($request, [
            'name' => 'required',
            'address' => 'required',
         ]);

        Hospital::create($request->all());
        return redirect()->route('GetHospital')->with('success' , 'New Patient Registered Successfully');

    }


    // public function search(Request $request) {
    //         $data = '';
    //         $search = $request->search;

            
    //         if($search != '')
    //         {
    //             $field = 'full_name'; 
    //             if(is_numeric($search)) $field = 'mobile';
    //             $data = DB::table('patients')->where( $field  ,'LIKE','%' . $search . '%')->get();
    //         }

    //         return json_encode($data);
    // }

}
