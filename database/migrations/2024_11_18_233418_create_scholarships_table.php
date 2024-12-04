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
        Schema::create('scholarships', function (Blueprint $table) {
            $table->id(); 
            $table->string('name'); 
            $table->string('type'); 
            $table->foreignId('field_id')->constrained('fields')->onDelete('cascade'); 
            $table->foreignId('country_id')->constrained('countries')->onDelete('cascade'); 
            $table->text('requirements')->nullable(); 
            $table->decimal('amount', 10, 2)->nullable(); 
            $table->date('deadline');
            $table->text('application_guidelines'); 
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scholarships');
    }
};
