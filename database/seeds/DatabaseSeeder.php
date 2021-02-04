<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        User::create([
            'name' => 'Admin',
            'email' => 'admin@@alhejazschool.org',
            'password' => Hash::make("password"),
            'email_verified_at' => now()
        ]);

        $this->call([
            PageSeeder::class
        ]);
    }
}
