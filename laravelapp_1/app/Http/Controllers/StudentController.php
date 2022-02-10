<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function list()
    {
       // $student = array ("id"=>1,"name"=>"Tanvir Ahmed","dob"=>"12.12.12");
       // $student=(object) $student;
        //return var_dump($student);
        $students = array();
        for($i=0;$i<10;$i++){
            $student=array(
                "id"=> $i+1,
                "name"=>"student".($i+1),
                "dept"=>"CS"

            );
            $student=(object)$student;
            $students[]=$student;

        }

        return view('student.list')->with('students',$students);
    }
    public function create()
    {
        return view('student.create');
    }
    public function get()
    {
        $name = "Tanvir Ahmed";
        $id = "123";
        $courses = ["pl1","pl2","DS","Algorithm","oop1","oop2","oop3","atp1","atp2","atp3"];

        return view('student.get')
        ->with('name',$name)
        ->with('id',$id)
        ->with('courses',$courses);
    }
    public function details(Request $req)
    {
        return view('student.get')
        ->with('name',$req->name)
        ->with('id',$req->id-839)
        ->with('courses',[]);
    }
}
