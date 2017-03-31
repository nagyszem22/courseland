<?php

use Illuminate\Database\Seeder;
use Faker\Factory;

class coursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker\Factory::create();

    	for ($i=1; $i < 6; $i++) { 
    		DB::table('courses')->insert([
	            'name' => $faker->text($faker->numberBetween(36,80)),
	            'description' => $faker->paragraph($faker->numberBetween(3,6)),
	            'image' => $faker->imageUrl(600, 450, 'technics'),
	            'created_at' => date("Y-m-d H:i:s")
	        ]);
    	}
    }
}
