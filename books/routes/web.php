<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
|Back Routes
|--------------------------------------------------------------------------
*/
  Route::prefix('admin')->name('admin.')->middleware('isLogin')->group(function(){
  Route::get('giris','Back\AuthController@login')->name('login');
  Route::post('giris','Back\AuthController@loginPost')->name('login.post');

  });

  Route::prefix('admin')->name('admin.')->middleware('isAdmin')->group(function(){
  Route::get('panel','Back\Dashboard@index')->name('dashboard');
///
  Route::resource('kitaplar','Back\BookController');
  Route::get('/deletebook/{id}','Back\BookController@delete')->name('delete');

  Route::resource('sayfalar','Back\PageController');
  //Route::get('/deletepage/{id}','Back\PageController@delete')->name('delete');
  Route::get('/sayfa/sil/{id}','Back\PageController@delete')->name('page.delete');


  Route::resource('kategoriler','Back\CategoryController');
  //Route::get('/deletecategory/{id}','Back\CategoryController@delete')->name('delete');
  Route::get('/kategori/sil{id}','Back\CategoryController@delete')->name('category.delete');


  Route::resource('kullanicilar','Back\AdminController');
  Route::get('/deleteadmin/{id}','Back\AdminController@delete')->name('delete');

  Route::get('cikis','Back\AuthController@logout')->name('logout');

});
/*
|--------------------------------------------------------------------------
|Front Routes
|--------------------------------------------------------------------------
*/
Route::get('/','Front\Homepage@index')->name('homepage');
Route::get('/{slug}','Front\Homepage@single')->name('single');
Route::get('/{sayfa}','Front\Homepage@page')->name('page');
Route::get('/iletisim','Front\Homepage@contact')->name('contact');
Route::post('/iletisim','Front\Homepage@contactpost')->name('contact.post');

Route::get('/kategori/{category}','Front\Homepage@category')->name('category');
