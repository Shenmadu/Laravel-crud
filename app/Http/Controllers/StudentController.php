<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        student::create([
            'name' => $request->input('name'),
            'email' => $request->input('email')
        ]);

        return redirect()->route('Student.show-all');
        
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $students = student::all();
        // dd($students);
        return view('view-all', compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($student_id)
    {
        $students=student ::findOrFail($student_id);
       return view('edit', compact('students'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($student_id , Request $request, student $student)
    {
        student::findOrFail ($student_id)->update($request->all());
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(student $student)
    {
        // dd($student);
        $student->deleteOrFail();
        return back();
    }
}
