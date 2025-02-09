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
    Schema::create('conversion_files', function (Blueprint $table) {
      $table->id();
      $table->foreignId('conversion_id')->constrained()->onDelete('cascade');
      $table->foreignId('file_id')->constrained()->onDelete('cascade');
      $table->string('converted_format');
      $table->string('converted_path')->nullable();
      $table->integer('size')->nullable();
      $table->enum('status', ['pending', 'processing', 'completed', 'failed'])->default('pending');
      $table->text('error_message')->nullable();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('conversion_files');
  }
};
