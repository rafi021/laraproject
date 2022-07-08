<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'is_active',
    ];

    /*Every subcategory belongto a category */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
