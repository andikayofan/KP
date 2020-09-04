<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TabelBarangMasuk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_barang_masuk', function (Blueprint $table) {
            $table->uuid('msk_oid')->primary();
            $table->uuid('mstr_oid');
            $table->string('inv_msk');
            $table->string('tgl_masuk');
            $table->uuid('vendor_oid');
            $table->integer('jml_brg');
            $table->string('pnrm_barang');
            $table->string('nik_pnrm');
            $table->string('status');
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
        Schema::dropIfExists('data_barang_masuk');
    }
}
