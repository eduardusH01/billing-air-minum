<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        // Permission::create(['name' => 'edit users']);
        // Permission::create(['name' => 'delete users']);
        // Permission::create(['name' => 'create users']);
        // Permission::create(['name' => 'edit customer']);
        // Permission::create(['name' => 'delete customer']);
        // Permission::create(['name' => 'create customer']);

        $role1 = Role::create(['name' => 'admin']);
        // $role1->givePermissionTo('edit users');
        // $role1->givePermissionTo('delete users');
        // $role1->givePermissionTo('create users');
        // $role1->givePermissionTo('edit customer');
        // $role1->givePermissionTo('delete customer');
        // $role1->givePermissionTo('create customer');

        $role2 = Role::create(['name' => 'user']);

        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@role.test',
            'password' => bcrypt('12345678')
        ]);
        $admin->assignRole($role1);

        $user = User::create([
            'name' => 'User',
            'email' => 'user@role.test',
            'password' => bcrypt('12345678')
        ]);
        $user->assignRole($role2);

        User::create(['name' => 'Patrick',
        'email' => 'Patrick@bikini.bottom',
        'password' => bcrypt('12345678')
        ]);
        User::create([
            'name' => 'Spongebob',
            'email' => 'Spongebob@bikini.bottom',
            'password' => bcrypt('12345678')
        ]);
        // $customer1 = Customer::create([
        //     'nama' => 'spongebob',
        //     'alamat' => 'Bikini Bottom',
        //     'Id_kelurahan' => '123',
        //     'Id_kecamatan' => '123',
        //     'Id_kabupaten' => '123',
        //     'Id_provinsi' => '123',
        //     'Nik' => '5434323114332223',
        //     'Kode_pos' => '12345'
        // ]);

        // $customer2 = Customer::create([
        //     'nama' => 'patrick',
        //     'alamat' => 'Bikini Bottom',
        //     'Id_kelurahan' => '123',
        //     'Id_kecamatan' => '123',
        //     'Id_kabupaten' => '123',
        //     'Id_provinsi' => '123',
        //     'Nik' => '5434323114332223',
        //     'Kode_pos' => '12345'
        // ]);
    }
}
