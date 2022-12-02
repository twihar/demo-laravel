<?php

namespace Database\Seeders;

use App\Models\SubCategory;
use Illuminate\Database\Seeder;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SubCategory::insert([
            ["category_id" => 1, "name" => "Brosse à dents"],
            ["category_id" => 2, "name" => "Dentifrices"],
            ["category_id" => 3, "name" => "Aprés-shampoing"],
            ["category_id" => 4, "name" => "Shampoing"]
        ]);
    }
}
