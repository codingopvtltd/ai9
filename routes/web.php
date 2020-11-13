<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Artisan;

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

Route::get('/logout', function () {
	Auth::logout();
	return redirect('/');
})->name('logout');



Route::get('/', 'Landing\LandingController@home')->name('home');
Route::get('/cart', 'Landing\LandingController@cart')->name('cart');
Route::get('/not-available', 'Landing\LandingController@notAvailable')->name('not-available');
Route::group(['middleware' => 'auth'], function () {

Route::get('/console', 'Console\HomeController@category')->name('console');
Route::get('/console/category', 'Console\HomeController@category')->name('category');
Route::post('/console/category-actions', 'Console\HomeController@categoryActions')->name('category-actions');
Route::get('/console/sub-category', 'Console\HomeController@subCategory')->name('sub-category');
Route::post('/console/sub-category-actions', 'Console\HomeController@subCategoryActions')->name('sub-category-actions');
Route::get('/console/products', 'Console\HomeController@products')->name('products');
Route::post('/console/product-actions', 'Console\HomeController@productActions')->name('product-actions');
Route::get('/settings', 'Console\HomeController@settings')->name('settings');



});
Auth::routes();


Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    Artisan::call('config:cache');
    return "Cache is clearedee";
});
Route::post('/git-webhook', function () {
    shell_exec( 'git fetch --all' );
    shell_exec( 'git reset --hard origin/master' );
    shell_exec( 'git pull origin master' );
    return "shell executed";
});






// This need to write on the bottom otherwise it overlap the rewrite rules
Route::get('/category/all', 'Landing\LandingController@categoryAll')->name('category-all');
Route::get('/category/{category_slug}', 'Landing\LandingController@subcategoryListing')->name('sub-category-listing');
Route::get('/{category_slug}', 'Landing\LandingController@category')->name('category-page');
Route::get('/{category_slug}/{sub_category_slug}', 'Landing\LandingController@subCategory')->name('sub-category-page');
Route::get('/{category_slug}/{sub_category_slug}/{product_name_slug}', 'Landing\LandingController@product')->name('product-details');
// Route::get('/{product_name_slug}', 'Landing\LandingController@product')->name('product-details');



//Github Automatic Pull Controller
Route::namespace('Webhooks')->prefix('/webhooks')->group(function () {
    Route::post('/github/pull', 'GithubWebhookProcessor@pull');
});
//Github Automatic Pull Controller

