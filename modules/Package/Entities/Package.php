<?php

namespace Modules\Package\Entities;

use Modules\Service\Entities\Service;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\BusinessProfile\Entities\Profile;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Package extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = ['profile_id','title'];
    
    public function profile(){
        return $this->belongsTo(Profile::class)->withTrashed();
    }
 
    public function details(){
        return $this->hasMany(PackageDetails::class);
    }
 
    protected static function newFactory()
    {
        return \Modules\Package\Database\factories\PackageFactory::new();
    }
}
