<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => config('user.admin.name'),
            'email' => config('user.admin.email'),
            'password' => bcrypt(config('user.admin.password')),
        ]);
    }
}
