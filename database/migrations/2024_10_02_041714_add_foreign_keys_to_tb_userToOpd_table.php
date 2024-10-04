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
        Schema::table('tb_userToOpd', function (Blueprint $table) {
            $table->foreign(['userId'], 'tb_userToOpd_ibfk_1')->references(['userId'])->on('tb_users')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['opdId'], 'tb_userToOpd_ibfk_2')->references(['opdId'])->on('tb_opds')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tb_userToOpd', function (Blueprint $table) {
            $table->dropForeign('tb_userToOpd_ibfk_1');
            $table->dropForeign('tb_userToOpd_ibfk_2');
        });
    }
};
