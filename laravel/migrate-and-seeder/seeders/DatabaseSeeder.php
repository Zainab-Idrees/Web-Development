<?php

namespace Database\Seeders;

use App\Models\User; // Laravel default User model
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\register_seeder; // Custom seeder jo humne banaya hai

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents; // Ye trait automatically model events ko disable kar deta hai during seeding

    /**
     * Seed the application's database.
     * Ye function run hota hai jab aap
     * `php artisan db:seed` command chalate ho.
     * Yahan aap multiple seeders ko call kar sakte ho.
     */
    public function run(): void
    {
        // Custom seeder call karna
        $this->call(register_seeder::class);

        // Agar aap Laravel factories use karna chaho:
        // Ye 10 default users create karega
        // User::factory(10)->create();

        // Example of creating a single user with factory
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
