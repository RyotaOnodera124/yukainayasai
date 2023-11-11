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
            'image' => '',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        # paramに配列を代入
        $param = [
            [
                'name' => '長ねぎ',
                'condition' => '風邪ひいたぁ',
                'farmer' => '小野寺農園',
                'image' => 'images/長ねぎ.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'かぼちゃ',
                'condition' => '美容に',
                'farmer' => '小野寺農園',
                'image' => 'images/かぼちゃ.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => '小松菜',
                'condition' => '最近イライラ',
                'farmer' => '小野寺農園',
                'image' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => '大根',
                'condition' => '胃腸の調子',
                'farmer' => '小野寺農園',
                'image' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'にんにく',
                'condition' => '疲れ気味',
                'farmer' => '小野寺農園',
                'image' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'かぶ',
                'condition' => '食欲不振',
                'farmer' => '小野寺農園',
                'image' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'さつまいも',
                'condition' => '便秘気味',
                'farmer' => '小野寺農園',
                'image' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'きのこ',
                'condition' => 'ダイエットに',
                'farmer' => '谷口農園',
                'image' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'たけのこ',
                'condition' => '物忘れ',
                'farmer' => '谷口農園',
                'image' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'れんこん',
                'condition' => '貧血気味',
                'farmer' => '谷口農園',
                'image' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'キャベツ',
                'condition' => '二日酔いに',
                'farmer' => '谷口農園',
                'image' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => '玉ねぎ',
                'condition' => '血液サラサラ',
                'farmer' => '櫻木農園',
                'image' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'カリフラワー',
                'condition' => '風邪ひいたぁ',
                'farmer' => '櫻木農園',
                'image' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'ピーマン',
                'condition' => '美容に',
                'farmer' => '櫻木農園',
                'image' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'セロリ',
                'condition' => '最近イライラ',
                'farmer' => '櫻木農園',
                'image' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => '山芋',
                'condition' => '胃腸の調子',
                'farmer' => '佐藤農園',
                'image' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'きゅうり',
                'condition' => 'むくみが気になる',
                'farmer' => '佐藤農園',
                'image' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'レタス',
                'condition' => 'むくみが気になる',
                'farmer' => '佐藤農園',
                'image' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'にら',
                'condition' => '疲れ気味',
                'farmer' => '佐藤農園',
                'image' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'アスパラガス',
                'condition' => '疲れ気味',
                'farmer' => '待寺農園',
                'image' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => '枝豆',
                'condition' => '辛い肩こり',
                'farmer' => '待寺農園',
                'image' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'ゴーヤ',
                'condition' => '糖尿病予防',
                'farmer' => '待寺農園',
                'image' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'ごぼう',
                'condition' => '糖尿病予防',
                'farmer' => '待寺農園',
                'image' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'ほうれん草',
                'condition' => '貧血気味',
                'farmer' => '待寺農園',
                'image' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'にんじん',
                'condition' => '疲れ気味',
                'farmer' => '待寺農園',
                'image' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];
        # DB::table->insertでレコードの登録
        DB::table('vegetables')->insert($param);
    }
}
