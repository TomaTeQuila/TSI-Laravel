<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            ['id'=>1,'nombre'=>'Admin',],
            ['id'=>2,'nombre'=>'Artista',],
        ]);

        DB::table('usuarios')->insert([
            ['username' => "Admin", 'password'=>Hash::make('admin'),'nombre'=>'Admin 1','apellido'=>'Admin','rol_id'=>1],
        ]);
    }
}
