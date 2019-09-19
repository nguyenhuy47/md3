<?php

use Illuminate\Database\Seeder;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 10; $i++) {
            DB::table('table_product')->INSERT([
                'name' => str_random(20),
                'price' => mt_rand(100, 200),
            ]);
        }
    }
}
