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
        $characters = config('char_db.characters');
        $typeIds = Type::pluck('id');

        foreach ($characters as $character) {
            $newCharacter = new Character();
            $newCharacter->name = $character['name'];
            $newCharacter->level = $character['level'];
            $newCharacter->class = $character['class'];
            $newCharacter->race = $character['race'];
            $newCharacter->lifepoint = $character['lifepoint'];
            $newCharacter->strength = $character['strength'];
            $newCharacter->agility = $character['agility'];
            $newCharacter->main_weapon = $character['main_weapon'];
            $newCharacter->type_id = $typeIds->random();
            $newCharacter->save();
        }
    }
}
