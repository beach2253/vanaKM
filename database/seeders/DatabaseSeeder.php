<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use League\CommonMark\Node\Block\Document;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // Document::factory(10)->create();
         // Reset cached roles and permissions
         app()[PermissionRegistrar::class]->forgetCachedPermissions();

         // create permissions
         $permissions = [
             'permission list',
             'permission create',
             'permission edit',
             'permission delete',
             'role list',
             'role create',
             'role edit',
             'role delete',
             'user list',
             'user create',
             'user edit',
             'user delete',
 
             'document list',
             'document create',
             'document edit',
             'document delete',
             'presented list',
             'presented create',
             'presented edit',
             'presented delete'
          ];
 
         foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
         }
 
         // create roles and assign existing permissions
         $role1 = Role::create(['name' => 'editor']);
         $role1->givePermissionTo('permission list');
         $role1->givePermissionTo('role list');
         $role1->givePermissionTo('user list');
 
         $role2 = Role::create(['name' => 'admin']);
         foreach ($permissions as $permission) {
             $role2->givePermissionTo($permission);
         }
 
         $role3 = Role::create(['name' => 'super-admin']);
         // gets all permissions via Gate::before rule; see AuthServiceProvider
 
         // create demo users
         $user = \App\Models\User::factory()->create([
             'name' => 'Super Admin',
             'email' => 'superadmin@example.com',
         ]);
         $user->assignRole($role3);
 
         $user = \App\Models\User::factory()->create([
             'name' => 'Admin User',
             'email' => 'admin@example.com',
         ]);
         $user->assignRole($role2);
 
         $user = \App\Models\User::factory()->create([
             'name' => 'Example User',
             'email' => 'test@example.com',
         ]);
         $user->assignRole($role1);
    }
}
