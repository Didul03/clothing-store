<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
       protected $fillable = [
            'user_id',
            'product_id',
            'full_name',
            'address',
            'city',
            'postal_code',
            'phone',
            'size',
            'color',
            'quantity',
            'payment_method',
            'card_last4',
            'total_price',
        ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
