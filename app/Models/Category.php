<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $appends =[
        'parent',
    ];

    public static function find($parent_id)
    {
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
#one to many iverse
    public function parent()
    {
        return $this->belongsTo(Category::class,'parent_id');
    }
    #one to many
    public function children()
    {
        return $this->hasMany(Category::class,'parent_id');
    }
}
