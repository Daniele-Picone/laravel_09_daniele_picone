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
        Schema::table('announcemt', function (Blueprint $table) {
            $table->dropColumn('autore'); // Rimuove la colonna 'autore'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('announcemt', function (Blueprint $table) {
            $table->string('autore'); // Aggiunge di nuovo la colonna 'autore' in caso di rollback
        });
    }
};
