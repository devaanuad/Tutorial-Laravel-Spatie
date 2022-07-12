<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Str;

class RolePermission extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $default_user_value = [
            'email_verified_at' => now(),
            'password' => Hash::make('123'),
            'remember_token' => Str::random(10),
        ];

        $admin = User::create(array_merge($default_user_value, [
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
        ], $default_user_value));

        $petugas = User::create(array_merge($default_user_value, [
            'name' => 'petugas',
            'email' => 'petugas@gmail.com',
        ], $default_user_value));

        $siswa = User::create(array_merge($default_user_value, [
            'name' => 'siswa',
            'email' => 'siswa@gmail.com',
        ], $default_user_value));

        $role_admin = Role::create(['name' => 'admin']);
        $role_petugas = Role::create(['name' => 'petugas']);
        $role_siswa = Role::create(['name' => 'siswa']);

        $admin->assignRole('admin');
        $petugas->assignRole('petugas');
        $siswa->assignRole('siswa');


        $permission = Permission::create(['name' => 'admin_role']);
        $permission = Permission::create(['name' => 'petugas_role']);
        $permission = Permission::create(['name' => 'siswa_siswa']);

        $role_admin->givePermissionTo('admin_role');
        $role_petugas->givePermissionTo('petugas_role');
        $role_siswa->givePermissionTo('siswa_siswa');
    }
}
