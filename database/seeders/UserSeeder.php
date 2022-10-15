<?php

namespace Database\Seeders;

use App\Models\Familiar;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();    
        
        $user->id = 1;
        $user->name = "Admin";
        $user->password = Hash::make('181052');
        $user->email = "admin@admin.com";
        $user->save();

        Role::create([
            'name' => 'admin',
            'display_name' => 'User Administrator', // optional
            'description' => 'User is allowed to manage and edit other users', // optional
        ]);

        Role::create([
            'name' => 'verified',
            'display_name' => 'User verified', // optional
            'description' => 'Is verified', // optional
        ]);

        $user->attachRole('admin'); 
        $user->attachRole('verified'); 

    }

}
