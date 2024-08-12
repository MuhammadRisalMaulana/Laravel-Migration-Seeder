<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('m_barang', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategori_id')->constrained('m_kategori')->onDelete('cascade'); 
            $table->string('barang_kode', 10); 
            $table->integer('harga_beli'); 
            $table->integer('harga_jual'); 
            $table->string('nama_barang', 100); 
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_barang');
    }
};
