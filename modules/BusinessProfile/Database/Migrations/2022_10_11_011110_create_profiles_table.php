<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('provider_id');
            $table->foreign('provider_id')->on('providers')->references('id')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('service_id');
            $table->foreign('service_id')->on('services')->references('id')->onDelete('cascade')->onUpdate('cascade');

            $table->string('title')->nullable();

            $table->text('about')->nullable();
            $table->string('video_url')->nullable();
            $table->string('map_link')->nullable();
            $table->string('mail')->nullable();
            $table->string('web_link')->nullable();
            $table->string('phone')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('insta')->nullable();
            $table->string('behance')->nullable();
            $table->string('youtube')->nullable();
            $table->string('whatsapp')->nullable();
            
            $table->string('type_hall')->nullable();
            $table->string('capacity')->nullable();
            
            $table->string('price')->nullable();

            $table->tinyInteger('status')->default(0);
            
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
