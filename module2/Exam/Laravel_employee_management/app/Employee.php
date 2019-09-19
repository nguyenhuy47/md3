<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function teams()
    {
        return $this->belongsTo('App\Team','team_id');
    }
}
