<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        $this->call( kindHouse::class);
=======
        $this->call(kindHouse::class);
<<<<<<< HEAD
>>>>>>> c7e998b37c8b335cd0bb3a061f596ea2b610a79e
        $this->call(Address::class);
=======
//        $this->call(Address::class);
>>>>>>> 4f253c0b200cb0639bff420dc0b18192ba66084f
        $this->call(HousesTableSeeder::class);
        $this->call(Image::class);
        $this->call(Post::class);
        $this->call(CalenderTableSeeder::class);
    }
}
