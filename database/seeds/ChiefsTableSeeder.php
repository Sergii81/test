<?php

use Illuminate\Database\Seeder;

class ChiefsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chiefs')->insert([
        	['id' => 1,
            'name' => 'Ivan',            
            'appointment' => 'Chief 1',
            'employment_date' => '25.06.2000',
            'salary' => 90000,
            'avatar' => './imd/default.png',  
            'ceos_id' => 1,              
        	],
        	['id' => 2,
            'name' => 'Stepan',            
            'appointment' => 'Chief 2',
            'employment_date' => '25.06.2000',
            'salary' => 90000,
            'avatar' => './imd/default.png',  
            'ceos_id' => 1,              
        	],

        ]);
    }
}
