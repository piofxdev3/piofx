<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->nullable();
            $table->bigInteger('client_id')->nullable();
            $table->string('title');
            $table->string('slug');
            $table->string('category_id');
            $table->string('image');
            $table->text('excerpt')->nullable();;
            $table->text('content')->nullable();;
            $table->string('meta_title')->nullable();;
            $table->string('meta_description')->nullable();;
            $table->boolean('status')->nullable();;
            $table->timestamp('published_at')->nullable();;
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
        Schema::dropIfExists('posts');
    }
}
