<?php

namespace App\Http\Controllers;

use App\Folder;
use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
//  ルーティングにて{id}と定義したので、$id で受け取る。
//     public function index(int $id)
// {
//     // すべてのフォルダを取得する allクラスメソッド
//     $folders = Folder::all();

//     // 選ばれたフォルダを取得する
//     $current_folder = Folder::find($id);

//     // 選ばれたフォルダに紐づくタスクを取得する
//     // ※第一引数 : データの取得条件　第二引数 : 比較する値
//     // $Tasks::where('folder_id','=',$current_folder->id)->get(); 厳密に言えばこれ。
//     $tasks = Task::where('folder_id', $current_folder->id)->get();

//     // view関数 
//     //第一引数 : テンプレートファイル名
//     //第二引数 : テンプレートに渡すデータ ※配列を渡すが、キーがテンプレート側で参照する際の変数名になる
//     return view('tasks/index', [
//         'folders' => $folders,
//         // id ではわかりにくいため、current_folder_id
//         'current_folder_id' => $current_folder->id,
//         'tasks' => $tasks,
//     ]);
// }

public function index(int $id)
{
    // すべてのフォルダを取得する
    $folders = Folder::all();

    // 選ばれたフォルダを取得する
    $current_folder = Folder::find($id);

    // 選ばれたフォルダに紐づくタスクを取得する
    $tasks = Task::where('folder_id', $current_folder->id)->get();

    return view('tasks/index', [
        'folders' => $folders,
        'current_folder_id' => $current_folder->id,
        'tasks' => $tasks,
    ]);
}


//サンプル
// public function index(int $id)
// {
//     $folders = Folder::all();

//     return view('tasks/index', [
//         'folders' => $folders,
//         'current_folder_id' => $id,
//     ]);
// }

}