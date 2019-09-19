<?php

use App\Model\KindHouseModel;
use Illuminate\Database\Seeder;

class kindHouse extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kindHouse = new KindHouseModel();
        $kindHouse->name = "Khách sạn";
        $kindHouse->save();
    }
}
