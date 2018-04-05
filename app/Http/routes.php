<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();
Route::get('/home', 'HomeController@index');
//************CUSTOMERS*************/
Route::get('/customer', 'CustomerController@index')->name('customer.index');
Route::get('/customer/create', 'CustomerController@create')->name('customer.create');
Route::post('/customer/create','CustomerController@store');
Route::get('/customer/{customer}/edit', 'CustomerController@edit')->name('customer.edit');
Route::patch('/customer/{customer}/edit', 'CustomerController@update')->name('customer.update');
Route::delete('/customer/{customer}/delete', 'CustomerController@destroy')->name('customer.destroy');
//************SELLERS*************/
Route::get('/seller', 'SellerController@index')->name('seller.index');
Route::get('/seller/create', 'SellerController@create')->name('seller.create');
Route::post('/seller/create','SellerController@store');
Route::get('/seller/{seller}/edit', 'SellerController@edit')->name('seller.edit');
Route::patch('/seller/{seller}/edit', 'SellerController@update')->name('seller.update');
Route::delete('/seller/{seller}/delete', 'SellerController@destroy')->name('seller.destroy');
//************ITEMS*************/
Route::get('/item', 'ItemController@index')->name('item.index');
Route::get('/item/create', 'ItemController@create')->name('item.create');
Route::post('/item/create','ItemController@store');
Route::get('/item/{item}/edit', 'ItemController@edit')->name('item.edit');
Route::patch('/item/{item}/edit', 'ItemController@update')->name('item.update');
Route::delete('/item/{item}/delete', 'ItemController@destroy')->name('item.destroy');
//************COURIERS*************/
Route::get('/courier', 'CourierController@index')->name('courier.index');
Route::get('/courier/create', 'CourierController@create')->name('courier.create');
Route::post('/courier/create','CourierController@store');
Route::get('/courier/{courier}/edit', 'CourierController@edit')->name('courier.edit');
Route::patch('/courier/{courier}/edit', 'CourierController@update')->name('courier.update');
Route::delete('/courier/{courier}/delete', 'CourierController@destroy')->name('courier.destroy');
//************ORDERS*************/
Route::get('/order', 'OrderController@index')->name('order.index');
Route::get('/order/create', 'OrderController@create')->name('order.create');
Route::post('/order/create','OrderController@store');
Route::get('/courier/{courier}/edit', 'CourierController@edit')->name('courier.edit');
Route::patch('/courier/{courier}/edit', 'CourierController@update')->name('courier.update');
Route::delete('/courier/{courier}/delete', 'CourierController@destroy')->name('courier.destroy');
