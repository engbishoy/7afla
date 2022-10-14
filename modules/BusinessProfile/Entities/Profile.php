<?php

namespace Modules\BusinessProfile\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Provider\Entities\Provider;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\BusinessProfile\Entities\Gallary;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Service\Entities\Service;

class Profile extends Model
{
    use HasFactory,SoftDeletes;
  
    protected $fillable = ['provider_id','service_id','title','about','video_url','map_link','mail','web_link','phone','facebook','twitter','insta','behance','youtube','whatsapp','capacity','type_hall','price','status'];
    
    public function provider(){
        return $this->belongsTo(Provider::class)->withTrashed();
    }

    public function service(){
        return $this->belongsTo(Service::class)->withTrashed();
    }
    
    public function gallary(){
        return $this->hasMany(Gallary::class);
    }

    public function times(){
        return $this->hasMany(Time::class);
    }
    protected static function newFactory()
    {
        return \Modules\BusinessProfile\Database\factories\ProfileFactory::new();
    }
}
