<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Spatie\Permission\PermissionRegistrar;

class Permission extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'Operator']);
        Permission::create(['name' => 'Teknisi']);
        Permission::create(['name' => 'SPVProd']);
        Permission::create(['name' => 'SPVMTC']);
        Permission::create(['name' => 'Manager']);
        Permission::create(['name' => 'Dirut']);
        Permission::create(['name' => 'SCM']);
        Permission::create(['name' => 'HSE']);
        Permission::create(['name' => 'HCGS']);

        $Admin = Role::create(['name' => 'Admin']);
        $Admin->givePermissionTo('Operator');
        $Admin->givePermissionTo('Teknisi');
        $Admin->givePermissionTo('SPVProd');
        $Admin->givePermissionTo('SPVMTC');
        $Admin->givePermissionTo('Manager');
        $Admin->givePermissionTo('Dirut');
        $Admin->givePermissionTo('SCM');
        $Admin->givePermissionTo('HSE');
        $Admin->givePermissionTo('HCGS');
    }

}
