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
            'email'=> 'ewr@gmail.com',
            'password'=>bcrypt('Hola'),
            'profession_id'=>2
        ]);
        // DB::table('users')->where('name', 'LIKE', '%Joha%')->delete();
        // DB::table('users')
        //       ->where('id', 1)
        //       ->update(['profession_id' => 1]);

    }
}
