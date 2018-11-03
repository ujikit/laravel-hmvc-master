<?php
Route::group(['namespace' => 'App\Modules\Contoh\Controllers'], function () {
  Route::get('/contoh', 'ContohControllers@index');
});
