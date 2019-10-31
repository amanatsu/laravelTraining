<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * シーディングはテストデータやマスタデータなどのアプリケーション起動時に必要なレコードをコマンドで登録する仕組みです。
     *
     *Booksテーブルに以下のレコードを登録したいとしましょう。
     *
     *ID	NAME	PRICE	AUTHOR	CREATED_AT	UPDATED_AT
     *1	PHP Book	2000	PHPER	現在時刻	現在時刻
     *2	Laravel Book	3000	NULL	現在時刻	現在時刻
     *3	Ruby Book	2500	Rubyist	現在時刻	現在時刻
     *その場合は、シーダーファイルのrunメソッドを以下のように修正します。
     */
    public function run()
    {
        // テーブルのクリア
        DB::table('books')->truncate();

        // 初期データ用意（列名をキーとする連想配列）
        $books = [
            ['name' => 'PHP Book',
                'price' => 2000,
                'author' => 'PHPER'],
            ['name' => 'Laravel Book',
                'price' => 3000,
                'author' => null],
            ['name' => 'Ruby Book',
                'price' => 2500,
                'author' => 'Rubyist']
        ];

        // 登録
        foreach($books as $book) {
            \App\Book::create($book);
        }
    }
}
