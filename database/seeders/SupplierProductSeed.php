<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Illuminate\Database\Seeder;

class SupplierProductSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            1 => [
                'products' => [1,3]
            ],
            2 => [
                'products' => [2,4]
            ],
        ];

        foreach($items as $supplierId => $packages) {
            $supplier = Supplier::find($supplierId);

            foreach($packages as $type => $ids) {
                $supplier->{$type}()->sync($ids);
            }
        }
    }
}
