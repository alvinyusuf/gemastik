<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->foreignId('admin_id');
            $table->foreignId('tag_id');
            $table->foreignId('comment_id');
            $table->text('title');
            $table->string('slug')->unique();
            // $table->string('gambar');
            $table->text('body');
            $table->integer('like');
            $table->integer('comments');
            $table->integer('lihat');
            $table->date('published_at')->nullable();
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
};
