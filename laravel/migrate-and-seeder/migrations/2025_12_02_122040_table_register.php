<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Anonymous migration class
return new class extends Migration {
    /**
     * Run the migrations.
     * Ye function tab run hota hai jab aap
     * `php artisan migrate` chalate ho.
     * Yahan hum database me table create karte hain.
     */
    public function up(): void
    {
        // Create table named 'register_user'
        Schema::create('register_user', function (Blueprint $table) {
            $table->id();                 // Auto-increment primary key column
            $table->string('username');   // Column for username
            $table->string('email');      // Column for email
            $table->string('password');   // Column for password
            $table->timestamps();         // Adds `created_at` and `updated_at` columns automatically
        });
    }

    /**
     * Reverse the migrations.
     * Ye function tab run hota hai jab aap
     * `php artisan migrate:rollback` ya
     * `php artisan migrate:fresh` chalate ho.
     * Yahan hum table delete kar dete hain.
     */
    public function down(): void
    {
        Schema::dropIfExists('register_user'); // Drops the table if it exists
    }
};
