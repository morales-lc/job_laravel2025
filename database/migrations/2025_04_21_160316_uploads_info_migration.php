<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('uploads', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('original_filename');
            $table->string('filename');
            $table->string('type');
            $table->uuid('uploaded_by');
            $table->timestamps();

            $table->foreign('uploaded_by')->references('id')->on('usersinfo')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('uploads');
    }
};
