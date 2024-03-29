<?php

use App\Models\Category;
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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable(false);
            $table->float('value')->nullable(false);
            $table->unsignedBigInteger('user')->nullable(false);
            $table->string('category')->nullable(false);
            $table->timestamps();
            $table->softDeletes();

            // FOREIGN KEYS
            $table->foreign('category')->references('name')->on('categories');
            $table->foreign('user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
