<?php

use App\Model\HousesModel;
use Illuminate\Database\Seeder;

class HousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $houses = new HousesModel();
        $houses->name = 'Ha Noi hotel';
        $houses->id_address = 1;
        $houses->room = 'khách sạn';
        $houses->number_room = '4';
        $houses->number_bathroom = '2';
        $houses->describe = 'VIP';
        $houses->price = 10000000;
        $houses->id_kind_house = 1;
        $houses->id_user = 1;
        $houses->month = 1;
        $houses->status = 0;
        $houses->save();

        $houses = new HousesModel();
        $houses->name = 'HCM hotel';
        $houses->id_address = 2;
        $houses->room = 'khách sạn';
        $houses->number_room = '5';
        $houses->number_bathroom = '2';
        $houses->describe = 'VIP';
        $houses->price = 10000000;
        $houses->id_kind_house = 1;
        $houses->id_user = 1;
        $houses->month = 1;
        $houses->status = 0;
        $houses->save();

        $houses = new HousesModel();
        $houses->name = "Khách sạn";
        $houses->id_address = 3;
        $houses->room = 'khách sạn';
        $houses->number_room = '3';
        $houses->number_bathroom = '2';
        $houses->describe = 'VIP';
        $houses->price = 5000000;
        $houses->id_kind_house = 1;
        $houses->id_user = 1;
        $houses->month = 1;
        $houses->status = 1;
        $houses->save();

    }
}
