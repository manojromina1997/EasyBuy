<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::group(['middleware' => ['web']],function() {
Route::get('/', [ 'as'=>'home', 'uses'=>'Connector@Index']);
Route::get('/contact', [ 'as'=>'contact', 'uses'=>'ContactController@getContact']);
Route::post('/contact', [ 'uses'=>'ContactController@postContact']);
Route::get('/ac', [ 'as'=>'ac', 'uses'=>'Connector@AC']);
Route::get('/homeentertainment', [ 'as'=>'homeentertainment', 'uses'=>'Connector@HomeEntertainment']);
Route::get('/refrigerator', [ 'as'=>'refrigerator', 'uses'=>'Connector@Refrigerator']);
Route::get('/tv', [ 'as'=>'tv', 'uses'=>'Connector@TV']);
Route::get('/washingmachine', [ 'as'=>'washingmachine', 'uses'=>'Connector@WashingMachine']);
Route::get('/book', [ 'as'=>'book', 'uses'=>'Connector@Book']);
Route::get('/clothing', [ 'as'=>'clothing', 'uses'=>'Connector@Clothing']);
Route::get('/gaming', [ 'as'=>'gaming', 'uses'=>'Connector@Gaming']);
Route::get('/fitness', [ 'as'=>'fitness', 'uses'=>'Connector@Fitness']);
Route::get('/movies', [ 'as'=>'movies', 'uses'=>'Connector@Movies']);
Route::get('/music', [ 'as'=>'music', 'uses'=>'Connector@Music']);
Route::get('/sports', [ 'as'=>'sports', 'uses'=>'Connector@Sports']);
Route::get('/stationary', [ 'as'=>'stationary', 'uses'=>'Connector@Stationary']);
Route::get('/camera', [ 'as'=>'camera', 'uses'=>'Connector@Camera']);
Route::get('/laptop', [ 'as'=>'laptop', 'uses'=>'Connector@Laptop']);
Route::get('/mobile', [ 'as'=>'mobile', 'uses'=>'Connector@Mobiles']);
Route::get('/networkcomponent', [ 'as'=>'networkcomponent', 'uses'=>'Connector@NetworkComponent']);
Route::get('/tablet', [ 'as'=>'tablet', 'uses'=>'Connector@Tablet']);
Route::get('/dinning', [ 'as'=>'dinning', 'uses'=>'Connector@Dinning']);
Route::get('/furniture', [ 'as'=>'furniture', 'uses'=>'Connector@Furniture']);
Route::get('/kitchendinning', [ 'as'=>'kitchendinning', 'uses'=>'Connector@KitchenDinning']);
Route::get('/kitchenstorage', [ 'as'=>'kitchenstorage', 'uses'=>'Connector@KitchenStorage']);
Route::get('/lightning', [ 'as'=>'lightning', 'uses'=>'Connector@Lightning']);
Route::get('/babycare', [ 'as'=>'babycare', 'uses'=>'Connector@BabyCare']);
Route::get('/clothingKids', [ 'as'=>'clothingKids', 'uses'=>'Connector@ClothingKids']);
Route::get('/footwearKids', [ 'as'=>'footwearKids', 'uses'=>'Connector@FootwearKids']);
Route::get('/school', [ 'as'=>'school', 'uses'=>'Connector@School']);
Route::get('/toys', [ 'as'=>'toys', 'uses'=>'Connector@Toys']);
Route::get('/accesoriesMens', [ 'as'=>'accesoriesMens', 'uses'=>'Connector@AccesoriesMens']);
Route::get('/clothingMens', [ 'as'=>'clothingMens', 'uses'=>'Connector@ClothingMens']);
Route::get('/footwearMens', [ 'as'=>'footwearMens', 'uses'=>'Connector@FootwearMens']);
Route::get('/personalMens', [ 'as'=>'personalMens', 'uses'=>'Connector@PersonalMens']);
Route::get('/watchesMens', [ 'as'=>'watchesMens', 'uses'=>'Connector@WatchesMens']);
Route::get('/accesoriesWomen', [ 'as'=>'accesoriesWomen', 'uses'=>'Connector@AccesoriesWomen']);
Route::get('/clothingWomen', [ 'as'=>'clothingWomen', 'uses'=>'Connector@ClothingWomen']);
Route::get('/footwearWomen', [ 'as'=>'footwearWomen', 'uses'=>'Connector@FootwearWomen']);
Route::get('jewelleryWomen', [ 'as'=>'jewelleryWomen', 'uses'=>'Connector@JewelleryWomen']);
Route::get('/personalWomen', [ 'as'=>'personalWomen', 'uses'=>'Connector@PersonalWomen']);
Route::get('/WatchesWomen', [ 'as'=>'watchesWomen', 'uses'=>'Connector@WatchesWomen']);

});
Route::get('/admins', function () {
return view('admin');
})->middleware('isAdmin');
Route::get('/showcomplains', function () {
return view('admins.complaints');
})->middleware('isAdmin');
Route::get('/orders', function () {
return view('admins.orders');
})->middleware('isAdmin');
Route::get('/addproduct', function () {
return view('admins.newproduct');
})->middleware('isAdmin');
Route::get('/showproduct', function () {
return view('admins.showproduct');
})->middleware('isAdmin');
Route::get('/deleteproduct', function () {
return view('admins.deleteproduct');
})->middleware('isAdmin');
Auth::routes();

Route::get('/home', 'HomeController@index');
