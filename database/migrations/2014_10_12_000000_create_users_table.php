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
        Schema::create('tb_users', function (Blueprint $table) {
            $table->uuid('userId', 50)->unique('userid')->primary();
            $table->string('userName');
            $table->string('userEmail')->unique('useremail');
            $table->string('userPhone')->unique('userphone')->nullable();
            $table->text('userAddress')->nullable();
            $table->date('userDateOfBirth')->nullable();
            $table->string('userPassword');
            $table->enum('userRole', ['admin', 'opd', 'masyarakat'])->nullable();
            $table->enum('userStatus', ['active', 'inactive'])->nullable();
            $table->timestamp('userLastLogin_at')->nullable();
            $table->timestamp('created_at')->useCurrentOnUpdate()->nullable();
            $table->timestamp('updated_at')->useCurrentOnUpdate()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_users');
    }
};
