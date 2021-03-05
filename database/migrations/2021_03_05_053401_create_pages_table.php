<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('meta_title');
            $table->string('meta_description');
            $table->string('tags');
            $table->string('description');
            $table->tinyInteger('create_menu')->nullable();
            $table->tinyInteger('publish')->nullable();
            $table->string('menu_name')->nullable();
            $table->unsignedBigInteger('user_id')->nullable()->index('pages_user_id_foreign');
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
        Schema::dropIfExists('pages');
    }
}
