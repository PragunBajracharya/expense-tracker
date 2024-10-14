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
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->unsignedBigInteger('paid_by');
            $table->unsignedBigInteger('expense_category_id')->nullable();
            $table->string('receipt')->nullable();
            $table->float('amount');
            $table->longText('remarks')->nullable();
            $table->string('status')->default('approved');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('paid_by')->references('id')->on('users');
            $table->foreign('expense_category_id')->references('id')->on('expense_categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expenses');
    }
};
