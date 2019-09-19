<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class HistoryModel extends Model
{
    protected $table = 'history';

    public function houses()
    {
        return $this->belongsTo('App\Model\HousesModel', 'id_house');
    }

}
