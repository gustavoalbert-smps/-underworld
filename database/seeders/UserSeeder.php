<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tenant;
use App\Models\User;
use App\Models\Permissions\UserRole;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        if(User::where('email','=', 'super@admin.com')->count() == 0) {

            $superUser = User::firstOrCreate([
                'name' => 'Super Admin',
                'email' => 'super@admin.com',
                'password' =>  bcrypt('$up3r4dmin'),
                'status' =>  true,
            ]);

            UserRole::firstOrCreate([
                'user_id' => $superUser->id,
                'role_id' => 1
            ]);
        }

        $adminUser = User::firstOrCreate([
            'name' => 'Admin',
            'email' => 'admin@outnow.com',
            'password' =>  bcrypt('4dm1n'),
            'status' =>  true,
        ]);

        UserRole::firstOrCreate([
            'user_id' => $adminUser->id,
            'role_id' => 2
        ]);

        $attendant = User::firstOrCreate([
            'name' => 'Atendente 1',
            'email' => 'atendente1@outnow.com',
            'password' =>  bcrypt('4t3nd3nt31'),
            'status' =>  true,
        ]);

        UserRole::firstOrCreate([
            'user_id' => $attendant->id,
            'role_id' => 3
        ]);
    }
}
