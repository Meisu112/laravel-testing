<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Crop extends Model
{
    protected $fillable = [
        'farm_id',
        'crop_name',
        'planting_method',
        'planting_date',
        'expected_harvest_date',
        'status',
        'notes',
    ];

    protected function casts(): array
    {
        return [
            'planting_date' => 'date',
            'expected_harvest_date' => 'date',
        ];
    }

    public function farm(): BelongsTo
    {
        return $this->belongsTo(Farm::class);
    }
}

