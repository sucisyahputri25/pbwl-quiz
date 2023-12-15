<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPelangganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pelanggan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pel_id_gol');
            $table->string('pel_no', 20)->unique();
            $table->string('pel_nama', 50);
            $table->text('pel_alamat');
            $table->string('pel_hp', 20);
            $table->string('pel_ktp', 50);
            $table->string('pel_seri', 50);
            $table->integer('pel_meteran');
            $table->enum('pel_aktif', ['Y', 'N'])->default('Y');
            $table->unsignedBigInteger('pel_id_user');
            $table->timestamps();
            $table->foreign('pel_id_gol')->references('id')->on('tb_golongan');
            $table->foreign('pel_id_user')->references('id')->on('users');      
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_pelanggan');
    }
}
