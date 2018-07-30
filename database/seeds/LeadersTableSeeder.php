<?php

use Illuminate\Database\Seeder;

class LeadersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = ['Ivan', 'Serg', 'Alex', 'Stepan', 'Semen', 'Max', 'Olga', 'Mary', 'Natasha', 'Helen'];
        
        for ($i=0; $i <= 4; $i++) { 
        	 DB::table('leaders')->insert([
				[
				'id' => $i+1,
				'name' => $array[mt_rand(0, count($array)-1)],            
				'appointment' => 'Leader',
				'employment_date' => '2001.06.25',
				'salary' => 70000,
				'avatar' => './imd/default.png',  
				'menagers_id' => rand(1, 3),
				]
        	]);
        }
    }
}
