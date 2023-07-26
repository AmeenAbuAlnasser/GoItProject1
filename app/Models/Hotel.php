<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Hotel extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    // =====================================
    // ============= Accessors =============
    // =====================================
    protected function createdAt(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => now()->format("Y-m-d H:i:s"),
        );
    }

     public function city()
    {
        return $this->belongsTo(City::class ,"City_id" , "id");
    }
}