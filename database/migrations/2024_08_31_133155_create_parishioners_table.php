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
        Schema::create('parishioners', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('residence');
            $table->date('date_of_birth');
            $table->string('place_of_birth');
            $table->enum('sex',['Male', 'Female']);
            $table->string('citizenship');
            $table->string('name_of_father');
            $table->string('name_of_mother');
            $table->bigInteger('church_id')->unsigned();
            $table->foreign('church_id')->references('id')->on('churches')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parishioners');
    }
};
