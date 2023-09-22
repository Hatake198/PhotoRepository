<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('posts')->insert([ 
        //     'picture' => '写真1',
        //     'title' => 'テストタイトル1',
        //     'body' => 'テスト本文1', 
        //     'created_at' => new DateTime(), 
        //     'updated_at' => new DateTime(),
        //     'category_id' => "testcategoryid",
        // ]);
    }
}
