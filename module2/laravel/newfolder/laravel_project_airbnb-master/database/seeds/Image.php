<?php

use App\Model\ImageModel;
use Illuminate\Database\Seeder;

class Image extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $image = new ImageModel();
        $image->image = '12';
        $image->id_house = 2;
        $image->save();
    }
}
