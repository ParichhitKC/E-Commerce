<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
//
//    protected $fillable = [
//        'order_id', 'product_id', 'quantity', 'price'
//    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function OrderItem()
    {
        return $this->hasMany(OrderItem::class);

    }
}
