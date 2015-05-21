<?php

Route::get('/', 'PageController@index');
Route::get('about', 'PageController@about');
Route::get('quality', 'PageController@quality');
Route::get('contact', 'PageController@contact');
Route::get('service', 'PageController@service');
Route::get('cooperation', 'PageController@cooperation');
Route::get('download', 'PageController@download');
Route::get('promotion', 'PageController@promotion');
Route::get('mailok', 'PageController@mailok');
Route::get('priceok', 'PageController@priceok');
Route::get('products', 'PageController@colorDevice');
Route::get('nocolordevice', 'PageController@nocolorDevice');

Route::get('products/diamond', 'ProductController@colorLaptop');
Route::get('colordevice/portable', 'ProductController@colorPortable');
Route::get('colordevice/ipad', 'ProductController@colorIpad');
Route::get('nocolordevice/laptop', 'ProductController@nocolorLaptop');
Route::get('nocolordevice/ipad', 'ProductController@nocolorIpad');
Route::get('colordevice/probes', 'ProductController@probes');


//contact
Route::post('mailPost', 'PageController@contactForm');
Route::post('getPrice', 'PageController@getPrice');