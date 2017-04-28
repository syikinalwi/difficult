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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

//route for State
Route::resource('states','StatesController');

//route for Area
Route::resource('areas','AreasController');

//route for Category
Route::resource('categories','CategoriesController');

//route for Subcategory
Route::resource('subcategories','SubcategoriesController');

//route for Listing_type
Route::resource('listing_types','Listing_typesController');

//route for Brand
Route::resource('brands','BrandsController');

//route for Product
Route::resource('products','ProductsController');

Route::get('products/area/{state_id}', 'ProductsController@getStateArea');

Route::get('products/categories/{category_id}', 'ProductsController@getCategoryId');
