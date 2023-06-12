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
        'Cecchino nelle scuole',
         'Polentone',
        'Terrone',
        'Stronzone arcobaleno',
          'Passatore di HIV',
          'Donatore di 104',
          'Accettore di disabilità',
          'Vincitore del GayPride',
          'Orgoglio Ebraico',
        ];

        foreach($types as $type) {
            $newType = new Type();
            $newType->name = $type;
            $newType->save();
        }
    }
}
