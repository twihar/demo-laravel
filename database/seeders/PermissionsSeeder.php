<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // dashboard
        Permission::create(['name' => 'Voir la page dashboard', 'key' => "dashboard"]);


        // create roles and assign existing permissions
        $role = Role::create(['name' => 'Super administrateur']);
        $role->givePermissionTo([1]);

        // create super admin account
        $admin = User::create([
            'name' => 'Administrateur',
            'email' => 'admin@admin.com',
            'password' => Hash::make('123456')
        ]);
        $admin->assignRole($role);

    }
}
