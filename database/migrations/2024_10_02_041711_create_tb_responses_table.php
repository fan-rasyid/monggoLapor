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
        Schema::create('tb_responses', function (Blueprint $table) {
            $table->uuid('responseId', 50)->unique('responseid')->primary();
            $table->text('responseContent');
            $table->string('userId', 50)->index('userid');
            $table->string('complaintId', 50)->index('complaintid');
            $table->timestamp('created_at')->useCurrentOnUpdate()->nullable();
            $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_responses');
    }
};
