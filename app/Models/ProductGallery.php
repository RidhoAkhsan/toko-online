<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
Use Illuminate\Database\Eloquent\Casts\Attribute;

class ProductGallery extends Model
{
    use HasFactory;

    // public static function index()
    // {
    //     // Implementasi logika yang diinginkan untuk mengambil data index dari ProductGallery
    // }    

    protected $fillable = [
        'products_id',
        'url'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    protected function url(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => asset('/storage/products/' . $value)
        );
    }

}
