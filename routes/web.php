<?php

Route::get('setlocale/{locale}', function ($locale) {
    if (in_array($locale, \Config::get('app.locales'))) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
});
//Route::post('/language', array(
//    'Middleware'=>'LanguageController',
//    'uses'=>'LanguageController@index'
//));
//Route::group(['middleware' => 'locale'], function() {
//   Route::get('change-language/{language}', 'HomeController@changeLanguage')
//       ->name('user.change-language');
//});
// Trang chu
Route::get('/', 'HomeController@index');
Route::view('/admin/login', 'admin.pages.login')->name('admin.getLogin');
Route::post('/admin/login', 'UserController@loginAdmin')->name('admin.postLogin');
Route::get('getProductType', 'AjaxController@getProductType');
Route::get('change-language/{language}', 'HomeController@changeLanguage')->name('user.change-language');
Route::group(['prefix' => 'admin','middleware' => 'adminMiddleware'], function ()
{
    Route::view('/','admin.pages.index');
    Route::resource('category', 'CategoryController');
    Route::resource('product-type', 'ProductTypeController');
    Route::resource('product', 'ProductController');
    Route::post('update-product/{id}','ProductController@update');
});
// Đăng nhập facebook
Route::get('callback/{social}','UserController@handleProviderCallback');
Route::get('login/{social}','UserController@redirectToProvider')->name('login.social');
Route::get('logout','UserController@logout');
Route::post('register','UserController@register')->name('register');
Route::post('login','UserController@loginClient')->name('login.client');
// Cart
Route::resource('cart','CartController');
Route::get('add-cart/{id}','CartController@addCart')->name('addCart');
// checkout
Route::get('checkout','CartController@checkout')->name('cart.checkout');
Route::resource('customer','CustomerController');

