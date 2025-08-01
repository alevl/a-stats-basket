<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('noticias', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->bigIncrements('id');
            $table->string('imagen', 2048)->nullable();
            $table->string('titulo', 100)->nullable();
            $table->text('desarrollo', 3000)->nullable();
            $table->bigInteger('estatus_id')->unsigned()->nullable();

            $table->timestamps();
            $table->foreign('estatus_id')->references('id')->on('estatus_torneos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('noticias');
    }
};
