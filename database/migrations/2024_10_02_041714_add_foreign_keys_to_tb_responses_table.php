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
        Schema::table('tb_responses', function (Blueprint $table) {
            $table->foreign(['userId'], 'tb_responses_ibfk_1')->references(['userId'])->on('tb_users')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['complaintId'], 'tb_responses_ibfk_2')->references(['complaintId'])->on('tb_complaints')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tb_responses', function (Blueprint $table) {
            $table->dropForeign('tb_responses_ibfk_1');
            $table->dropForeign('tb_responses_ibfk_2');
        });
    }
};
