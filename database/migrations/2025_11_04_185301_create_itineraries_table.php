<?php 
use Illuminate\Database\Migrations\Migration; 
use Illuminate\Database\Schema\Blueprint; 
use Illuminate\Support\Facades\Schema; 

return new class extends Migration 
{ /** * Run the migrations. */ 
    public function up(): void 
    { Schema::create('itineraries', function (Blueprint $table) { 
        $table->id(); 
        $table->string('trip_name'); 
        $table->string('destinations'); 
        $table->text('overview'); 
        $table->string('suggested_dates'); 
        $table->string('difficulty_level'); 
        $table->string('submitted_by'); 
        $table->timestamps(); 
    }); 
}
 /** * Reverse the migrations. */ 
 public function down(): void 
 {
    Schema::dropIfExists('itineraries'); 
 } 
};