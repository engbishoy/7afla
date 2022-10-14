<?php

namespace Modules\Page\Entities;

use Illuminate\Support\Facades\App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Page extends Model
{
    use HasFactory;

    protected $fillable = ['title_en','title_ar','content_en','content_ar'];
    
        

    public function getTitleAttribute(){

        $locale=App::getLocale();
        $cloumn= 'title_'.$locale;
        return $this->{$cloumn};
    }

    public function getContentAttribute(){

        $locale=App::getLocale();
        $cloumn= 'content_'.$locale;
        return $this->{$cloumn};
    }

    protected static function newFactory()
    {
        return \Modules\Page\Database\factories\PageFactory::new();
    }
}
