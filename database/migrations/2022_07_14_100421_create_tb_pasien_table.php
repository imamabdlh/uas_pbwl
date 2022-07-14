<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pasien', function (Blueprint $table) {
            $table->increments('pasien_id'); 
            $table->string('pasien_nik', 25); 
            $table->string('pasien_nama', 100);
            $table->string('pasien_alamat', 100);
            $table->string('pasien_jeniskelamin', 25);
            $table->string('pasien_goldarah',25);
            $table->string('pasien_nohp',25);
            

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
        Schema::dropIfExists('tb_pasien');
    }
}
