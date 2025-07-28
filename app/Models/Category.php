<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public function brands()
    {
        return $this->hasMany(Brand::class);
    }
    protected $fillable = [
        'category_name',
        'description',
    ];
}
