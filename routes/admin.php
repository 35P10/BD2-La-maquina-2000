<?php


Route::prefix('/admin')->group(function(){
//Route::get('/admin',function(){
    //return 'Hola';
    Route::get('/','App\Http\Controllers\Admin\DashboardController@getDashboard');
    Route::get('/users','App\Http\Controllers\Admin\UserController@getUsers');
    
    
    
    
    //Module Products
Route::get('/products','App\Http\Controllers\Admin\ProductController@getHome');
Route::get('/product/add','App\Http\Controllers\Admin\ProductController@getProductAdd');
    
    //Categories
    
 Route::get('/categories','App\Http\Controllers\Admin\CategoriesController@getHome');   
Route::post('/category/add','App\Http\Controllers\Admin\CategoriesController@postCategoryAdd');
});
