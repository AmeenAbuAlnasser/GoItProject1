<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
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



    // =====================================
    // ============= Relations =============
    // =====================================
    public function country()
    {
        return $this->belongsTo(Country::class ,"Country_id" , "id");
    }
}