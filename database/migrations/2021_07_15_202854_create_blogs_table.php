<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('photo');
            $table->string('thumb');
            $table->longText('detail');
            $table->bigInteger('blog_category_id')->unsigned();
            $table->foreign('blog_category_id')->on('blog_categories')->references('id');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->on('users')->references('id');
            $table->string('slug', 255)->unique();
            $table->string('tags')->nullable();
            $table->string('lang')->default('en');
            $table->integer('visit')->default(0);
            $table->string('content_lang')->default('en');
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
        Schema::dropIfExists('blogs');
    }
}
