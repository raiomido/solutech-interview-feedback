<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

/**
 * @property string $order_number
 * @property Product $products
 */
class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_number'
    ];

    public static function boot()
    {
        parent::boot();

        Order::observe(new \App\Misc\Observers\UserActionsObserver);
    }

    public static function storeValidationRules(Request $request) {
        return [
            'order_number' => ['required', 'string', 'max:191']
        ];
    }

    public function products() {
        return $this->belongsToMany(Product::class, 'order_details');
    }
}
