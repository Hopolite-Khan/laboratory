<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
    public function index()
    {
        return view('Hospital.index', ['HOSPITALS' => Hospital::all()]);
    }

    public function create()
    {
        return view('Hospital.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'name' => 'required',
            'address' => 'required',
        ]);

        Hospital::create($request->all());

        return redirect()->route('GetHospital')->with('success', 'New Patient Registered Successfully');
    }

    public function search(Request $request)
    {
        if ($request->has('q')) {
            $query = $request->get('q');
            $data = Hospital::where('name', 'LIKE', "%$query%")->get();

            return response($data);
        }

        return response(Hospital::paginate(10));
    }
}
