<?php

use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\LoginWithGoogleController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\FrontendController;

Route::get('/', [FrontendController::class, 'index'])->name('homepage');
Route::get('/about-us', [FrontendController::class, 'about'])->name('about');
Route::get('/contact-us', [FrontendController::class, 'contact'])->name('contact');
Route::get('/our-services', [FrontendController::class, 'services'])->name('services');
Route::get('/blogs', [FrontendController::class, 'blogs'])->name('blogs');
Route::get('/blog/{id}/{slug}', [FrontendController::class, 'blogdetails'])->name('blogdetails');
Route::post('/savecontact-us', [FrontendController::class, 'savecontact'])->name('savecontact');


require __DIR__ . '/auth.php';
// Auth::routes();
Route::any('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');


Route::middleware(['auth'])->group(function () {
    // Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
    Route::get('/admin/blogs', [App\Http\Controllers\HomeController::class, 'blogs'])->name('blogs');
    Route::get('/admin/contact-us', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact-us');
    Route::get('/admin/create-blog', [App\Http\Controllers\HomeController::class, 'createblog'])->name('create-blog');
    Route::post('/admin/save-blog', [App\Http\Controllers\HomeController::class, 'saveblog'])->name('save-blog');
    Route::post('/admin/delete-blog/{id}', [App\Http\Controllers\HomeController::class, 'deleteblog'])->name('delete-blog');
   
    //subscription routes

    Route::group(['middleware' => 'auth'], function () {
        // Route::any('/run_schedule_purchase', [App\Http\Controllers\SubscriptionController::class, 'run_schedule_purchase'])->name('run_schedule_purchase');
        Route::any('/superadmin', [App\Http\Controllers\SuperController::class, 'index'])->name('superadmin');
        Route::any('/allwaybills', [App\Http\Controllers\SuperController::class, 'allwaybills'])->name('allwaybills');
        Route::any('/allusers', [App\Http\Controllers\SuperController::class, 'allusers'])->name('allusers');
        Route::any('/schedule_accounts', [App\Http\Controllers\SuperController::class, 'schedule_accounts'])->name('schedule_accounts');
        Route::any('/admin_giveaway', [App\Http\Controllers\SuperController::class, 'admin_giveaway'])->name('admin_giveaway');
        Route::any('/all_payment_transactions', [App\Http\Controllers\SuperController::class, 'payment_transactions'])->name('all_payment_transactions');
        Route::any('/all_withdrawals', [App\Http\Controllers\SuperController::class, 'all_withdrawals'])->name('all_withdrawals');
        Route::any('/approve_withdraw/{id}', [App\Http\Controllers\SuperController::class, 'approve_withdraw'])->name('approve_withdraw');
        Route::any('/revert_withdraw/{id}', [App\Http\Controllers\SuperController::class, 'revert_withdraw'])->name('revert_withdraw');
        Route::any('/user_management', [App\Http\Controllers\SuperController::class, 'user_management'])->name('user_management');
        Route::any('/user_transaction/{id}', [App\Http\Controllers\SuperController::class, 'user_transaction'])->name('user_transaction');
        Route::any('/data_price', [App\Http\Controllers\SuperController::class, 'data_price'])->name('data_price');
        Route::any('/plan_status', [App\Http\Controllers\SuperController::class, 'plan_status'])->name('plan_status');
        Route::any('/plan_status/{network_id}/{type}', [App\Http\Controllers\SuperController::class, 'update_plan_status'])->name('update_plan_status');
        Route::any('/update_data', [App\Http\Controllers\SuperController::class, 'update_data'])->name('update_data');
        Route::any('/cable_price', [App\Http\Controllers\SuperController::class, 'cable_price'])->name('cable_price');
        Route::any('/update_cable', [App\Http\Controllers\SuperController::class, 'update_cable'])->name('update_cable');
        Route::any('/block_user/{id}', [App\Http\Controllers\SuperController::class, 'block_user'])->name('block_user');
        Route::any('/upgrade_user/{id}', [App\Http\Controllers\SuperController::class, 'upgrade_user'])->name('upgrade_user');
        Route::any('/duplicate_transactions/', [App\Http\Controllers\SuperController::class, 'duplicate_transactions'])->name('duplicate_transactions');
        Route::any('/contact_gain/', [App\Http\Controllers\SuperController::class, 'contact_gain'])->name('contact_gain');
        Route::any('/downloadCSV/', [App\Http\Controllers\SuperController::class, 'downloadCSV'])->name('downloadCSV');
        Route::any('/admin_delete_duplicate/{type}/{id}', [App\Http\Controllers\SubscriptionController::class, 'admin_delete_duplicate'])->name('admin_delete_duplicate');
    });
});
// Route::get('/{slug}', [WaybillController::class, 'slug'])->name('slug')->middleware('auth');

//business domain end
//the subdomains
// Route::domain('{subdomain}.localhost')->middleware(['subdomain.auth'])->group(function () {
