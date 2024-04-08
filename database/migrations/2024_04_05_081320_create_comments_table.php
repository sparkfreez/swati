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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            /**idea_id table it tells it has relation with our ideas table
            *constrained() medthod is for it denies comments ideas dont exist at dabaselevel
            *cascadeOnDelete method is for if the idea is deleted it will delete the comments also 
            */
            $table->foreignId('idea_id')->constrained()->cascadeOnDelete();
            $table->string('content');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
