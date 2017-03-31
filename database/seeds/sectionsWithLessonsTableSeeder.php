<?php

use Illuminate\Database\Seeder;

class sectionsWithLessonsTableSeeder extends Seeder
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
        	for ($j=0; $j < $faker->numberBetween(5,10); $j++) {
        		$id = DB::table('sections')->insertGetId([
        			'course_id' => $i,
		            'name' => $faker->text($faker->numberBetween(12,60)),
		            'created_at' => date("Y-m-d H:i:s")
		        ]);

        		$codes = array('39Uib7XW57k', 'ETuQsDNu3tg', 'kuCkhrPEFqk', 'b7gor9UB7Qg','4lfmZvWgQaA', 'f8JbZP9YN8k', 'z0yKv0CEpQU', 'NoSso-IN2D0', 'D2C8wFlzsRQ', 'oVRuCCSEOmE', 'apbnAHshuIM', '3BHyfYiBt5o', 'zTkpDZIEVMs', 'bh8U8cI6lB0', 'HZSkNuzerwM', '3-yWkWIjvNc', '62_IZt6VfaE', 'GSgx5IpZaks', 'GSgx5IpZaks', 'fW7v7LGcIUs', 'RzMlrlQn6zg', 'PFA-RmV_wG0', 'DRsvWR48pbw', 'jz3MtN41JOw', 'evUj15uSrn4', 'ex4gf12e2Xg', '6n5NbWG7QII', '1WhsntHPDAk', '9UVhKQR0W1o', 'K1sUFMHKgzA', 'o6ausBkzrPk', 'Xn8hKr8z8lY', 'NgyrZC5uOCw', 'qfzKsUUv8C8', 'Ew6h7eCG42E', 'JgGeog15qWM', 'kePAl0YbmbM', 'uzTjI9ELwt4', 'Rfj4s7OaMZQ');
		        for ($k=1; $k < $faker->numberBetween(3,10); $k++) { 
		        	DB::table('lessons')->insertGetId([
	        			'course_id' => $i,
	        			'section_id' => $id,
			            'name' => $faker->text($faker->numberBetween(12,60)),
			            'description' => $faker->paragraph($faker->numberBetween(3,6)),
			            'type' => 'video',
			            'link' => $faker->randomElement($codes),
			            'created_at' => date("Y-m-d H:i:s")
			        ]);
		        }
        	}
    	}
    }
}
