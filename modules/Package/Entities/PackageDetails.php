<?php

namespace Modules\Package\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PackageDetails extends Model
{
    use HasFactory;
  

    protected $fillable = ['package_id','name','description','price','photo_name','photo_path'];
    
    public function package(){
        return $this->belongsTo(Package::class)->withTrashed();
    }

    protected static function newFactory()
    {
        return \Modules\Package\Database\factories\PackageDetailsFactory::new();
    }
}
