<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Config;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Character;
use Illuminate\Support\Carbon;
use App\Models\Type;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = Type::pluck('id')->all();
        $characters = config('char_db.characters');

        foreach ($characters as $key => $character) {
            $characters[$key]['type'] = array_rand($types);
            $characters[$key]['created_at'] = Carbon::now();
            $characters[$key]['updated_at'] = Carbon::now();
        }

        DB::table('characters')->insert($characters);
    }
}
