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

        $records = Student::when($search,function ($query, $search){
            return $query->where('name','like',"%{$search}%");
        })->get();

        return view('student.search',compact('records','search'));

    }
    
}
