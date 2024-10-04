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
        Schema::create('tb_complaints', function (Blueprint $table) {
            $table->uuid('complaintId', 50)->unique('complaintid')->primary();
            $table->text('complaintContent');
            $table->string('complaintLocation');
            $table->enum('complaintIsAnonymous', ['0', '1'])->default('0');
            $table->string('userId', 50)->index('userid');
            $table->string('categoryId', 50)->index('categoryid');
            $table->enum('complaintStatus', ['Belum Dibaca', 'Dibaca', 'Direspon', 'Selesai']);
            $table->enum('complaintResponseStatus', ['Sangat Responsif', 'Responsif', 'Kurang Responsif', 'Tidak Responsif']);
            $table->timestamp('created_at')->useCurrentOnUpdate()->nullable();
            $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_complaints');
    }
};
