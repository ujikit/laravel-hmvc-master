<?php
Route::group(['namespace' => 'App\Modules\Index\Controllers'], function () {
  Route::get('/index', 'IndexController@index');
});
