<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Documents;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $faker = Faker\Factory::create();
        foreach(range(1,10) as $index)
        {
        	Documents::create([
        			'title' => $faker->title,
					'description' => $faker->description,
					'type' => $faker->type,
					'size' => $faker->size,
					'view_count' => $faker->size,
					'dowload_count' => $faker->dowload_count,
        		]);
        }
    }
}
