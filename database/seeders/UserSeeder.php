<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {User::create(
        [
        'name' => 'admin',
        'email' => 'admin@admin.com',
        'password' => Hash::make('12345678'),
        'is_revisor'=> '1'
        ]
    );
        User::create(
        [
        'name' => 'Dario',
        'email' => 'd@d.com',
        'password' => Hash::make('12345678'),
        'is_revisor'=> '1'
        ]
    );

    User::create(
        [
        'name' => 'Angelo',
        'email' => 'a@a.com',
        'password' => Hash::make('12345678'),
        'is_revisor'=> '1'
        ]
    );

    User::create(
        [
        'name' => 'Massimo',
        'email' => 'm@m.com',
        'password' => Hash::make('12345678'),
        'is_revisor'=> '1'
        ]
    );

    User::create(
        [
        'name' => 'Pippo',
        'email' => 'p@p.com',
        'password' => Hash::make('12345678'),
        'is_revisor'=> '0'
        ]
    );
            
    }
}
