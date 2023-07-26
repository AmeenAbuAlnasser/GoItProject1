<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
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
    public function cities()
    {
        return $this->hasMany(City::class ,"Country_id" , "id");
    }
}
