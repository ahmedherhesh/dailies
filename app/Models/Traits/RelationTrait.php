<?php

namespace App\Models\Traits;

use App\Models\User;

trait RelationTrait
{
    function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
