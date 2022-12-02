<?php

namespace Database\Seeders;

use App\Models\Database;
use Illuminate\Database\Seeder;

class DBSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Database::create([
            'name' => 'BD Alger',
            'path' => '',
        ]);
        Database::create([
            'name' => 'BD oran',
            'path' => '',
        ]);
    }
}
