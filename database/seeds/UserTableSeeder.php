<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nickname' => 'aaa',
            'realname' => 'aaa',
            'email' => 'aaa@qq.com',
            'intro' => 'i am phper',
            'picture' => 'aaa.jpg',
            'password' => \Illuminate\Support\Facades\Crypt::encrypt("12345678"),
            'role' => 1,
            'created_at' => date('Y-m-d H:i:s', strtotime('now')),
            'updated_at' => date('Y-m-d H:i:s', strtotime('now'))
        ]);
    }
}
