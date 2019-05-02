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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/clear', function() {

    \Illuminate\Support\Facades\Artisan::call('cache:clear');
    \Illuminate\Support\Facades\Artisan::call('config:clear');
    \Illuminate\Support\Facades\Artisan::call('config:cache');
    \Illuminate\Support\Facades\Artisan::call('view:clear');

    return "Cleared!";

});

// FRONTEND ROUTE

Route::get('/', 'Frontend\HomeController@index')->name('home');
Route::get('/ourway', 'Frontend\HomeController@ourway')->name('frontend.ourway');
Route::get('/apartments', 'Frontend\HomeController@apartments')->name('frontend.apartments');
Route::get('/hotel', 'Frontend\HomeController@hotel')->name('frontend.hotel');
Route::get('/news', 'Frontend\HomeController@news')->name('frontend.news');
Route::get('/gallery', 'Frontend\HomeController@gallery')->name('frontend.gallery');
Route::get('/news-detail/{slug}', 'Frontend\HomeController@newsdetail')->name('frontend.news_detail');
Route::get('/ecosystem', 'Frontend\HomeController@ecosystem')->name('frontend.ecosystem');
Route::get('/credentials', 'Frontend\HomeController@credentials')->name('frontend.credentials');
Route::get('/district', 'Frontend\HomeController@district')->name('frontend.district');
Route::get('/about', 'Frontend\HomeController@about')->name('frontend.about');
Route::get('/masterplan', 'Frontend\HomeController@masterplan')->name('frontend.masterplan');
Route::get('/introduction', 'Frontend\HomeController@introduction')->name('frontend.introduction');
Route::get('/location', 'Frontend\HomeController@location')->name('frontend.location');
Route::get('/developer', 'Frontend\HomeController@developer')->name('frontend.developer');
Route::get('/master-plan', 'Frontend\HomeController@planMaster')->name('frontend.plan.master');
Route::get('/partners', 'Frontend\HomeController@partners')->name('frontend.partners');
Route::get('/floor-plan', 'Frontend\HomeController@planFloor')->name('frontend.plan.floor');
Route::get('/unit-plan', 'Frontend\HomeController@planUnit')->name('frontend.plan.unit');
Route::get('/features', 'Frontend\HomeController@features')->name('frontend.features');
Route::get('/contact-us', 'Frontend\HomeController@contactUs')->name('frontend.contact_us');
Route::get('/catalogue/download', 'Frontend\HomeController@downloadCatalogue')->name('frontend.catalogue.download');

// FRONTEND SEARCH
Route::get('/search-results', 'Frontend\SearchController@search')->name('frontend.search-results');


// FRONTEND APARTMENTS
Route::get('/apartments/site', 'Frontend\HomeApartmentsController@site')->name('frontend.apartments.site');
Route::get('/apartments/floor', 'Frontend\HomeApartmentsController@floor')->name('frontend.apartments.floor');
Route::get('/apartments/unit', 'Frontend\HomeApartmentsController@unit')->name('frontend.apartments.unit');


Route::post('/contact-us/save', 'Frontend\HomeController@saveContactUs')->name('frontend.contact_us.save');
Route::post('/subscribe/save', 'Frontend\HomeController@saveSubscribe')->name('frontend.subscribe.save');

// ADMIN ROUTE
// ====================================================================================================================

Route::prefix('admin')->group(function(){
    Route::get('/', 'Admin\DashboardController@index')->name('admin.dashboard');
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

    // Contact Message
    Route::get('/contact-messages', 'Admin\ContactMessageController@index')->name('admin.contact-messages.index');
    Route::post('/contact-messages/delete', 'Admin\ContactMessageController@destroy')->name('admin.contact-messages.destroy');

    // Admin User
    Route::get('/admin-users', 'Admin\AdminUserController@index')->name('admin.admin-users.index');
    Route::get('/admin-users/create', 'Admin\AdminUserController@create')->name('admin.admin-users.create');
    Route::post('/admin-users/store', 'Admin\AdminUserController@store')->name('admin.admin-users.store');
    Route::get('/admin-users/edit/{item}', 'Admin\AdminUserController@edit')->name('admin.admin-users.edit');
    Route::post('/admin-users/update', 'Admin\AdminUserController@update')->name('admin.admin-users.update');
    Route::post('/admin-users/delete', 'Admin\AdminUserController@destroy')->name('admin.admin-users.destroy');

    // User
    Route::get('/users', 'Admin\UserController@index')->name('admin.users.index');
    Route::get('/users/create', 'Admin\UserController@create')->name('admin.users.create');
    Route::post('/users/store', 'Admin\UserController@store')->name('admin.users.store');
    Route::get('/users/edit/{item}', 'Admin\UserController@edit')->name('admin.users.edit');
    Route::post('/users/update', 'Admin\UserController@update')->name('admin.users.update');
    Route::post('/users/delete', 'Admin\UserController@destroy')->name('admin.users.destroy');

    // Subscribes
    Route::get('/subscribes', 'Admin\SubscribeController@index')->name('admin.subscribes.index');
    Route::post('/subscribes/delete', 'Admin\SubscribeController@destroy')->name('admin.subscribes.destroy');
    Route::get('/subscribe-downloads', 'Admin\SubscribeController@download')->name('admin.subscribes.download');

    // News & Blogs
    Route::get('/blog', 'Admin\BlogController@index')->name('admin.blog.index');
    Route::get('/blog/create', 'Admin\BlogController@create')->name('admin.blog.create');
    Route::post('/blog/store', 'Admin\BlogController@store')->name('admin.blog.store');
    Route::get('/blog/show/{id}', 'Admin\BlogController@show')->name('admin.blog.show');
    Route::get('/blog/edit/{id}', 'Admin\BlogController@edit')->name('admin.blog.edit');
    Route::get('/blog/publish/{id}', 'Admin\BlogController@publishBlog')->name('admin.blog.publish');
    Route::get('/blog/unpublish/{id}', 'Admin\BlogController@unpublishBlog')->name('admin.blog.unpublish');
    Route::post('/blog/update/{id}', 'Admin\BlogController@update')->name('admin.blog.update');
    Route::post('/blog/delete', 'Admin\BlogController@destroy')->name('admin.blog.destroy');


    Route::get('/admin/change-password', 'Admin\AdminController@editPassword')->name('admin.change-password');
    Route::post('/admin/change-password/save', 'Admin\AdminController@updatePassword')->name('admin.change-password.save');
});

Route::get('/datatable/contact-message', 'Admin\ContactMessageController@getIndex')->name('datatables.contact-message');
Route::get('/datatable/blogs', 'Admin\BlogController@getIndex')->name('datatables.blog');
Route::get('/datatable/subscribes', 'Admin\SubscribeController@getIndex')->name('datatables.subscribe');