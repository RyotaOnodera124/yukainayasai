<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // タイトル
            $table->string('vegetable'); // 野菜名
            $table->string('color'); // 色合い度
            $table->string('nutrient'); // 栄養素
            $table->string('recipe'); // 作り方
            $table->string('comment'); // コメント
            $table->string('image'); // 画像
            $table->foreignId('user_id')
                ->constrained()
                ->cascadeOnUpdate() // 元のユーザーのデータが変更されたら、同時に投稿データも変更される
                ->cascadeOnDelete(); // 自分自身のデータを削除した時に、同時に投稿データも削除する
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
