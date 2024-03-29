<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataArr = [];
        for($i = 0; $i<10; $i++){
            array_push($dataArr,[
                'name'=>str::random(10),
                'dob'=>date('Y-m-d',mt_rand(1,time())),
                'email'=>str::random(10).'@gmail.com'
            ]);
        }
        DB::table('customer')->insert($dataArr);
    }
}
