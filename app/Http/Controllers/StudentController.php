<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('welcome')->with('students',$students);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $student = new Student;
        $student->name = $request->nombre;
        $student->document = $request->documento;
        $student->email = $request->correo;
        $student->save();
        return redirect()->route('students.index');
        // return view('welcome');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $student = Student::find($id);
        return view('edit')->with('student',$student);
    }

    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->name = $request->nombre;
        $student->document = $request->documento;
        $student->email = $request->correo;
        $student->save();
        return redirect()->route('students.index');
    }

    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect()->route('students.index');
    }
}
