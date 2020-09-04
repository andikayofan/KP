<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TabelBarangKeluar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_barang_keluar', function (Blueprint $table) {
            $table->uuid('klr_oid')->primary();
            $table->uuid('mstr_oid');
            $table->string('inv_klr');
            $table->string('tgl_klr');
            $table->string('nik_pnrm');
            $table->string('nama_penerima');
            $table->string('dept_pnrm');
            $table->string('lokasi_pnrm');
            $table->string('jml_klr');
            $table->string('pmbr_brg');
            $table->string('pmbr_nik_brg');
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
        Schema::dropIfExists('data_barang_keluar');
    }
}
