<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// User
Route::get('/home', 'HomeController@index')->name('home')->middleware('check_status', 'check_if_user'); // temporary

Route::get('service-fees', function(){
    return view('user.service-fees');
})->name('servicefees');
Route::get('about', function(){
    return view('user.about');
})->name('about');
Route::get('profile', function(){
    // TEMPORARY
    return view('user.profile');
})->name('user.profile')->middleware('auth', 'check_status', 'check_if_user');
Route::get('store', function(){
    // TEMPORARY
    return view('user.store');
})->name('user.store');

Route::get('/reservation/create', function(){
    // TEMPORARY
    return view('user.reservations.create');
})->name('user.create')->middleware('auth', 'check_status', 'check_if_user');

Route::get('/reservation/edit', function(){
    // TEMPORARY
    return view('user.reservations.edit');
})->name('user.edit')->middleware('auth', 'check_status', 'check_if_user');


// Admin
Route::group(['prefix' => '/admin'], function () {
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard')->middleware('auth', 'check_status', 'check_if_admin');
    //Temporary
    Route::get('categories', function () {
        return view('admin.categories.index');
    })->name('categories.index')->middleware('auth', 'check_status', 'check_if_admin');

    Route::get('products', function(){
        return view('admin.products.index');
    })->name('products.index')->middleware('auth', 'check_status', 'check_if_admin');

    Route::get('products/create', function(){
        return view('admin.products.create');
    })->name('products.create')->middleware('auth', 'check_status', 'check_if_admin');

    Route::get('products/edit', function(){
        return view('admin.products.edit');
    })->name('products.edit')->middleware('auth', 'check_status', 'check_if_admin');

    Route::get('users', function(){
        return view('admin.users.index');
    })->name('users.index')->middleware('auth', 'check_status', 'check_if_admin');

    Route::get('users/view', function(){
        return view('admin.users.view');
    })->name('users.view')->middleware('auth', 'check_status', 'check_if_admin');
});



Auth::routes();
