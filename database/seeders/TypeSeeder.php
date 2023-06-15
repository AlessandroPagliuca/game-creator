<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {
        $types = [
            'Distruttore di mondi',
            'Ladro gentiluomo',
            'Il campione',
            'Eroe del piano materiale',
            'L\'appestato',
            'Il reietto',
            'Devoto alla giustizia',
            'Lo spacca-teschi',
            'Arcanista Dimensionale',
            'Apirante Necromante',
            'Domatore di Draghi',
            'Distruttore di Goblin',
            'Seduttore di orchi',
            'Il devoto',
            'Lo sfuggente',
            'Signore dell\'antico regno',

        ];

        foreach ($types as $type) {
            $newType = new Type();
            $newType->name = $type;
            $newType->save();
        }
    }
}