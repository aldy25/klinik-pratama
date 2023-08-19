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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('admin_id');
            $table->foreignId('diagnosa_id');
            $table->foreignId('layanan_id');
            $table->integer('hrg_pengobatan');
            $table->integer('total_hrg_obat');
            $table->integer('biaya_lab')->nullable();
            $table->integer('biaya_tambahan')->nullable();
            $table->integer('jml_total')->nullable();
            $table->integer('jml_bayar')->nullable();
            $table->integer('jml_kembali')->nullable();
            $table->string('status_pengambilan_obat');
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
        Schema::dropIfExists('transaksis');
    }
};
