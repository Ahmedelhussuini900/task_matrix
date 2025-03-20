<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    public function run()
    {
        // Create Permissions
        $permissions = ['create-book', 'edit-book', 'delete-book', 'view-book', 'manage-users'];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // Create Roles
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $employeeRole = Role::firstOrCreate(['name' => 'employee']);

        // Assign Permissions to Roles
        $adminRole->givePermissionTo(Permission::all()); // Admin gets all permissions
        $employeeRole->givePermissionTo(['view-book']);  // Employee only can view
    }
}
