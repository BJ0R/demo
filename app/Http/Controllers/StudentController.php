<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('index', compact('students'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required|integer|min:1',
            'section' => 'required',
            'department' => 'required|in:CAS,CBME,CTE'
        ]);

        Student::create($request->all());

        return redirect('/')->with('success', 'Student created successfully.');
    }

    public function edit(Student $student)
    {
        return view('edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required|integer|min:1',
            'section' => 'required',
            'department' => 'required|in:CAS,CBME,CTE'
        ]);

        $student->update($request->all());

        return redirect('/')->with('success', 'Student updated successfully');
    }

    public function destroy(Student $student)
    {
        $student->delete();

        return redirect('/')->with('success', 'Student deleted successfully');
    }
}