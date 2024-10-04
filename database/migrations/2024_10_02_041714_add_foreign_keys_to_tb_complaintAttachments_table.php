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
        Schema::table('tb_complaintAttachments', function (Blueprint $table) {
            $table->foreign(['complaintId'], 'tb_complaintAttachments_ibfk_1')->references(['complaintId'])->on('tb_complaints')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['complaintId'], 'tb_complaintAttachments_ibfk_2')->references(['complaintId'])->on('tb_complaints')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['userId'], 'tb_complaintAttachments_ibfk_3')->references(['userId'])->on('tb_users')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tb_complaintAttachments', function (Blueprint $table) {
            $table->dropForeign('tb_complaintAttachments_ibfk_1');
            $table->dropForeign('tb_complaintAttachments_ibfk_2');
            $table->dropForeign('tb_complaintAttachments_ibfk_3');
        });
    }
};
