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
        Schema::create('tb_complaintAttachments', function (Blueprint $table) {
            $table->uuid('attachmentId', 50)->unique('attachmentId')->primary();
            $table->text('attachmentFile');
            $table->string('complaintId', 50)->unique('complaintid');
            $table->string('userId', 50)->index('userid');
            $table->timestamp('created_at')->useCurrentOnUpdate()->nullable();
            $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_complaintAttachments');
    }
};
