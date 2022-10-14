<?php

namespace Modules\BusinessProfile\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Time extends Model
{
    use HasFactory;

    protected $fillable = ['profile_id','start_time','end_time'];
    
    protected static function newFactory()
    {
        return \Modules\BusinessProfile\Database\factories\TimeFactory::new();
    }
}
