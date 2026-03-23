<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run(): void
    {
        // Clear cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Create all permissions
        $permissions = [
            // Developers
            'view developers',
            'create developers',
            'edit developers',
            'delete developers',

            // Estates
            'view estates',
            'create estates',
            'edit estates',
            'delete estates',

            // Prototypes
            'view prototypes',
            'create prototypes',
            'edit prototypes',
            'delete prototypes',

            // Banners
            'view banners',
            'create banners',
            'edit banners',
            'delete banners',

            // Admin management
            'view admins',
            'create admins',
            'edit admins',
            'delete admins',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        // Super Admin role — gets ALL permissions
        $superAdmin = Role::firstOrCreate(['name' => 'super_admin']);
        $superAdmin->givePermissionTo(Permission::all());

        // Admin role — only prototypes & banners
        $admin = Role::firstOrCreate(['name' => 'admin']);
        $admin->givePermissionTo([
            'view prototypes',
            'create prototypes',
            'edit prototypes',
            'delete prototypes',
            'view banners',
            'create banners',
            'edit banners',
            'delete banners',
        ]);

        // Create the default Super Admin user
        $superAdminUser = User::firstOrCreate(
            ['email' => 'superadmin@estatman.com'],
            [
                'name'     => 'Super Admin',
                'password' => bcrypt('Estateman42@?#'),
            ]
        );

        $superAdminUser->assignRole('super_admin');

        $this->command->info('✓ Roles and permissions seeded!');
        $this->command->info('✓ Super Admin → superadmin@estatman.com / password');
    }
}
