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
        Schema::create('registrations', function (Blueprint $table) {
            $table->id(); 
            $table->string('first_name'); 
            $table->string('last_name'); 
            $table->string('email')->unique(); 
            $table->string('phone'); 
            $table->string('education_level'); 
            $table->unsignedBigInteger('country_id'); 
            $table->unsignedBigInteger('service_id'); 
            $table->boolean('approved')->default(false); 
            $table->dateTime('datetime')->nullable(); 
            $table->timestamps(); 
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
