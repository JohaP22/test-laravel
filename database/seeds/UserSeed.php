<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::table('users')->insert([
            'name'=>'Joha',
            'email'=> 'hello@gmail.com',
            'password'=>bcrypt('Hola'),
            'profession_id'=>1
        ]);
    }
}
