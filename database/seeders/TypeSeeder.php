<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = config('char_db.types');

        foreach($types as $type) {
            $type['created_at'] = Carbon::now();
            $type['updated_at'] = Carbon::now();
            DB::table('types')->insert($type);
        }
    }
}
