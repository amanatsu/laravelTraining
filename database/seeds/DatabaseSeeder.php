<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     * さらにDatabaseSeeder.phpのrunメソッドを以下のように修正します。
     * runメソッド内でcallしたクラスが、シーディングコマンドで実行されるようになります。
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(BooksTableSeeder::class);
    }
}
