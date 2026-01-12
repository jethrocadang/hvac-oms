<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // TODO:: Add Roles and assigned permissions when done on development.
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $role = Role::create(['name' => 'it_admin', 'guard_name' => 'web']);
        $role = Role::create(['name' => 'manager', 'guard_name' => 'web']);
        $role = Role::create(['name' => 'technician', 'guard_name' => 'web']);
        $role = Role::create(['name' => 'customer', 'guard_name' => 'web']);
    }
}
