<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use Illuminate\Http\Request;
use App\Models\Patient;
use DB;

class PatientController extends Controller
{
    public function index()
    {
        return view('/Patients.index', ['PATIENTS' =>  Patient::all()]);
    }

    public function create($id = null)
    {
        $patient = Patient::find($id);
        return view('Patients.create', ['patient' => $patient]);
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'full_name' => 'required',
            'passport_id' => 'required',
            'mobile' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
        ]);
        Patient::updateOrCreate(
            ['id' => $request->id],
            [
                "full_name" => $request->full_name,
                "dob" => $request->dob,
                "country" => $request->country,
                "id_type" => $request->id_type,
                "nationality" => $request->nationality,
                "passport_id" => $request->passport_id,
                "mobile" => $request->mobile,
                "gender" => $request->gender,
                "hospital_id" => $request->hospital_id,
            ]
        );

        $message = $request->id ? 'Patient updated' : 'New Patient Registered' . ' Successfully';
        return redirect()->route('GetPatient')->with('success',  $message);
    }

    public function destroy($id)
    {
        $patient = Patient::findOrFail($id);
        $fullname = $patient->full_name;
        $patient->delete();
        return redirect()->route('GetPatient')->with('success', "$fullname have been deleted successfully");
    }
    public function search(Request $request)
    {
        if ($request->has('q')) {
            $query = $request->get('q');
            $data = Patient::where('full_name', 'LIKE', "%$query%")->get();
            return response(['data' => $data]);
        }
        return response(Patient::paginate(15));
    }
}
