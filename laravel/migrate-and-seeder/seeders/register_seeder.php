<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\register_model; // Custom model jo register_user table ko represent karta hai
use Illuminate\Support\Collection; // Laravel Collection ka use, each() ke liye

class register_seeder extends Seeder
{
    /**
     * Run the database seeds.
     * Ye function tab call hota hai jab aap
     * `php artisan db:seed` chalate ho
     * ya `DatabaseSeeder` se ye seeder call hota hai.
     */
    public function run(): void
    {
        // Users data ko collection me store karna
        // Collection ki wajah se hum each() method use kar sakte hain
        $register_user = collect([
            [
                'username' => 'zainab',
                'email'    => 'zainab@gmail.com',
                'password' => 'zainab123', // simple text password (later bcrypt karna better)
            ],
            [
                'username' => 'tuba',
                'email'    => 'tuba@gmail.com',
                'password' => 'tuba123',
            ],
            [
                'username' => 'afreen',
                'email'    => 'afreen@gmail.com',
                'password' => 'afreen123',
            ],
            [
                'username' => 'sahiba',
                'email'    => 'sahiba@gmail.com',
                'password' => 'sahiba123',
            ],
            [
                'username' => 'saira',
                'email'    => 'saira@gmail.com',
                'password' => 'saira123',
            ],
        ]);

        // Collection me stored data ko database me insert karna
        // each() method collection ke har element par loop chalata hai
        $register_user->each(function ($users) {
            register_model::insert($users); // Ek-ek user ko register_user table me insert karta hai
        });
    }
}
