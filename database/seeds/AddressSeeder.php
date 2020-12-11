<?php

use Illuminate\Database\Seeder;
use App\Address;
use Faker\Factory;


class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Address::create([
            'address'   => "Miguel Hidalgo",
            'number'    =>  345,
            'street'    => "Hidalgo",
            'country'   => "México",
            'city'      => "Ciudad de México",
            'iduser'   => 1,
            
        ]);

        Address::create([
            'address'   => "Col. Juarez",
            'number'    => 89,
            'street'    => "Juarez",
            'country'   => "México",
            'city'      => "Ciudad de México",
            'iduser'   => 2,
            
        ]);

        Address::create([
            'address'   => "Col Guerrero",
            'number'    => 89,
            'street'    => "Guerrero",
            'country'   => "México",
            'city'      => "Ciudad de México",
            'iduser'   => 3,
            
        ]);


        Address::create([
            'address'   => "Linda Vista",
            'number'    => 78,
            'street'    => "Numero 89",
            'country'   => "México",
            'city'      => "Ciudad de México",
            'iduser'   => 4,
            
        ]);

    }
}
