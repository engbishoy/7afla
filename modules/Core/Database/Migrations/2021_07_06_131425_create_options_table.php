<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\Core\Entities\Option;

class CreateOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('options', function (Blueprint $table) {
            $table->increments('id');
            $table->string('key')->unique();
            $table->json('value')->nullable();
        });


        
        // Set some keys for the application
        Option::setKeyValue([
            'app_description'=>'هير خالد الفقي أستاذ اللغة الألمانية خبرة 27 عام في تدريس اللغة الألمانية معد و مقدم المادة بقناه الحياه عام 2020 و 2021',
            'lesson_period'=>'6',
            'section_after_header'=>['content'=>'content','photo'=>null,'link_video'=>null],
            'about'=>['content'=>'content','photo'=>null,'titles'=>['titles'],'icons'=>['icons'] ],
            'terms'=>'terms',
            'policy'=>'policy',
            'address'=>'address',
            'email'=>'email',
            'phone'=>'phone',
            'facebook'=>'https://www.facebook.com/',
            'twitter'=>'https://www.twitter.com/',
            'instgram'=>'https://www.instagram.com/',
            'youtube'=>'https://www.youtube.com/',
            'latitude'=>'latitude',
            'longitude'=>'longitude',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('options');
    }
}
