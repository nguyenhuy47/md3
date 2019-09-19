<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PostModel extends Model
{
    protected $table = 'post';

    public function image()
    {
        return $this->hasMany('App\Model\ImageModel', 'id_image');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'id_user');
    }

    public function houses()
    {
        return $this->belongsTo('App\Model\HousesModel', 'id_house');
    }
}
