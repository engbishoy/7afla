<?php

namespace Modules\BusinessProfile\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gallary extends Model
{
    use HasFactory;

    protected $fillable = ['profile_id','photo_name','photo_path'];

    
    protected static function newFactory()
    {
        return \Modules\BusinessProfile\Database\factories\GallaryFactory::new();
    }
}
