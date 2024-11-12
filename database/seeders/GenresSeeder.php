<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      $names = [
        'RPG', 'Adventure', 'Simulator', 'FPP', 'Logical'
      ];
      DB::table('genres')->truncate();
      $tableInserts = [];
      foreach ($names as $name) {
        $tableInserts[] = 
        [
          'name' => $name,
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
        ];
      }
      DB::table('genres')->insert($tableInserts);
    }
}
