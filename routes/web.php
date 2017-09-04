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

Route::get('/', function () {

    $marathonTitle = DB::table('info_marathons')->select('title')->get();
    $ar = [];
    foreach ($marathonTitle as  $value) {
      $ar[] = $value->title;
    }
  return view('admin.marathon',['marathonName' => $ar]);
});
