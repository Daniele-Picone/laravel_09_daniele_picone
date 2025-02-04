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
        Schema::create('announcemt_tag', function (Blueprint $table) {
            $table->id();
            //announcemt_id
            $table->unsignedBigInteger('announcemt_id');
            $table->foreign('announcemt_id')->references('id')->on('announcemt');

            //tag_id
            $table->unsignedBigInteger('tag_id');
            $table->foreign('tag_id')->references('id')->on('tags');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('announcemt_tag');
    }
};
