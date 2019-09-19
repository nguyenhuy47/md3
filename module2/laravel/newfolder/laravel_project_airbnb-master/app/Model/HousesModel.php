<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static find($id)
 */
class HousesModel extends Model
{
    protected $table = 'houses';

    public function address() {
        return $this->belongsTo('App\Model\AddressModel', 'id_address');
    }

    public function kindHouse() {
        return $this->belongsTo('App\Model\KindHouseModel', 'id_kind_house');
    }

    public function user() {
        return $this->belongsTo('App\User', 'id_user');
    }

}


