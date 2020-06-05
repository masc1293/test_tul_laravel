<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class ProductCar extends Model
{
    protected $fillable = [
        'product_id',
        'cart_id',
        'quantity'
    ];

    protected $appends = ['state', 'productCart'];

    protected $visible = ['id', 'product_id', 'productCart', 'cart_id', 'state', 'quantity', 'created_at',
    'updated_at'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function cart()
    {
        return $this->belongsTo(Cart::class);
    }

    public function getStateAttribute()
    {
        return $this->cart;
    }

    public function getProductCartAttribute()
    {
        return $this->product;
    }
}
