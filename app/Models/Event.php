<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'start_date',
        'end_date',
        'start_time',
        'city',
        'user_id',
    ];
    protected $casts = [
        'start_date' => 'date:m/d/Y',
        'end_date' => 'date:m/d/Y',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function reservation(): HasMany
    {
        return $this->hasMany(Reservation::class);
    }

}

