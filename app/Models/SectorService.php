<?php

namespace App\Models;

use App\Models\Traits\RelationTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectorService extends Model
{
    use HasFactory,RelationTrait;
    protected $fillable = [
        'daily_id',
        'user_id',
        'sector_id',
        'period_id',
        'notes'
    ];

}
