<?php

namespace Database\Seeders;

use App\Http\Controllers\formController as ControllersFormController;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\formController;
use GuzzleHttp\Promise\Each;
use App\Models\form;

class formSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // single data insert
        //   form::create([
        //     'firstName' => 'zainab',
        //     'lastName' => 'idrees',
        //     'email' => 'zainab@gmail.com',
        //     'password' => 'zainab123',
        // ]);

        // multiple data insert

//         $user = collect([
//             [
//                 'firstName' => 'zainab',
//                 'lastName' => 'idrees',
//                 'email' => 'zainab@gmail.com',
//                 'password' => 'zainab123',
//             ],
//             [
//                 'firstName' => 'tuba',
//                 'lastName' => 'rafique',
//                 'email' => 'tuba@gmail.com',
//                 'password' => 'tuba123',
//             ]
//         ]);

//         $user->each(function ($user) {
//         form::insert($user);
// });  

          //  fake data insert
        for($i=1; $i<=10; $i++){
        form::create([
       'firstName' => fake()->firstName(),
       'lastName' => fake()->lastName(),
       'email' => fake()->email(),
       'password' => fake()->password(),
        ]);
    }
    }
}
