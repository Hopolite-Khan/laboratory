<?php

namespace App\Http\Controllers;

use App\Models\LabTest;
use Illuminate\Http\Request;

class LabTestController extends Controller
{
    public function index()
    {
        return view('/LabTests.index', ['LabTests' => LabTest::all()]);
    }

    public function create()
    {
        return view('/LabTests.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'test_name' => 'required',
            'test_date' => 'required',
            'test_price' => 'required|numeric|max:1000000|min:0 ',
            'tax' => 'required|numeric|max:100|min:0',
            'discount' => 'required|numeric|max:100|min:0',
        ]);

        LabTest::create($request->all());

        return redirect()->route('LabTest')->with('success', 'New Test Registered Successfully');
    }

    public function search(Request $request)
    {
        $data = '';
        $search = $request->search;
        if ($search != '') {
            $field = 'test_name';
            if (is_numeric($search)) {
                $field = 'id';
            }
            $data = LabTest::where($field, 'LIKE', "%$search%")->get();
        }

        return response($data);
    }
} // END OF CLASS
