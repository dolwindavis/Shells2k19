<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Http\Request;

class EventController extends Controller
{
    function eventDetails(Request $request)
    {
        $eventid = $request->input('id');

        $event=Events::find($eventid);

        $payload=collect();

        $payload->name=$event->name;
        $payload->logo=$event->logo;
        $payload->info=$event->info;

        if($event->groupevent == '1'){

            $payload->students=$event->groupnumber;

        }
        else{

            $payload->students='1';
        }

        return response()->json($payload);

    }
}
