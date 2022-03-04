<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $hidden = [
        'created_by',
        'updated_by',
        'deleted_by',
    ];

    /**
     * Add relationships here
     * Name them with exactly the same name as the function
     * brand: public function brand()
     * media: public function media()
     */
    protected $with = [
        'brand',
        'media',
    ];

    /**
     * Get all media from one product
     */
    public function media()
    {
        return $this->hasMany(ProductMedia::class);
    }

    /**
     * Get brand from product
     */
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}
