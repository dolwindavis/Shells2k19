<?php

namespace App\Http\Controllers;

use App\Models\Events;
use App\Helpers\Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    function eventDetails(Request $request)
    {
        $eventid = $request->input('id');

        $event=Events::find($eventid);

        
        $payload=collect();

        $payload->put('name',$event->name);
        $payload->put('logo',$event->logo);
        $payload->put('info',$event->info);

        if($event->groupevent == '1'){

            $payload->put('students',$event->groupnumber);

        }
        else{

            $payload->put('students','1');
        }
        return response()->json($payload);

    }

    function eventParticipant(Request $request)
    {
        $eventid = $request->input('id');
        
        //$helper = new Helper;

        //$student = $helper->studentSort();

        $user=Auth::user();

        $student=$user->student()->select('name','id')->get();

        return response()->json($student);

    }

    public function eventRegister(Request $request)
    {
        
    }
}
