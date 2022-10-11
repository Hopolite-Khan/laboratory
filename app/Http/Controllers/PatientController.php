<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        return view('Patients.index', ['patients' => Patient::paginate(10)]);
    }


    public function getPatients(Request $request)
    {
        $query = $request->query;
        $order = $query->get('order') ?? "updated_at,desc";
        $search = $query->get('search') ?? false;
        $limit  = $query->get('limit') ?? 10;
        list($orderBy, $type) = explode(',', $order);
        $patients = [];
        if($search) {
            $patients = Patient::where('full_name', 'LIKE', "%$search%")
            ->orderBy($orderBy,$type)
            ->paginate($limit);
        } else {
            $patients = Patient::orderBy($orderBy, $type)->paginate($limit);
        }
        return response($patients);
    }
    public function create($id = null)
    {
        $patient = null;
        if($id)
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
                'full_name' => $request->full_name,
                'dob' => $request->dob,
                'country' => $request->country,
                'id_type' => $request->id_type,
                'nationality' => $request->nationality,
                'passport_id' => $request->passport_id,
                'mobile' => $request->mobile,
                'gender' => $request->gender,
                'hospital_id' => $request->hospital_id,
            ]
        );

        $message = $request->id ? 'Patient updated' : 'New Patient Registered'.' Successfully';

        return redirect()->route('GetPatient')->with('success', $message);
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
