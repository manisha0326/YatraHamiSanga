<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'vehicleModel'); 
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'vehicleType'); 
    }
}
