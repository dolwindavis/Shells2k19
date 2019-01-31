<?php

namespace App\Helpers;

use App\Models\Events;
use App\Models\Student;
use App\Models\EventStudent;
use Illuminate\Support\Facades\Auth;

class Helper
{

    public function eventListSort()
    {
        $user=Auth::user();

        $events=Events::all();

        foreach($events as $key=>$event){

            $eventstudent=EventStudent::where('event_id',$event->id)->first();

            if($eventstudent){
                if($event->exclusive == '1'){

                    $events->forget($key);
                    continue;

                }
                else if($event->groupevent =='1'){

                    $events->forget($key);
                    continue;

                }
                elseif($event->groupevent == '0' && $event->maxnumber >= $eventstudent->count()){

                    $events->forget($key);
                    continue;

                }

            }
        }
        return $sevents;

    }

    public function studentSort($request)
    {

        $students=Student::all();

        foreach($students as $student){

            if($eventstudent){
                
                $eventstudent = EventStudent::where('student_id',$student->id)->get();

                if($eventstudent){

                    foreach($eventstudent as $key=> $es){

                        $event=Event::where('id',$eventid)->first();

                        if($event->exclusive == '1'){

                            $students->forget($key);
                            continue;
                        }
                       
                    }

                }

            }
        }

        return $students;

    }

}