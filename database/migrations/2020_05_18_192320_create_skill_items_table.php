<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkillItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skill_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sk_title_id');
            $table->string('sk_show_img');
            $table->string('sk_img');
            $table->string('name');
            $table->foreign('sk_title_id')->references('id')->on('skill_titles')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('skill_items');
    }
}
