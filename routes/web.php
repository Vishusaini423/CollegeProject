<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', function () {
    return view('welcome');
}); 

Route::get('homepage',function()
{
    return view('Home');
});

Route::get('admin_main',function(){
    return view('Admin.admin_main');
});

Route::get('add_sub_admin',function(){
    return view('Admin.add_sub_admin');
});

Route::get('order_history/{email}', [MainController::class, 'order_history'])->name('order_history');
    
Route::get('logout',[MainController::class, 'logout']); 

Route::get('view_user',[MainController::class,'view_user'])->name('Admin.view_user');

Route::get('add_category',[MainController::class,'show_category'])->name('Admin.add_category');

Route::get('add_sub_category',[MainController::class,'get_category'])->name('Admin.add_sub_category');

Route::get('add_food',[MainController::class,'getsubcat'])->name('Admin.content');

Route::get('content',[MainController::class,'fetcher']);

Route::get('getit/{id}', [MainController::class, 'getit'])->name('getit');

Route::get('getfood',[MainController::class,'getfood'])->name('getfood');

Route::post('book_meal',[MainController::class,'book_meal']);

Route::post('signin',[MainController::class , 'signin']);

Route::post('signin_sub',[MainController::class , 'signin_sub']);

Route::post('login',[MainController::class,'login']);

Route::post('add_category',[MainController::class,'add_category']);

Route::post('add_sub_category',[MainController::class,'add_sub_category']);

Route::post('add_food',[MainController::class,'add_food']); 

Route::post('getfood',[MainController::class,'get_food']);

Route::post('view_orders',[MainController::class,'view_orders']);

Route::post('cart',[MainController::class,'view_cart']);