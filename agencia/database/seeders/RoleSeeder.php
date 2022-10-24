<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'User']);

        Permission::create(['name' => 'user'])->syncRoles([$role2]);

         Permission::create(['name' => 'city.index'])->assignRole($role1);
         Permission::create(['name' => 'city.create'])->assignRole($role1);
         Permission::create(['name' => 'city.edit'])->assignRole($role1);
         Permission::create(['name' => 'city.destroy'])->assignRole($role1);
 Permission::create(['name' => 'guide.index'])->assignRole($role1);
         Permission::create(['name' => 'guide.create'])->assignRole($role1);
         Permission::create(['name' => 'guide.edit'])->assignRole($role1);
         Permission::create(['name' => 'guide.destroy'])->assignRole($role1);
 Permission::create(['name' => 'hotel.index'])->assignRole($role1);
         Permission::create(['name' => 'hotel.create'])->assignRole($role1);
         Permission::create(['name' => 'hotel.edit'])->assignRole($role1);
         Permission::create(['name' => 'hotel.destroy'])->assignRole($role1);
 Permission::create(['name' => 'package.index'])->syncRoles([$role1,$role2]);
         Permission::create(['name' => 'package.create'])->assignRole($role1);
         Permission::create(['name' => 'package.edit'])->assignRole($role1);
         Permission::create(['name' => 'package.destroy'])->assignRole($role1);
 Permission::create(['name' => 'transport.index'])->assignRole($role1);
         Permission::create(['name' => 'transport.create'])->assignRole($role1);
         Permission::create(['name' => 'transport.edit'])->assignRole($role1);
         Permission::create(['name' => 'transport.destroy'])->assignRole($role1);
 Permission::create(['name' => 'user.index'])->assignRole($role1);
         Permission::create(['name' => 'user.create'])->assignRole($role1);
         Permission::create(['name' => 'user.edit'])->assignRole($role1);
         Permission::create(['name' => 'user.destroy'])->assignRole($role1);

    }
}
