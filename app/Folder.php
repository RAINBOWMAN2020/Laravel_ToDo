<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class folder extends Model
{
    //
}


/*
クラスの中身は記述しなくても大丈夫。継承元である Model クラスで様々な設定を読み取ってくれる。

例：
このモデルクラスがどのテーブルに対応しているかはクラス名から自動的に推定される。モデルクラスのクラス名の
複数系のテーブルが対応していると解釈される。今回は、 folders テーブル。
このデフォルトの推定に当てはまらない場合は追加で設定を記述すればよい。
*/
