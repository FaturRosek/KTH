<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'forester',
                'password' => Hash::make('lestari'),
                'role_id' => 1, // Sesuai dengan ID role Admin
            ],
            [
                'name' => 'Barokatun Kamilah',
                'password' => Hash::make('198805112023212030'),
                'role_id' => 2, // Sesuai dengan ID role Editor
            ],
            [
                'name' => 'Eka Susilawati',
                'password' => Hash::make('197109071998032003'),
                'role_id' => 2, // Sesuai dengan ID role Editor
            ],
            [
                'name' => 'Haris Rifai',
                'password' => Hash::make('198507202015031001'),
                'role_id' => 2, // Sesuai dengan ID role Editor
            ],
            [
                'name' => 'Juairiah',
                'password' => Hash::make('197001161998032003'),
                'role_id' => 2, // Sesuai dengan ID role Editor
            ],
            [
                'name' => 'Akhmad Fauzi',
                'password' => Hash::make('197007121998031014'),
                'role_id' => 2, // Sesuai dengan ID role Editor
            ],
            [
                'name' => 'Arief Hanggara Putra',
                'password' => Hash::make('19911014 2023211012'),
                'role_id' => 2, // Sesuai dengan ID role Editor
            ],
            [
                'name' => 'Moh. Hasim',
                'password' => Hash::make('196903301998031004'),
                'role_id' => 2, // Sesuai dengan ID role Editor
            ],
            [
                'name' => 'Madjahra',
                'password' => Hash::make('197206111998031010'),
                'role_id' => 2, // Sesuai dengan ID role Editor
            ],
            [
                'name' => 'Miftahol Arifin',
                'password' => Hash::make('196912011998031005'),
                'role_id' => 2, // Sesuai dengan ID role Editor
            ],
            [
                'name' => 'Zainur',
                'password' => Hash::make('197105141998031010'),
                'role_id' => 2, // Sesuai dengan ID role Editor
            ],
            [
                'name' => 'Nur Fadhilah Syahrawi',
                'password' => Hash::make('198605152010012027'),
                'role_id' => 2, // Sesuai dengan ID role Editor
            ],
            [
                'name' => 'Novi Indrawati',
                'password' => Hash::make('197111271999012001'),
                'role_id' => 2, // Sesuai dengan ID role Editor
            ],
            [
                'name' => 'Muhammad Fadhil Husain',
                'password' => Hash::make('200302092022041001'),
                'role_id' => 2, // Sesuai dengan ID role Editor
            ],
            [
                'name' => 'Aprilianto Danu Sadewo',
                'password' => Hash::make('199404202022211001'),
                'role_id' => 2, // Sesuai dengan ID role Editor
            ],
            [
                'name' => 'Erwin Karunia Sjamsudin',
                'password' => Hash::make('199605202022211001'),
                'role_id' => 2, // Sesuai dengan ID role Editor
            ],
            [
                'name' => 'Novi Indrawati',
                'password' => Hash::make('197111271999012001'),
                'role_id' => 2, // Sesuai dengan ID role Editor
            ],
            [
                'name' => 'Siti Muzaroh',
                'password' => Hash::make('196803081999032005'),
                'role_id' => 2, // Sesuai dengan ID role Editor
            ],
            [
                'name' => 'Mabrur Rizki Syahrullah',
                'password' => Hash::make('200010062022041001'),
                'role_id' => 2, // Sesuai dengan ID role Editor
            ],
            [
                'name' => 'Samiaji Arif Hidayat',
                'password' => Hash::make('199801082022211001'),
                'role_id' => 2, // Sesuai dengan ID role Editor
            ],
            [
                'name' => 'user1',
                'password' => Hash::make('123'),
                'role_id' => 2, // Sesuai dengan ID role Editor
            ],
            [
                'name' => 'user1',
                'password' => Hash::make('123'),
                'role_id' => 2, // Sesuai dengan ID role Editor
            ],
            [
                'name' => 'user1',
                'password' => Hash::make('123'),
                'role_id' => 2, // Sesuai dengan ID role Editor
            ],
            [
                'name' => 'user1',
                'password' => Hash::make('123'),
                'role_id' => 2, // Sesuai dengan ID role Editor
            ],

        ];

        foreach ($users as $user) {
            DB::table('users')->insert([
                'name' => $user['name'],
                'password' => $user['password'],
                'role_id' => $user['role_id'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
