<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name', 200);
            $table->string('preview', 200);
            $table->integer('user_id')->unsigned();
            $table->date('time');
            $table->text('picture');
            $table->text('detail');
            $table->timestamps();
        });
        
        Schema::table('posts', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropForegin('posts_user_id_foregin');
        Schema::dropIfExists('posts');
    }
}
