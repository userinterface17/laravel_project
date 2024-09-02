<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserRolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Create or find Permissions
        $permissions = [
            'view user', 'create user', 'update user', 'delete user'
        ];

        foreach ($permissions as $permissionName) {
            if (!Permission::where('name', $permissionName)->exists()) {
                Permission::create(['name' => $permissionName]);
            }
        }

        // Create or find Roles
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $userRole = Role::firstOrCreate(['name' => 'user']);

        // Assign Permissions to Roles
        $adminRole->syncPermissions($permissions);
        $userRole->syncPermissions(['view user']);

        // Create Users and Assign Roles
        $adminUser = User::firstOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'first_name' => 'Admin',
                'last_name' => 'User',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('12345678'),
                'dob' => '2003-03-04', 
                'contact' => '0717137822', 
            ]
        );
        $adminUser->assignRole($adminRole);

        $userUser = User::firstOrCreate(
            ['email' => 'user@gmail.com'],
            [
                'first_name' => 'Regular',
                'last_name' => 'User',
                'email' => 'user@gmail.com',
                'password' => Hash::make('87654321'),
                'dob' => '1995-01-01',
                'contact' => '9876543210',
            ]
        );
        $userUser->assignRole($userRole);
    }
}
