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
Route::group(['middleware' => 'auth', 'prefix' => 'adm'],function(){
    Route::get('/country', 'AdminController@Links');



    Route::get('/string', 'AdminController@getString');
    Route::get('/text', 'AdminController@getText');
    Route::get('/textarea', 'AdminController@getTextEditor');
    Route::get('/float', 'AdminController@getFloat');
    Route::get('/int', 'AdminController@getInt');
    Route::get('/bool', 'AdminController@getBool');
    Route::get('/image', 'AdminController@getImage');
    Route::get('/link', 'AdminController@getLink');
    Route::get('/file', 'AdminController@getFile');


    Route::get('/multi-block', 'AdminController@multiUpload');

    //========================================================
    Route::get('/',         'AdminController@getIndex');
    // Таксаномия проекта. Визуальная зависимость данных.
    Route::get('/taxonomy', 'Back\TaxonomyController@showTaxonomy');
    Route::get('/widget/taxonomy', 'Back\TaxonomyController@showWidgetTax');

    // Служебные роуты
    Route::post('/save', 'Back\SaveController@save');
    Route::post('/save', 'Back\SaveController@save');

    // Создание нового элемента группы
    Route::post('/newItemRow', 'Back\GroupItemController@newRow');
    Route::post('/newItemBox', 'Back\GroupItemController@newBox');
    Route::post('/newImage', 'Back\GroupItemController@newImageItem');

    // Роут удаление элемента группы
    Route::post('/removeItem', 'Back\GroupItemController@removeItem');
});

