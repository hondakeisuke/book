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
            ['title' => 'test1',
            'description' => 'test1 photo',
            ],
            ['title' => 'test2',
            'description' => 'test2 photo',
            ],
        ];

        foreach($books as $book){
            \App\Models\Book::create($book);
        }
    }
}
