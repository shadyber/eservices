<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('url');
            $table->string('videoId');
            $table->string('thumb_small');
            $table->string('thumb_big');
            $table->string('iframe');
            $table->longText('detail');
            $table->bigInteger('blog_category_id')->unsigned();
            $table->foreign('blog_category_id')->on('blog_categories')->references('id');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->on('users')->references('id');
            $table->string('slug', 255)->unique();
            $table->string('lang')->default('en');
            $table->string('tags')->nullable();
            $table->integer('visit')->default(0);
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
        Schema::dropIfExists('videos');
    }
}
