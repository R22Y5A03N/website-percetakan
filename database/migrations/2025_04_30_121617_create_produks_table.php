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
    Schema::create('produks', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->text('deskripsi');
        $table->decimal('harga', 10, 2);
        $table->string('gambar')->nullable(); // nama file gambar
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
        Schema::dropIfExists('produks');
    }
};
