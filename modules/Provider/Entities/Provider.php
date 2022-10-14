<?php

namespace Modules\Provider\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Provider\Entities\Location;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\BusinessProfile\Entities\Profile;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Modules\Package\Entities\Package;

class Provider extends Authenticatable
{
    use HasFactory, SoftDeletes,Notifiable;

    protected $guard=['provider'];
    protected $fillable = ['name','email','type','password'];
    protected $hidden = [
        'password',
    ];

    public function profile(){
        return $this->hasMany(Profile::class);
    }

    public function packages()
    {
        return $this->hasManyThrough(Package::class, Profile::class);
    }

    protected static function newFactory()
    {
        return \Modules\Provider\Database\factories\ProviderFactory::new();
    }
}
