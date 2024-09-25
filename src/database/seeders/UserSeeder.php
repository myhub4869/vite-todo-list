<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 全データ削除
        User::truncate();

        // テストユーザ
        User::create([
            'email' => "test1@example.com",
            'password' => bcrypt("password"),
        ]);

    }
}
