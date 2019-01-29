<?php

namespace App\Http\Controllers;

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
        return view('studentadd');
    }

    function studentupdateView() {
        return view('studentupdate');
    }

    function eventlistView() {
        return view('eventlist');
    }

    function eventdetailsView() {

        return view('events');
    }


}
