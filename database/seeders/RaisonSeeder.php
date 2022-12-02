<?php

namespace Database\Seeders;

use App\Models\Raison;
use Illuminate\Database\Seeder;

class RaisonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Raison::create([
            'name' => [
                'fr' => 'Non conforme',
                'en' => 'Not matching',
                'ar' => 'غير مطابق',
            ],
        ]);

    }
}
