<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CalenderModel extends Model
{
    protected $table = 'calender';


    public function houses()
    {
        return $this->belongsTo('App\Model\HousesModel', 'id_house');
    }
}
