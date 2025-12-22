<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PromotionalMessage extends Model
{
    // Use HasFactory
    use HasFactory;
    protected $fillable = [
        'title',
        'content',
        'type',
        'is_active',
        'start_date',
        'end_date',
    ];
}
