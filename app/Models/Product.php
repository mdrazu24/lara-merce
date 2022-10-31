<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    // const CREATED_AT = "createdAt";
    // const UPDATED_AT = "updatedAt";

    protected $fillable = [
        "title",
        "description",
        "discountedPrice",
        "mainPrice",
        "ownerId",
        "image_url"
    ];

    public $timestamps = true;
    protected $primaryKey = "id";
    protected $table = "products";
}
