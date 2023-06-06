<?php

namespace Database\Seeders;
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
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 15; $i++) {
            $newCharacter = new Character();
            $newCharacter->name = $faker->words(3, true);
            $newCharacter->level = $faker->numberBetween(0, 100);
            $newCharacter->class = $faker->words(5, true);
            $newCharacter->race = $faker->words(2, true);
            $newCharacter->lifepoint = $faker->numberBetween(0, 100);
            $newCharacter->strength = $faker->numberBetween(0, 100);
            $newCharacter->agility = $faker->numberBetween(0, 100);
            $newCharacter->main_weapon = $faker->words(3, true);
            $newCharacter->save();
        }
    }
}
