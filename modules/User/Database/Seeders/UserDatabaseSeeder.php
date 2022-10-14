<?php

namespace Modules\User\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Modules\User\Entities\User;
use Spatie\Permission\Models\Role;

class UserDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['guard_name' => 'dashboard', 'name' => 'support']);
        $super_admin = User::create([
            'name' => 'Support',
            'email' => 'support@egydesigner.com',
            'password' => Hash::make('12345678')
        ]);
        $super_admin->assignRole('support');

    }
}
