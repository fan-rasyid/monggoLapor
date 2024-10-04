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
        Schema::create('tb_opds', function (Blueprint $table) {
            $table->uuid('opdId', 50)->unique('opdid')->primary();
            $table->text('opdName');
            $table->string('opdShortName')->unique('opdshortname');
            $table->enum('opdStatus', ['active', 'inactive']);
            $table->timestamp('created_at')->useCurrentOnUpdate()->nullable();
            $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_opds');
    }
};
