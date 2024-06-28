<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index_2');
});
Route::get('404', function () {
    return view('404');
});
Route::get('about', function () {
    return view('about');
});
// Route::get('cart', function () {
//     return view('cart');
// });
// Route::get('checkout', function () {
//     return view('checkout');
// });
Route::get('contact', function () {
    return view('contact');
});
Route::get('news', function () {
    return view('news');
});
Route::get('single-news', function () {
    return view('single-news');
});
Route::get('shop', function () {
    return view('shop');
});

Route::get('bloge_insert', function () {
    return view('bloge_insert');
});
Route::get('admin_index', function () {
    return view('admin_index');
});
Route::post('bloge_insert','App\Http\Controllers\bloge_c@blog'); 


Route::post('plant_insert','App\Http\Controllers\plants_c@add_plats'); 

Route::get('shop','App\Http\Controllers\plants_c@search_plants');


Route::get('indore','App\Http\Controllers\plants_c@indore_plants');
Route::get('/outdoor','App\Http\Controllers\plants_c@outdoor');
Route::get('fruit','App\Http\Controllers\plants_c@fruit');
Route::get('air','App\Http\Controllers\plants_c@air');
Route::get('vegetable','App\Http\Controllers\plants_c@vegetable');
Route::get('flower','App\Http\Controllers\plants_c@flower');
Route::get('hanging','App\Http\Controllers\plants_c@hanging');

Route::get('fruit_seed','App\Http\Controllers\plants_c@fruit_seed');
Route::get('vegetable_seed','App\Http\Controllers\plants_c@vegetable_seed');

Route::get('vegetable_seed','App\Http\Controllers\plants_c@vegetable_seed');

Route::get('plastic_pots','App\Http\Controllers\plants_c@plastic_pots');
Route::get('Wooden_pots','App\Http\Controllers\plants_c@Wooden_pots');
Route::get('ceramic_pots','App\Http\Controllers\plants_c@ceramic_pots');

Route::get('Fertilizer','App\Http\Controllers\plants_c@Fertilizer');
Route::get('Garden_tools','App\Http\Controllers\plants_c@Garden_tools');
Route::get('Pets_control','App\Http\Controllers\plants_c@Pets_control');
Route::get('Equipments_Packages','App\Http\Controllers\plants_c@Equipments_Packages');

Route::get('Plants','App\Http\Controllers\plants_c@Plants');
Route::get('Seed','App\Http\Controllers\plants_c@Seed');
Route::get('Pots','App\Http\Controllers\plants_c@Pots');
Route::get('Equipments','App\Http\Controllers\plants_c@Equipments');
Route::get('Packages','App\Http\Controllers\plants_c@Packages');

Route::get('Plants_packages','App\Http\Controllers\plants_c@Plants_packages');
Route::get('seed_packages','App\Http\Controllers\plants_c@seed_packages');
Route::get('/blog','App\Http\Controllers\bloge_c@search_blog');

Route::get('/sale','App\Http\Controllers\plants_c@sale');

Route::get('regi', function () {
    return view('regi');
});

Route::post('regi','App\Http\Controllers\login_controller@login');

Route::get('login_form',function(){
    if(session()->has('user')){
        return redirect('/');
    }
    return view('log_new');
});

Route::post('/login_form','App\Http\Controllers\login_controller@login_wall');
Route::get('logout',function(){
    if(session()->has('user')){
        session()->pull('user');
    }
    return redirect('/');
});


Route::post('/cart/{id}','App\Http\Controllers\plants_c@addcart');

Route::get('/cart','App\Http\Controllers\plants_c@search_cart');
Route::get('/cart/{id}','App\Http\Controllers\plants_c@delete_cart');

Route::get('single_product/{id}','App\Http\Controllers\plants_c@get_data');
Route::get('cart_single_data/{id}','App\Http\Controllers\plants_c@get_cart_data');
Route::get('single_blog/{id}','App\Http\Controllers\bloge_c@single_blog');


Route::get('plant_insert', function () {
    return view('plant_insert');
});


Route::get('/category','App\Http\Controllers\plants_c@search');

Route::get('/gardening_service', function(){
    return view('gardening_service');
});


Route::get('/log_new',function(){
    if(session()->has('user')){
        return redirect('/');
    }
    return view('log_new');
});

Route::post('/log_new','App\Http\Controllers\login_controller@login_wall');


Route::get('regi_new', function () {
    return view('regi_new');
});

// Pending design
Route::get('pay', function () {
    return view('pay');
});

Route::get('checkout/{id}','App\Http\Controllers\plants_c@checkout');
Route::get('pay/{id}','App\Http\Controllers\plants_c@single_checkout');

// Route::get('pay/{id}','App\Http\Controllers\plants_c@paymant');


Route::get('all_product','App\Http\Controllers\plants_c@all_product');
Route::get('/all_product/{id}','App\Http\Controllers\plants_c@all_product_delete');
Route::get('/edit/{id}','App\Http\Controllers\plants_c@get_edit_data');
Route::post('edit','App\Http\Controllers\plants_c@update_product');

// Route::get('/edit/{id}','App\Http\Controllers\plants_c@get_edit_data');



Route::get('/all_blog','App\Http\Controllers\bloge_c@all_blog');
Route::get('/all_blog/{id}','App\Http\Controllers\bloge_c@all_blog_delete');
Route::get('/edit_blog_data/{id}','App\Http\Controllers\bloge_c@get_edit_blog');
Route::post('/all_blog','App\Http\Controllers\bloge_c@update_blog');


Route::get('/all_login_list','App\Http\Controllers\login_controller@login_list');
// Route::post('contact','App\Http\Controllers\feedback_c@feedback'); 


Route::post('/orders', 'App\Http\Controllers\orders_c@checkout_order_add');
Route::post('/single_order', 'App\Http\Controllers\orders_c@checkout_single_order_add');

// Route::get('/orders', 'App\Http\Controllers\plants_c@orders');

Route::get('show_orders', 'App\Http\Controllers\orders_c@order_data');

// Route::get('/orders','App\Http\Controllers\orders_c@order_data');


Route::get('/show_orders/{id}','App\Http\Controllers\orders_c@cancel_order');

Route::get('/all_order','App\Http\Controllers\orders_c@all_order_data');

Route::get('/edit_order/{id}','App\Http\Controllers\orders_c@status_data');
Route::post('/edit_order','App\Http\Controllers\orders_c@updateStatus');

Route::get('set_discount', function () {
    return view('set_discount');
});
Route::post('/set_discount','App\Http\Controllers\plants_c@updateDiscount');
Route::post('/m_discount','App\Http\Controllers\plants_c@main_Discount');
