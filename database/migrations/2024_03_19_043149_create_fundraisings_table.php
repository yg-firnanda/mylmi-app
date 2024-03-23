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
            $table->bigInteger('collected_fund')->default(0);
            $table->bigInteger('target_fund');
            $table->text('description');
            $table->boolean('is_urgent')->default(0);
            $table->enum('status', ['open', 'closed'])->default('open');
            $table->dateTime('deadline');
            $table->foreignId('user_id');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('category_id');
            $table->foreign('category_id')
                ->references('id')
                ->on('fundraising_categories')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('province_id');
            // $table->foreign('province_id')
            //     ->references('id')
            //     ->on('provinces')
            //     ->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('regency_id');
            // $table->string('regency_id',4);
            // $table->foreign('regency_id')
            //     ->references('id')
            //     ->on('regencies')
            //     ->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('district_id')->nullable();
            // $table->foreign('district_id')
            //     ->references('id')
            //     ->on('districts')
            //     ->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('village_id')->nullable();
            // $table->foreign('village_id')
            //     ->references('id')
            //     ->on('villages')
            //     ->onUpdate('cascade')->onDelete('cascade');
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
