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
            $table->id();
            $table->longText('post_desc');
            $table->foreignId('posted_by_id');
            $table->string('photo_url')->nullable();
            $table->string('activity')->nullable();
            $table->string('shared_link')->nullable();
            $table->integer('post_like_cnt')->nullable();
            $table->integer('post_share_cnt')->nullable();
            $table->integer('post_comment_cnt')->nullable();
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
