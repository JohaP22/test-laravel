<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Profession;

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
        DB::table('professions')->where('description','LIKE','Developer FrontEnd');

        Profession::create([
            'description'=>'Developer Backend'
        ]);
        $professions = Profession::all(); 
        $professionId = Profession::where('description', 'Desarrollador Backend')->value('id');

    }
}
