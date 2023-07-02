<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'Bang Operator',
                'email' => 'operator@gmail.com',
                'role' => 'operator',
                'password' => bcrypt('12345')
            ],
            [
                'name' => 'Bidan Deliza',
                'email' => 'deliza@gmail.com',
                'role' => 'bidan',
                'password' => bcrypt('deliza123')
            ]
        ];

        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
