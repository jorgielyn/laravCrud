<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Student;


class StudentController extends Controller
{
    public function home()
    {
        $student = \App\Model\Student::all();
        return view('dashboard',compact('student'));
    }

    public function add_view()
    {
        return view('add');
    }

    public function store(Request $request)
    {
        $student = [];
        $data = $request->all();
        $student['date'] = $data['date'];
        $student['amount'] = $data['amount'];
        $student['amountNum'] = $data['amountNum'];
        $student['reason'] = $data['reason'];
        $student['month'] = $data['month'];
        $student['nameOfPayee'] = $data['nameOfPayee'];

        $save = Student::create($student);
        $save->save();


        return redirect()->route('home');
    }

    public function edit(Request $request, $id)
    {
        
    }
}
