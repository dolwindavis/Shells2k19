<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    protected $table = 'students';

    protected $fillable = [
        'email','name','phone','reg_no','course','gender',
   ];

   //one to many relationship with user
   public function user()
   {
       return $this->belongsTo('App\Models\User','id');
   }


}
