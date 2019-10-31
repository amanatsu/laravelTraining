<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * テーブル作成時の情報
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            //テーブル定義
            $table->increments('id');
            $table->string('name', 50);
            $table->integer('price');
            $table->string('author', 50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     * マイグレーションを取り消す際の情報
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
