<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lab;

class LabController extends Controller
{
    public function index(){
        return view('Lab.index', ['labs' => Lab::paginate(10)]);
    }

    public function create( )
    {
        return view('Lab.create' );
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'lab_name' => 'required',
            'location' => 'required',
            'email' => 'required',
            'contract' => 'required',
            // 'mobile' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
        ]);

        Lab::create( [
            'lab_name' => $request->lab_name,
            'location' => $request->location ,
            'email' => $request->email ,
            'contract' => $request->contract
             ] );

        $message =  'New Lab Registered Successfully';
        return redirect()->route('Laboratory')->with('success', $message);
    }

    public function destroy($id)
    {
        $lab = Lab::findOrFail($id);
        $lab_name = $lab->lab_name;
        $lab->delete();
        return redirect()->route('Laboratory')->with('success', "$lab_name have been deleted successfully");
    }


    public function update(){}
    public function edit(){}



    public function update_status(Request $request){

        $this->validate($request, [
            'status' => 'required',
        ]);
        $Lab = Lab::find($request->id);
        $Lab->status = $request->status;
        $Lab->save();
        return redirect()->route('Laboratory')->with('success', 'Status updated Successfully');

    }// end of update status


}
