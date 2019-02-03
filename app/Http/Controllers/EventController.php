<?php

namespace App\Http\Controllers;

use App\Models\Events;
use App\Helpers\Helper;
use App\Models\EventStudent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    function eventDetails(Request $request)
    {
        $eventid = $request->input('id');

        $event=Events::find($eventid);

        
        $payload=collect();

        $payload->put('id',$event->id);
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


    //register an event for the student
    public function eventRegister(Request $request)
    {
        $studentid=$request->studentid;

        $eventid=$request->eventid;

        $user=Auth::user();
        
        //evennt details
        $event=Events::find($request->eventid);

        //checking a student eligible for ragistering
        for($i=0;$i<=count($studentid);$i++){

            $eventstudent=EventStudent::where(['studentid',$studentid[$i]],['eventid',$eventid]);

            //checking for exclusive event validation
            if($event->exclusive == '1' && $eventstudent){

                return response('false');

            }

        }

        $eventstudent=EventStudent::where(['collegeid',$user->id],['eventid',$eventid])->get();

        //checking college already registered or not
        if($event->groupevent == '1' && $eventstudent){

            return response('false');

        }
        //checking individual event registraion validation
        elseif($event->maxnumber >= $eventstudent->count() && $event->groupevent == '0'){

            return response('false');

        }
        //checking whether request has same number of students or not for an event
        elseif($event->groupevent == '1' && (count($studentid) != $event->groupnumber)){

            return response('false');

        }

        if($event->groupevent == '1'){

            $request->groupid=str_random(4);

        }
        else{

            $request->groupid='0';

        }
        

        for($i=0;$i<=count($studentid);$i++){

            $newevent=new EventStudent;

            $newregs = $newevent->registerEventStudent($request);

        }

        return redirect('/events/list');

    }
}
