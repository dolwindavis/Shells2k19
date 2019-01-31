<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventStudent extends Model
{
    protected $table='eventstudent';

    public function user()
    {
        return $this->belongsTo('App\Models\User','id');
    }

    public function student()
    {
        return $this->belongsTo('App\Models\Student','id');
    }

    public function events()
    {
        return $this->belongsTo('App\Models\Events','id');
    }

}
