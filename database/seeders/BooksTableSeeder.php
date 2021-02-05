<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = [
            ['title' => '卒業',
            'description' => '加賀恭一郎シリーズ第一作',
            'author' => '東野圭吾',
            'user_id' => '1',
            ],
            ['title' => '空飛ぶ馬',
            'description' => '落語家の師匠と女子大生のコンビが、日常のさりげない状況の中から、隠れた真実を探り出していく、北村薫のデビュー作',
            'author' => '北村薫',
            'user_id' => '2',
            ],
        ];

        foreach($books as $book){
            \App\Models\Book::create($book);
        }
    }
}
