<?php

namespace App\Models;

use App\Models\Traits\RelationTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory, RelationTrait;
    protected $fillable = [
        'table_id',
        'daily_id',
        'user_id',
        'title'
    ];
}
