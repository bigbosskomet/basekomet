<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaranpklsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftaranpkls', function (Blueprint $table) {
            $table->id();
            $table->string('nama',100);
            $table->string('nim',100);
            $table->string('detailanggota1',100);
            $table->string('detailanggota2',100);
            $table->string('detailanggota3',100);
            $table->string('detailanggota4',100);
            $table->string('tempatpkl');
            $table->date('tglpkl');
            $table->string('telp', 15);
            $table->string('file')->nullable();
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
        Schema::dropIfExists('pendaftaranpkls');
    }
}
