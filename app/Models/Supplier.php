<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

/**
 * @property string $name
 * @property Product $products
 */
class Supplier extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public static function storeValidationRules(Request $request) {
        return [
            'name' => ['required', 'string', 'max:191']
        ];
    }

    public static function boot()
    {
        parent::boot();

        Supplier::observe(new \App\Misc\Observers\UserActionsObserver);
    }

    public function products() {
        return $this->belongsToMany(Product::class, 'supplier_products');
    }
}
