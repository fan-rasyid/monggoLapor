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
        Schema::table('tb_responseAttachments', function (Blueprint $table) {
            $table->foreign(['responseId'], 'tb_responseAttachments_ibfk_1')->references(['responseId'])->on('tb_responses')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['userId'], 'tb_responseAttachments_ibfk_2')->references(['userId'])->on('tb_users')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tb_responseAttachments', function (Blueprint $table) {
            $table->dropForeign('tb_responseAttachments_ibfk_1');
            $table->dropForeign('tb_responseAttachments_ibfk_2');
        });
    }
};
