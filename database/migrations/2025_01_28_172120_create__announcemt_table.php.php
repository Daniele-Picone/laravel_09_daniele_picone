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
        Schema::create('announcemt', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('annunciamentBody');
            $table->string('img');
            $table->decimal('price');
            $table->string('autore');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('announcemt');
    }
};
