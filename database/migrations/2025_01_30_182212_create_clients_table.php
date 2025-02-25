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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
            $table->string('logo');
            $table->string('image');
            $table->string('url');
            $table->string('name');
=======
            $table->string('name');
            $table->string('logo');
            $table->string('image');
            $table->string('url');
>>>>>>> master
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
