<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(Request $request){
    //public function index(){
        //$records = Student::all();
        //return view('student.index',compact('records'));

        $search= $request->input('search');
        //dd($seach);
        $records = Student::when($search,function ($query, $search){
            return $query->where('name','like',"%{$search}%");
        })->get();

        return view('student.search',compact('records','search'));

    }

    public function create(){
        return view('student.add');
    }

    public function store(Request $request){
        $student = $request->validate([
            'name' => ['required', 'regex:/^[A-Za-z0-9 ]+$/'],
            'course' => ['required'],
            'year' => ['required', 'integer', 'between:1,4'],
        ]);
    
        Student::create($student);
        return redirect('/student')->with('success', 'Student added successfully');
    }

    public function show($id){
        $records=Student::find($id);
        return view('student.show',compact('records'));
    }

    public function edit($id){
        $records=Student::find($id);
        return view('student.edit',compact('records'));
    }
    
    public function update(Request $request, $id){
        $records = $request->validate([
            'name' => ['required', 'regex:/^[A-Za-z0-9 ]+$/'],
            'course' => ['required'],
            'year' => ['required', 'integer', 'between:1,4'],
        ]);
    
        $student = Student::findOrFail($id);
        $student->update($records);
        return redirect('/student')->with('success', 'Student added successfully');
    }

    public function destroy($id){
        $records=Student::find($id);
        $records->delete();
        return redirect('/student');
    }
}
