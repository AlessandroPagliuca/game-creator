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
            'Rimorchiatore geriatrico',
            'Sacerdote Veneto',
            'Milanista in semifinale',
            'Dominatore di Milf',
            'Stronzone LGBTQIA+ amazon prime 4k full HD',
            'Passatore di HIV',
            'Donatore di 104',
            'Accettore di disabilità',
            'Amministratore di Condominio',
            'Orgoglio Ebraico',
        ];

        foreach($types as $type) {
            $newType = new Type();
            $newType->name = $type;
            $newType->save();
        }
    }
}
