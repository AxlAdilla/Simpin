<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddToToCicilans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cicilans', function (Blueprint $table) {
            //
            $table->foreign('id_pinjaman')->references('id')->on('pinjamans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cicilans', function (Blueprint $table) {
            //
            $table->dropForeign('cicilans_id_pinjaman_foreign');
        });
    }
}
