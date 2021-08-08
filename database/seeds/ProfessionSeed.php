<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfessionSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('professions')->insert([
            'description'=>'Developer FrontEnd'
        ]);
        $profession = DB::table('professions')->where('description','LIKE','Developer FrontEnd');

        
    }
}
