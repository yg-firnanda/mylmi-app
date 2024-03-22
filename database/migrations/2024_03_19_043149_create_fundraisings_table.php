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
        Schema::create('fundraisings', function (Blueprint $table) {
            $table->id();
            $table->text('image');
            $table->string('title');
            $table->string('slug');
            $table->integer('collected_fund')->default(0);
            $table->integer('target_fund');
            $table->text('description');
            $table->boolean('is_urgent')->default(0);
            $table->enum('status', ['open', 'closed'])->default('open');
            $table->dateTime('deadline');
            $table->foreignId('user_id');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreignId('category_id');
            $table->foreign('category_id')
                ->references('id')
                ->on('fundraising_categories')
                ->onUpdate('cascade')->onDelete('restrict');
            $table->foreignId('province_id');
            $table->foreignId('regency_id');
            $table->foreignId('district_id')->nullable();
            $table->foreignId('village_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fundraisings');
    }
};
