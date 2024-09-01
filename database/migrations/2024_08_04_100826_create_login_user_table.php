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
        Schema::dropIfExists('login_users');
        
        Schema::create('login_users', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('fname',100);
            $table->string('lname',100);
            $table->enum('gender',['male','female']);
            $table->string('email',100);
            $table->string('password',100);
            $table->string('phonenumber',15);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('login_users');
    }
};