<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\User::create([
            'name'  =>  'Everton De Grande' ,
            'email' =>  'evertondg@gmail.com',
            'password'  =>  bcrypt('sdmf2017'),      
        ]);
    }
}
