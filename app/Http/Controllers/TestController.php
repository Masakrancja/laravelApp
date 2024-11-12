<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use function Laravel\Prompts\select;

class TestController extends Controller
{
    public function show(): View
    {
      $db = DB::connection();
      $db->table('genres')->truncate();
      $db->table('genres')->insert(
        [
          'name' => 'RPG',
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now()
        ]
      );
      
      return view('test');
    }
}
