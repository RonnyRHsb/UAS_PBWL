<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRekamedisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rekamedis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pasien_id');
            $table->unsignedBiginteger('dokter_id');
            $table->char('keluhan');
            $table->unsignedBigInteger('obat_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('pasien_id')->references('id')->on('pasiens')->onDelete('no action');
            $table->foreign('dokter_id')->references('id')->on('dokters')->onDelete('no action');
            $table->foreign('obat_id')->references('id')->on('obats')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rekamedis');
    }
}
