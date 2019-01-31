<?php

namespace App\Http\Controllers;

use App\Models\Events;
use App\Models\Student;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    function homeView() {
        return view('home');
    }

    function loginView() {
        return view('login');
    }

    function registerView() {
        return view('register');
    }

    function studentlistView() {
        
        
        return view('studentlist');
    }

    function studentAddView() {

        $student =new Student();

        $student->name=null;
        $student->phone=null;
        $student->gender=null;
        $student->email=null;
        $student->course=null;
        $student->reg_no=null;

        return view('studentadd',compact('student'));
    }

    function eventlistView() {

        return view('eventlist');
    }

    function eventdetailsView() {

        $events=Events::all();

        return view('events',compact('events'));
    }


    public function editStudentView($studentid)
    {
        $student=Student::find($studentid);
        return view('studentadd',compact('student'));
    }


}
