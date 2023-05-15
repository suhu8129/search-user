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
        Schema::create('users_details', function (Blueprint $table) {
            $table->id();
            $table->string('name' , 25);
            $table->unsignedBigInteger('fk_department');
            $table->foreign('fk_department')->references('id')->on('departments');
            $table->unsignedBigInteger('fk_designation');
            $table->foreign('fk_designation')->references('id')->on('designations');
            $table->string('phone_number' , 10);
            $table->timestamps();
   
   
        });
         }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_details');
    }
};
