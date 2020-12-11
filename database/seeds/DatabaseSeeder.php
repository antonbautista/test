<?php

use Illuminate\Database\Seeder;
//use Database\Seeders\UsersSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([UsersSeeder::class,AddressSeeder::class]);
        //$this->call([
        //    UsersSeeder::class,
        //    //EstatusUsuarioSeeder::class,
        //    //ContactoSeeder::class,
        //]);

    }
}
