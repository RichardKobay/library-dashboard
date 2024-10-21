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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedInteger('amount')->default(0);
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('type_id');
            $table->text('description');
            $table->string('ISBN', 20)->unique()->nullable();
            $table->unsignedBigInteger('author_id');
            $table->year('publication_year');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};