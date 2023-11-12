<?php

namespace Database\Seeders;

use App\Models\Vegetable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VegetableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 一件だけinsertする
        DB::table('vegetables')->insert([
            'name' => 'トマト',
            'condition' => 'むくみが気になる',
            'farmer' => '小野寺農園',
            'image' => 'tomato.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        # paramに配列を代入
        $param = [
            [
                'name' => '長ねぎ',
                'condition' => '風邪ひいたぁ',
                'farmer' => '小野寺農園',
                'image' => 'naganegi.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'かぼちゃ',
                'condition' => '美容に',
                'farmer' => '小野寺農園',
                'image' => 'kabotya.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => '小松菜',
                'condition' => '最近イライラ',
                'farmer' => '小野寺農園',
                'image' => 'komatuna.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => '大根',
                'condition' => '胃腸の調子',
                'farmer' => '小野寺農園',
                'image' => 'daikon.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'にんにく',
                'condition' => '疲れ気味',
                'farmer' => '小野寺農園',
                'image' => 'ninniku.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'かぶ',
                'condition' => 'むくみが気になる',
                'farmer' => '小野寺農園',
                'image' => 'kabu.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'さつまいも',
                'condition' => '便秘気味',
                'farmer' => '小野寺農園',
                'image' => 'satumaimo.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'きのこ',
                'condition' => 'ダイエットに',
                'farmer' => '谷口農園',
                'image' => 'kinoko.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'たけのこ',
                'condition' => '物忘れ',
                'farmer' => '谷口農園',
                'image' => 'takenoko.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'れんこん',
                'condition' => '貧血気味',
                'farmer' => '谷口農園',
                'image' => 'renkon.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'キャベツ',
                'condition' => '二日酔いに',
                'farmer' => '谷口農園',
                'image' => 'kyabetu.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => '玉ねぎ',
                'condition' => '血液サラサラ',
                'farmer' => '櫻木農園',
                'image' => 'tamanegi.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'カリフラワー',
                'condition' => 'むくみが気になる',
                'farmer' => '櫻木農園',
                'image' => 'karifurawa.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'ピーマン',
                'condition' => '美容に',
                'farmer' => '櫻木農園',
                'image' => 'pi-man.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'セロリ',
                'condition' => '最近イライラ',
                'farmer' => '櫻木農園',
                'image' => 'serori.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => '山芋',
                'condition' => '胃腸の調子',
                'farmer' => '佐藤農園',
                'image' => 'yamaimo.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'きゅうり',
                'condition' => 'むくみが気になる',
                'farmer' => '佐藤農園',
                'image' => 'kyu-ri.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'レタス',
                'condition' => 'むくみが気になる',
                'farmer' => '佐藤農園',
                'image' => 'retasu.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'にら',
                'condition' => '疲れ気味',
                'farmer' => '佐藤農園',
                'image' => 'nira.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'アスパラガス',
                'condition' => '疲れ気味',
                'farmer' => '待寺農園',
                'image' => 'asuparagasu.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => '枝豆',
                'condition' => '辛い肩こり',
                'farmer' => '待寺農園',
                'image' => 'edamame.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'ゴーヤ',
                'condition' => '美容に',
                'farmer' => '待寺農園',
                'image' => 'go-ya.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'ごぼう',
                'condition' => '胃腸の調子',
                'farmer' => '待寺農園',
                'image' => 'gobou.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'ほうれん草',
                'condition' => '美容に',
                'farmer' => '待寺農園',
                'image' => 'hourensou.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'にんじん',
                'condition' => '疲れ気味',
                'farmer' => '待寺農園',
                'image' => 'ninjin.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];
        # DB::table->insertでレコードの登録
        DB::table('vegetables')->insert($param);
    }
}
