<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Parameter extends Model
{
    use HasFactory;
    public function tests():BelongsTo
    {
        return $this->belongsTo(Test::class);
    }
}
