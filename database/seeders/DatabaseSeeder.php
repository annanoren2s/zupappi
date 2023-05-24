<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Adding an admin user
        $user = \App\Models\User::factory()
            ->count(1)
            ->create([
                'email' => 'superadmin@superadmin.com',
                'password' => \Hash::make('superadmin'),
            ]);
        $this->call(PermissionsSeeder::class);

        // $this->call(CredentialSeeder::class);
        // $this->call(UserSeeder::class);
    }
}
