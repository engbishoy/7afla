<?php

namespace Modules\Service\Entities;

use Illuminate\Support\Facades\App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = ['name_en','name_ar'];
    
    public function getNameAttribute(){
        $locale=App::getLocale();
        $cloumn='name_'.$locale;
        return $this->{$cloumn};
    }
    protected static function newFactory()
    {
        return \Modules\Service\Database\factories\ServiceFactory::new();
    }
}
