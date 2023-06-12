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
        Schema::create('character_weapon', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('character_id');
            $table->foreign('character_id')->references('id')->on('characters')->cascadeOnDelete();
            $table->unsignedBigInteger('weapon_id');
            $table->foreign('weapon_id')->references('id')->on('weapons')->cascadeOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('character_weapon');
    }
};
