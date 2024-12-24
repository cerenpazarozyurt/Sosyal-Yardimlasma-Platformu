<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kan_bagisi', function (Blueprint $table) {
            $table->id();
            $table->string('ad_soyad');
            $table->string('kan_grubu');
            $table->string('sehir');
            $table->text('adres');
            $table->text('aciklama');
            $table->string('telefon', 15);
            $table->decimal('latitude', 10, 7);
            $table->decimal('longitude', 10, 7);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kan_bagisi');
    }
};
