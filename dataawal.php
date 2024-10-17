<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class dataawal extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user =new User();
        $user->name = 'Admin';
        $user->email = 'admin@kasirminimarket.com';
        $user->password = bcrypt('123456789');
        $user->peran = 'admin';
        $user->save();

    }
}
