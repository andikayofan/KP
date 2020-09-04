<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TabelPengajuanBarang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuan_barang', function (Blueprint $table) {
            $table->uuid('peng_brg_oid')->primary();
            $table->string('kd_peng')->unique();
            $table->uuid('mstr_oid');
            $table->string('tgl_pemb');
            $table->string('jml_brg');
            $table->integer('hrg_satuan');
            $table->integer('jml_harga');
            $table->string('status');
            $table->string('keteragan');
            $table->rememberToken();
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
        Schema::dropIfExists('pengajuan_barang');
    }
}
