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
        Schema::table('tb_categories', function (Blueprint $table) {
            $table->foreign(['opdId'], 'tb_categories_ibfk_1')->references(['opdId'])->on('tb_opds')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tb_categories', function (Blueprint $table) {
            $table->dropForeign('tb_categories_ibfk_1');
        });
    }
};
