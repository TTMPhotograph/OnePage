<?php

use Illuminate\Database\Seeder;

class GenreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	

        //ジャンル追加
    	DB::table('genre')->insert([
    [ 'genrename' => '異世界', 'order' => 0, ],
    [ 'genrename' => '現実世界', 'order' => 0, ],
    [ 'genrename' => 'ハイファンタジー', 'order' => 0, ],
    [ 'genrename' => 'ローファンタジー', 'order' => 0, ],
    [ 'genrename' => '純文学', 'order' => 0, ],
    [ 'genrename' => 'ヒューマンドラマ', 'order' => 0, ],
    [ 'genrename' => '歴史', 'order' => 0, ],
    [ 'genrename' => '推理', 'order' => 0, ],
    [ 'genrename' => 'ホラー', 'order' => 0, ],
    [ 'genrename' => 'アクション', 'order' => 0, ],
    [ 'genrename' => 'コメディ', 'order' => 0, ],
    [ 'genrename' => 'VRゲーム', 'order' => 0, ],
    [ 'genrename' => '宇宙', 'order' => 0, ],
    [ 'genrename' => '空想科学', 'order' => 0, ],
    [ 'genrename' => 'パニック', 'order' => 0, ],
    [ 'genrename' => '童話', 'order' => 0, ],
    [ 'genrename' => '詩', 'order' => 0, ],
    [ 'genrename' => 'エッセイ', 'order' => 0, ],
    [ 'genrename' => 'リプレイ', 'order' => 0, ],
    [ 'genrename' => 'その他', 'order' => 0, ],
    [ 'genrename' => 'ノンジャンル', 'order' => 0, ],
        	]);

    }
  }
