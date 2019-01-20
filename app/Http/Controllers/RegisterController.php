<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\College;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\CollegeRegisterRequest;

class RegisterController extends Controller
{
    
    //Registration of the college

    public function registerCollege(CollegeRegisterRequest $request)
    {


        // validation rules => CollegeRegisterRequest  

        $validated = $request->validated();

        //beginning a Database transaction
        DB::beginTransaction();

        try{
       
            //registering a new user
            $newuser = new User;
            $newuser->registerUser($request);


            //inserting the college details
            $newcollege =new College;
            $newcollege->insertCollege($request,$newuser);

        //commiting the database transactions
            DB::commit();
        }
        catch(Exception $e){

            //rollback the transactions if any error occur
            DB::rollBack();
            return response('errors');

        }

        return response('true');
        
    }


    public function registerStudent(Request $request)
    {
        
    }
}
