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
        Schema::create('first_form',function(Blueprint $table){
            $table->id()->autoIncrement();  //主キー設定、絶対必要。
            $table->string('name',255)->nullable(false);    //notNULL制約
            $table->string('mail',255);
            $table->string('tel',255);
            $table->string('gender',255);
            $table->string('work',255);
            $table->string('learn',255);
            $table->timestamps();
        }
    );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('first_form');
    }
};
