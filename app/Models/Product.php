<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    // const CREATED_AT = "createdAt";
    // const UPDATED_AT = "updatedAt";

    protected $fillable = [
        "title",
        "description",
        "discountedPrice",
        "mainPrice",
        "image_url"
    ];

    public $timestamps = true;
    protected $primaryKey = "id";
    protected $table = "products";


    public function user () {
        return $this->belongsTo(User::class);
    }

}
