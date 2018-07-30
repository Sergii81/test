<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CeosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ceos')->insert([
        	['id' => 1,
            'name' => 'Serg',            
            'appointment' => 'CEO',
            'employment_date' => '2000.06.25',
            'salary' => 10000,
            'avatar' => './imd/default.png',                
        	],
        ]);
    }
}
