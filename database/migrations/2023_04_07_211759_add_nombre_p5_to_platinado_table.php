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
        Schema::table('platinado', function (Blueprint $table) {
            //
            $table->string('nombreP5');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('platinado', function (Blueprint $table) {
            //
            $table->dropColumn('nombreP5');
        });
    }
};