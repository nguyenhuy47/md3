<?php

use App\Model\CalenderModel;
use Illuminate\Database\Seeder;

class CalenderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $calender = new CalenderModel();
        $calender->calender = date('Y-m-d H:i:s');
        $calender->name = 'tuan';
        $calender->phone = 123;
        $calender->id_house = 1;
        $calender->save();

        $calender = new CalenderModel();
        $calender->calender = date('Y-m-d H:i:s');
        $calender->name = 'khai';
        $calender->phone = 123;
        $calender->id_house = 2;
        $calender->phone = 123;
        $calender->save();

        $calender = new CalenderModel();
        $calender->calender = date('Y-m-d H:i:s');
        $calender->name = 'huan';
        $calender->phone = 123;
        $calender->id_house = 3;
        $calender->save();

        $calender = new CalenderModel();
        $calender->calender = date('Y-m-d H:i:s');
        $calender->name = 'tuan';
        $calender->phone = 123;
        $calender->id_house = 1;
        $calender->save();

        $calender = new CalenderModel();
        $calender->calender = date('Y-m-d H:i:s');
        $calender->name = 'khai ';
        $calender->phone = 123;
        $calender->id_house = 2;
        $calender->save();

        $calender = new CalenderModel();
        $calender->calender = date('Y-m-d H:i:s');
        $calender->name = 'huan ';
        $calender->phone = 123;
        $calender->id_house = 3;
        $calender->save();

    }
}
