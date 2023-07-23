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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('ra',12)->unique();
            $table->string('name',50);
            $table->string('email',255)->unique();
            $table->string('number',100);
            $table->integer('period');
            $table->string('class',50);
            $table->string('status',255);
            $table->integer('post_likes');
            $table->integer('followers');
            $table->integer('followings');
            $table->string('userpic',255);
            $table->string('about',255);
            $table->string('location',255);
            $table->string('date_of_birth',8);
            $table->string('gender',50);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
