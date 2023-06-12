<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Config;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Character;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $characters = config('char_db.characters');

        foreach($characters as $character) {
            DB::table('characters')->insert($character);
        }
    }
}
