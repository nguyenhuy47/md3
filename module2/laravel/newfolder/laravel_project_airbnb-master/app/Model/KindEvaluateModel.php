<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class KindEvaluateModel extends Model
{
    protected $table = 'kind_evaluate';

    public function houses()
    {
        return $this->belongsTo('App\Model\HousesModel', 'id_house');
    }

}
