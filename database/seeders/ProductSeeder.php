<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            "brand_id" => 1,
            "sub_category_id" => 1,
            "category_id" => 1,
            "name" => "SIGNAL TRIP",
            "code" => "21163741",
        ]);
        Product::create([
            "brand_id" => 1,
            "sub_category_id" => 1,
            "category_id" => 1,
            "name" => "SIGNAL THBRUSH",
            "code" => "21163741",
        ]);
        Product::create([
            "sub_category_id" => 2,
            "category_id" => 2,
            "brand_id" => 2,
            "name" => "SIGNAL TB TRIP",
            "code" => "67780500",
        ]);
        Product::create([
            "sub_category_id" => 1,
            "category_id" => 2,
            "brand_id" => 2,
            "name" => "SIGNAL TB",
            "code" => "67451715",
        ]);
        Product::create([
            "sub_category_id" => 2,
            "category_id" => 2,
            "brand_id" => 1,
            "name" => "TOOTHPASTE CAVITYFITR 25ML",
            "code" => "67973397",
        ]);
        Product::create([
            "sub_category_id" => 4,
            "category_id" => 2,
            "brand_id" => 2,
            "name" => "SHAMPO COCONUT 350ML",
            "code" => "68429763",
        ]);
    }
}
