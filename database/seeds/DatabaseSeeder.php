<?php

use App\User;
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
        User::unguard(); // Disable mass assignment

        $this->call(UserTableSeeder::class);
        // $this->call(PostsTableSeeder::class);

        User::reguard(); 
        // $this->call(UsersTableSeeder::class);
    }
}
