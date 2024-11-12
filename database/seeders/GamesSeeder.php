<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;


class GamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::table('games')->truncate();

      $faker = Factory::create();
      
      for ($i=0; $i<10; $i++) {
        $rows = [];
        for ($j=0; $j<10; $j++) {
          $row = [];
          $row['title'] = $faker->words($faker->numberBetween(2,3), true);
          $row['description'] = $faker->sentence($faker->numberBetween(10, 20));
          $row['publisher'] = $faker->randomElement(['EA games', 'CBS', 'Atari', 'Nontendo', 'CD Project']);
          $row['genre_id'] = $faker->numberBetween(1, 5);
          $row['created_at'] = Carbon::now();
          $row['updated_at'] = Carbon::now();
          $rows[] = $row;
        }
        DB::table('games')->insert($rows);
      }

    }
}
