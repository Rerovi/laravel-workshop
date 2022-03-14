<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        Permission::create(['name' => 'index category']);
        Permission::create(['name' => 'show category']);
        Permission::create(['name' => 'create category']);
        Permission::create(['name' => 'edit category']);
        Permission::create(['name' => 'delete category']);

        Permission::create(['name' => 'index project']);
        Permission::create(['name' => 'show project']);
        Permission::create(['name' => 'create project']);
        Permission::create(['name' => 'edit project']);
        Permission::create(['name' => 'delete project']);

        $customer = Role::create(['name' => 'customer']);

        $sales = Role::create(['name' => 'sales'])
            ->givePermissionTo(['index category', 'show category', 'create category', 'edit category']);


        $student = Role::create(['name' => 'student']);

        $teacher = Role::create(['name' => 'teacher'])
            ->givePermissionTo(['index project', 'show project', 'create project', 'edit project']);

        $admin = Role::create(['name' => 'admin'])
            ->givePermissionTo(Permission::all());
    }
}
