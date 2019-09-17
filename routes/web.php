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
Route::resource('coffee','CoffeesController');
Route::get('/', 'PageController@home')->name('home');
Route::get('/listCoffee', 'CoffeesController@Index')->name('listCoffee');
Route::get('/addCoffee', 'CoffeesController@getAdd')->name('addCoffee');
Route::get('/blog', 'PageController@blog')->name('blog');
Route::get('/blogDetail', 'PageController@blogDetail')->name('blogDetail');
Route::get('/home', 'PageController@home')->name('home');
Route::get('/product', 'PageController@product')->name('product');
Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/introduce', 'PageController@introduce')->name('introduce');
Route::get('/contact', 'PageController@contact')->name('contact');
Route::get('/addimages', 'PageController@addImages')->name('addimages');
Route::get('/images','FormController@create')->name('getaddimage');
Route::post('/images','FormController@store')->name('postaddimage');




// Route::get('/admin', function () {
//     return view('admin.createCoffee');
// });

////////////coffee admin\\\\\\\\\\\\\\\
Route::group(['prefix' => 'Admincoffee'],function(){
    Route::get('/','CoffeesController@index')->name('coffee-list');

    Route::get('update/{id}','CoffeesController@getUpdate')->name('coffee-update');
    Route::post('update/{id}','CoffeesController@postUpdate')->name('coffee-update');

    Route::get('add','CoffeesController@getAdd')->name('coffee-add');
    Route::post('add','CoffeesController@postAdd')->name('coffee-add');

    Route::get('delete/{id}','CoffeesController@delete')->name('coffee-delete');
});

//////////blog admin\\\\\\\\\\\\\\\
Route::group(['prefix' => 'Adminblog'],function(){
    Route::get('/','BlogController@index')->name('blog-list');
    Route::get('blogdetail/{id}','PageController@blogDetail')->name('blog-detail');

    Route::get('update/{id}','BlogController@getUpdate')->name('blog-update');
    Route::post('update/{id}','BlogController@postUpdate')->name('blog-update');

    Route::get('add','BlogController@getAdd')->name('blog-add');
    Route::post('add','BlogController@postAdd')->name('blog-add');

    Route::get('delete/{id}','BlogController@delete')->name('blog-delete');
});


//trang website
Route::group(['prefix' => 'coffee'],function(){
    Route::get('/','CoffeesController@index')->name('coffee-list');

    Route::get('coffeedetail/{id}','PageController@coffeeDetail')->name('coffee-detail');
    Route::get('update/{id}','CoffeesController@getUpdate')->name('coffee-update');
    Route::post('update/{id}','CoffeesController@postUpdate')->name('coffee-update');

    Route::get('add','CoffeesController@getAdd')->name('coffee-add');
    Route::post('add','CoffeesController@postAdd')->name('coffee-add');

    Route::get('delete/{id}','CoffeesController@delete')->name('coffee-delete');
});

//trang website
Route::group(['prefix' => 'buyproduct'],function(){
    Route::get('/','BuyerController@notification')->name('buy-success');

    //Route::get('coffeedetail/{id}','BuyerController@coffeeDetail')->name('coffee-detail');
    //Route::post('update/{id}','BuyerController@postUpdate')->name('coffee-update');

    Route::get('add/{id}','BuyerController@getAdd')->name('buyer-getadd');
    Route::post('add','BuyerController@postAdd')->name('buyer-postadd');

    //Route::get('delete/{id}','BuyerController@delete')->name('coffee-delete');
});

