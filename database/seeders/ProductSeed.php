<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'Ajab Baking Flour',
                'description' => 'Ajab Baking Flour',
                'quantity' => '240',
            ],
            [
                'name' => 'Mango Juice',
                'description' => 'Processed Mango Juice',
                'quantity' => '24',
            ],
            [
                'name' => 'Washing Powder',
                'description' => 'Washing Powder',
                'quantity' => '32',
            ],
            [
                'name' => 'Peanuts',
                'description' => 'Processed Peanuts',
                'quantity' => '40',
            ],
        ];

        foreach($products as $product) {
            Product::create($product);
        }
        
    }
}
