<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TabelDataVendor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_vendor', function (Blueprint $table) {
            $table->uuid('vendor_oid')->primary();
            $table->string('kd_vendor')->unique();
            $table->string('nm_vendor');
            $table->string('almt_v');
            $table->string('no_tlp_v');
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
        Schema::dropIfExists('data_vendor');
    }
}
