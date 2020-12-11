<?php

use Illuminate\Database\Seeder;
use App\Users;
use Faker\Factory;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            Users::create([
                'name'         => "Juan",
                'firstname'    => "Gonzales",
                'lastname'     => "Marquez",
                'age'          => 27
            ]);

            Users::create([
                'name'         => "Hugo",
                'firstname'    => "Martinez",
                'lastname'     => "Gomez",
                'age'          => 28
            ]);

            Users::create([
                'name'         => "Pedro",
                'firstname'    => "Luna",
                'lastname'     => "Marquez",
                'age'          => 30
            ]);

            Users::create([
                'name'         => "Ali",
                'firstname'    => "Gonzales",
                'lastname'     => "Marquez",
                'age'          => 31
            ]);
    }


    
}
