<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ImageModel extends Model
{
    protected $table = 'image';

    public function houses() {
        return $this->belongsTo('App\Model\HousesModel', 'id_house');
    }
}
