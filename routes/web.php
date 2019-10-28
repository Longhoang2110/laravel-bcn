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
Route::get('/admin/login', 'AdminController@getlogin')->name('getadmin');
Route::post('/admin/login', 'AdminController@postlogin')->name('postadmin');
Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');



Route::resource('coffee','CoffeesController');
Route::get('/', 'PageController@home')->name('home');
Route::get('/listCoffee', 'CoffeesController@Index')->name('listCoffee');
Route::get('/addCoffee', 'CoffeesController@getAdd')->name('addCoffee');
Route::get('/blog', 'PageController@blog')->name('blog');
Route::get('/blogDetail', 'PageController@blogDetail')->name('blogDetail');
Route::get('/home', 'PageController@home')->name('home');
Route::get('/product', 'PageController@product')->name('product');
Route::get('/admin', 'AdminController@getlogin')->name('admin');
// Route::get('/introduce', 'PageController@introduce')->name('introduce');
Route::get('/contact', 'PageController@contact')->name('contact');
Route::get('/addimages', 'PageController@addImages')->name('addimages');
Route::get('/images','FormController@create')->name('getaddimage');
Route::post('/images','FormController@store')->name('postaddimage');
///////////test/////////
Route::get('/content/{type}', 'PageController@content')->name('content');





// Route::get('/admin', function () {
//     return view('admin.createCoffee');
// });

////////////coffee admin\\\\\\\\\\\\\\\
Route::group(['prefix' => 'Admincoffee'],function(){
    Route::get('/','CoffeesController@listCoffeAdmin')->name('coffee-list');

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
    Route::get('categoryblog/{id}','PageController@categoryblog')->name('category-blog');


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
    Route::get('categorycoffee/categoryname/{name}/id/{id}','CoffeesController@categorycoffee')->name('category-coffee');

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

////////// display\\\\\\\\\\\\\\\
Route::group(['prefix' => 'Adminfix'],function(){
    Route::get('/','AdminfixController@index')->name('display-list');
    Route::get('displaydetail/{id}','PageController@displayDetail')->name('display-detail');

    Route::get('update/{id}','AdminfixController@getUpdate')->name('display-update');
    Route::post('update/{id}','AdminfixController@postUpdate')->name('displays-update');

    Route::get('add','AdminfixController@getAdd')->name('display-add');
    Route::post('add','AdminfixController@postAdd')->name('display-add');

    Route::get('delete/{id}','AdminfixController@delete')->name('display-delete');
});
////////// category\\\\\\\\\\\\\\\
Route::group(['prefix' => 'Category'],function(){
    Route::get('/','CategoryController@index')->name('category-list');
    Route::get('categorydetail/{id}','PageController@categoryDetail')->name('category-detail');

    Route::get('update/{id}','CategoryController@getUpdate')->name('category-update');
    Route::post('update/{id}','CategoryController@postUpdate')->name('category-update');

    Route::get('add','CategoryController@getAdd')->name('category-add');
    Route::post('add','CategoryController@postAdd')->name('category-add');

});
//////////content////////////////
Route::group(['prefix' => 'content'],function(){
    Route::get('/','ContentController@index')->name('content-list');

    // Route::get('add','ContentController@getAdd')->name('content-add');
    // Route::post('add','PostController@postAdd')->name('post-add');

    Route::get('update/{id}','ContentController@getUpdate')->name('content-update');
    Route::post('update/{id}','ContentController@postUpdate')->name('content-update');

    // Route::get('delete/{id}','PostController@delete')->name('post-delete');

});
Route::group(['prefix' => 'address'],function(){
Route::get('/','AddressController@index')->name('address-list');
Route::get('add','AddressController@getAdd')->name('address-add');
Route::post('add','AddressController@postAdd')->name('address-add');
Route::get('update/{id}','AddressController@getUpdate')->name('address-update');
Route::post('update/{id}','AddressController@postUpdate')->name('address-update');
Route::get('delete/{id}','AddressController@delete')->name('address-delete');

});


///////// group_product\\\\\\\\\\\\\\\
Route::group(['prefix' => 'GroupProduct'],function(){
    Route::get('/','GroupProductController@index')->name('group_product-list');
    // Route::get('categorydetail/{id}','PageController@categoryDetail')->name('category-detail');

    Route::get('update/{id}','GroupProductController@getUpdate')->name('group_product-update');
    Route::post('update/{id}','GroupProductController@postUpdate')->name('group_product-update');

    Route::get('add','GroupProductController@getAdd')->name('group_product-add');
    Route::post('add','GroupProductController@postAdd')->name('group_product-add');
    Route::get('categorygroup_product/group_productname/{name}/id/{id}','GroupProductController@group_productcoffee')->name('group_product-coffee');

});
Route::group(['prefix' => 'ajax'],function(){
    Route::get ('group/{idcategory}','ajaxController@getindex');

});
