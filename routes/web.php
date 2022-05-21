<?php

use Illuminate\Support\Facades\Route;


// user login 

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// require __DIR__.'/auth.php';

// // admin login 

// Route::get('/admin/welcome', function () {
//     return view('admin.welcome');
// });

// Route::get('/admin/dashboard', function () {
//     return view('admin.dashboard');
// })->middleware(['auth:admin'])->name('admin.dashboard');

// require __DIR__.'/adminauth.php';

Route::get('test', [App\Http\Controllers\TestController::class,'test']);

Route::get('user/dashboard', [App\Http\Controllers\TestController::class,'user_dashboard'])->name('user.dashboard');
Route::get('user/login', [App\Http\Controllers\TestController::class,'user_login'])->name('user.login');
Route::post('user/loginAction', [App\Http\Controllers\TestController::class,'user_loginAction'])->name('user.loginAction');
Route::get('user/logout', [App\Http\Controllers\TestController::class,'user_logout'])->name('user.logout');

Route::get('admin/dashboard', [App\Http\Controllers\TestController::class,'admin_dashboard'])->name('admin.dashboard');
Route::get('admin/login', [App\Http\Controllers\TestController::class,'admin_login'])->name('admin.login');
Route::post('admin/loginAction', [App\Http\Controllers\TestController::class,'admin_loginAction'])->name('admin.loginAction');
Route::get('admin/logout', [App\Http\Controllers\TestController::class,'admin_logout'])->name('admin.logout');


Route::get('corporate/dashboard', [App\Http\Controllers\TestController::class,'corporate_dashboard'])->name('corporate.dashboard');
Route::get('corporate/login', [App\Http\Controllers\TestController::class,'corporate_login'])->name('corporate.login');
Route::post('corporate/loginAction', [App\Http\Controllers\TestController::class,'corporate_loginAction'])->name('corporate.loginAction');
Route::get('corporate/logout', [App\Http\Controllers\TestController::class,'corporate_logout'])->name('corporate.logout');




