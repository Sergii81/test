<?php

use Illuminate\Database\Seeder;

class MenagersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array = ['Ivan', 'Serg', 'Alex', 'Stepan', 'Semen', 'Max', 'Olga', 'Mary', 'Natasha', 'Helen'];
        $id = [1, 2, 3];
        for ($i=0; $i <= 2; $i++) { 
        	 DB::table('menagers')->insert([
				[
				'id' => $id[$i],
				'name' => $array[mt_rand(0, count($array)-1)],            
				'appointment' => 'Menager',
				'employment_date' => '2001.06.25',
				'salary' => 80000,
				'avatar' => './imd/default.png',  
				'chiefs_id' => rand(1, 2),
				]
        	]);
        }
    }
}
