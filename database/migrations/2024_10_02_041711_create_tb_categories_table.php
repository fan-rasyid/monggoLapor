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
        Schema::create('tb_categories', function (Blueprint $table) {
            $table->uuid('categoryId', 50)->unique('categoryid')->primary();
            $table->text('categoryName');
            $table->enum('categoryStatus', ['active', 'inactive']);
            $table->string('opdId', 50)->index('opdid');
            $table->timestamp('created_at')->useCurrentOnUpdate()->nullable();
            $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_categories');
    }
};
