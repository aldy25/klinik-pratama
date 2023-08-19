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
        Schema::create('labs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pasien_id');
            $table->integer('wbc')->nullable();
            $table->integer('rbc')->nullable();
            $table->integer('hgb')->nullable();
            $table->integer('hct')->nullable();
            $table->integer('plt')->nullable();
            $table->integer('gds')->nullable();
            $table->integer('gdp')->nullable();
            $table->integer('gd2')->nullable();
            $table->integer('cholesterol')->nullable();
            $table->integer('trigliserida')->nullable();
            $table->integer('asam_urat')->nullable();
            $table->integer('ureum')->nullable();
            $table->integer('kreatin')->nullable();
            $table->string('goldar')->nullable();
            $table->string('hcg')->nullable();
            $table->string('malaria')->nullable();
            $table->string('warna')->nullable();
            $table->integer('ph')->nullable();
            $table->integer('berat_jenis')->nullable();
            $table->string('protein')->nullable();
            $table->string('reduksi')->nullable();
            $table->string('billirubin')->nullable();
            $table->string('sedimen')->nullable();
            $table->integer('eritrosit')->nullable();
            $table->integer('leukosit')->nullable();
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
        Schema::dropIfExists('labs');
    }
};
