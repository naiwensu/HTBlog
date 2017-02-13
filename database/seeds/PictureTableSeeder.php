<?php

use Illuminate\Database\Seeder;

class PictureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pictures')->insert([
            'path' => 'aaa.jpg',
            'created_at' => date('Y-m-d H:i:s', strtotime('now')),
            'updated_at' => date('Y-m-d H:i:s', strtotime('now'))
        ]);
    }
}
