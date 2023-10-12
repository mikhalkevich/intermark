<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('countries')->insert([
            'name' => 'Abkhazia',
            'alpha2' => 'AB',
        ]);
        DB::table('countries')->insert([
            'name' => 'Australia',
            'alpha2' => 'AU',
        ]);
        DB::table('countries')->insert([
            'name' => 'Angola',
            'alpha2' => 'AO',
        ]);
        DB::table('countries')->insert([
            'name' => 'Algeria',
            'alpha2' => 'DZ',
        ]);
        DB::table('countries')->insert([
            'name' => 'Indonesia',
            'alpha2' => 'ID',
        ]);
    }
}
