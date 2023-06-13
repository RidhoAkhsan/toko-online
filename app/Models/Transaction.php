<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'id',
        'users_id',
        'name',
        'email',
        'phone',
        'address',
        'courier',
        'payment',
        'payment_url',
        'total_price',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(user::class, 'users_id', 'id');

        // this (transaction) =>belongTo (dimiliki)
        // oleh User melalui users_id ke id
    }

    public function TransactionItem()
    {
        return $this->hasMany(TransactionItem::class, 'transaction_id', 'id');
    }
}
