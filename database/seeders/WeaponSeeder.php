<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Weapon;

class WeaponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $weapons = [
            "Hammer",
            "Hatchet",
            "Bottle",
            "Unarmed",
            "Molotov",
            "Granade",
            "Gun",
            "Mjolnir",
            "Shield"
        ];
        foreach ($weapons as $weapon) {
            $newWeapon = new Weapon();
            $newWeapon->name = $weapon;
            $newWeapon->save();
        }
    }
}
