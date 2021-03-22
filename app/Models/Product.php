<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

/**
 * @property string $name
 * @property string $description
 * @property string $quantity
 * @property Supplier $suppliers
 * @property Order $orders
 */
class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'quantity',
    ];

    public static function storeValidationRules(Request $request) {
        return [
            'name' => ['required', 'string', 'max:191'],
            'description' => ['required', 'string', 'max:191'],
            'quantity' => ['required', 'string', 'max:191'],
        ];
    }

    public static function boot()
    {
        parent::boot();

        Product::observe(new \App\Misc\Observers\UserActionsObserver);
    }

    public function suppliers() {
        return $this->belongsToMany(Supplier::class, 'supplier_products');
    }

    public function orders() {
        return $this->belongsToMany(Order::class, 'order_details');
    }

}
