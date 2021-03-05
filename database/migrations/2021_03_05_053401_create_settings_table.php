<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('description');
            $table->string('meta_title');
            $table->string('meta_description');
            $table->string('primary_email');
            $table->string('secondary_email');
            $table->string('haunting_line');
            $table->string('contact');
            $table->string('address');
            $table->string('image')->nullable();
            $table->unsignedBigInteger('user_id')->nullable()->index('settings_user_id_foreign');
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
        Schema::dropIfExists('settings');
    }
}
