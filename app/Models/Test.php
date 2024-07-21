<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Test extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function para():HasMany
    {
        return $this->hasMany(Parameter::class);
    }
}
