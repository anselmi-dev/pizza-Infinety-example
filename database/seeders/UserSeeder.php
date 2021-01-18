<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
            User::factory()
            ->count(5)
            ->create();
        */
                        
        $user = User::firstOrCreate([
            'name' => 'Admin',
            'email' => 'admin@pizzainfinety.com',
            'password' => \Hash::make(123456)
        ]);
        
        $user->assignRole('admin');
    }
}
