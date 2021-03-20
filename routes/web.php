<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',function(){
    return view('welcome');
});

/* 
// ルーティングした blade ファイルは、以下でアクセスできる予定（だが、現在できていない）
//  → 127.0.0.1:8000/folders/{id}/tasks
// get で /folders/{id}/tasks に来たリクエストに対し TaskController の index メソッドを呼び出す 
// {} : 変化する部分は波括弧で表現
// tasks.index : このルートに名前を付けている

// getメソッドに続けて呼び出したnameメソッドの引数がそのルートの名前。

*/
Route::get('/folders/{id}/tasks', 'TaskController@index')->name('tasks.index');
