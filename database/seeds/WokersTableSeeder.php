<?php

use Illuminate\Database\Seeder;

class WokersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = ['Ivan', 'Serg', 'Alex', 'Stepan', 'Semen', 'Max', 'Olga', 'Mary', 'Natasha', 'Helen'];
        
        for ($i=0; $i <= 50000; $i++) { 
        	 DB::table('wokers')->insert([
				[
				'id' => $i+1,
				'name' => $array[mt_rand(0, count($array)-1)],            
				'appointment' => 'Woker',
				'employment_date' => '2001.06.25',
				'salary' => 60000,
				'avatar' => './imd/default.png',  
				'seniors_id' => rand(1, 10),
				]
        	]);
        }
    }
}
