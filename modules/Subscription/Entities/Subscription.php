<?php

namespace Modules\Subscription\Entities;

use Illuminate\Support\Facades\App;
use Modules\Service\Entities\Service;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Subscription extends Model
{
    use HasFactory;

    protected $fillable = ['service_id','days','price'];
    
   public function service(){
       return $this->belongsTo(Service::class)->withTrashed();
   }
    protected static function newFactory()
    {
        return \Modules\Subscription\Database\factories\SubscriptionFactory::new();
    }
}
