<?php

namespace App\Http\Controllers;

use App\Models\Events;
use App\Helpers\Helper;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        // $events=Events::select('name','id')->get();

        $helper = new Helper;

        $events=$helper->eventListSort();

    
        return view('eventlist',compact('events'));
    }

    function eventdetailsView(Request $request,$slug) {

       
        $events=Events::where('slug',$slug)->get();

        return view('events',compact('events'));
    }


    public function editStudentView($studentid)
    {
        $student=Student::find($studentid);

        return view('studentadd',compact('student'));
    }


}
