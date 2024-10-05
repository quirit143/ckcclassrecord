<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $records = Student::all();
        return view('student.index',compact('records'));
    }
    
}
