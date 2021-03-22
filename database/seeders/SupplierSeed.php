<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Illuminate\Database\Seeder;

class SupplierSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $suppliers = [
            ['name' => 'Solutech Millers'],
            ['name' => 'Jamii Famers'],
        ];

        foreach($suppliers as $supplier) {
            Supplier::create($supplier);
        }
    }
}
