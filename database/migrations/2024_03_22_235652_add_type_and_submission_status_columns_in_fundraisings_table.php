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
        Schema::table('fundraisings', function (Blueprint $table) {
            $table->enum('type', ['standard', 'urgent', 'highlight'])->default('standard')->after('description');
            $table->enum('submission_status', ['pending', 'active', 'rejected'])->default('pending')->after('deadline');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('fundraisings', function (Blueprint $table) {
            $table->dropColumn(['type', 'submission_status']);
        });
    }
};
