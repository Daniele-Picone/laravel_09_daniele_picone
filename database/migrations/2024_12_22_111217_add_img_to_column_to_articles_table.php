<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->string('img')->nullable()->after('autore');
        });
    }

    
    public function down(): void
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->dropColumn('img');
        });
    }
};
