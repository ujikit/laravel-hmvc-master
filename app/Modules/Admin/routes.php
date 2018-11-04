<?php
Route::group(['namespace' => 'App\Modules\Admin\Controllers'], function () {
  Route::get('/admin_dashboard', 'AdminController@index');
});
