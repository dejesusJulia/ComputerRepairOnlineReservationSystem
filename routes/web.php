<?php

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProductCategoryController;

use Illuminate\Support\Facades\Route;


Route::get('/', 'HomeController@index');

// User
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth', 'check_status', 'check_if_user'); // temporary

// Cart
Route::group(['prefix' => '/cart', 'middleware' => 'auth'] , function(){
    Route::get('/', 'CartController@index')->name('cart.index');
    Route::get('/count', 'CartController@count');
    Route::get('/checkout', 'ReservationController@checkout')->name('reserve.checkout');
});

Route::get('/services', 'ClientServiceController@index')->name('servicefees');

Route::get('/store', 'ClientStoreController@index')->name('user.store');

Route::get('about', function(){
    return view('user.about');
})->name('about');
Route::get('contacts', function(){
    return view('user.contact');
})->name('contacts');

Route::get('profile', function(){
    // TEMPORARY
    return view('user.profile');
})->name('user.profile')->middleware('auth', 'check_status', 'check_if_user');



Route::get('/reservations', 'ReservationController@index')->name('user.reservations')->middleware('auth', 'check_status', 'check_if_user');
Route::get('/reservations/{transaction_id}', 'ReservationController@show')->name('user.reservations.show')->middleware('auth', 'check_status', 'check_if_user');

Route::get('/reservation/create', function(){
    // TEMPORARY
    return view('user.reservations.create');
})->name('user.create')->middleware('auth', 'check_status', 'check_if_user');

// Route::get('/reservation/edit', function(){
//     // TEMPORARY
//     return view('user.reservations.edit');
// })->name('user.edit')->middleware('auth', 'check_status', 'check_if_user');


// Admin
Route::group(['prefix' => '/admin'], function () {
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    //Temporary
    // Route::get('categories', function () {
    //     return view('admin.categories.index');
    // })->name('categories.index')->middleware('auth', 'check_status', 'check_if_admin');

    Route::resource('categories', 'ProductCategoryController');
    Route::resource('xcategory_services', 'ServiceCategoryController');
    Route::resource('products', 'ProductController');
    Route::resource('services', 'ServiceController');
    Route::resource('users', 'AdminUserController');
    Route::resource('reservations', 'AdminReservationController');


    // Route::get('products', function(){
    //     return view('admin.products.index');
    // })->name('products.index')->middleware('auth', 'check_status', 'check_if_admin');

    // Route::get('products/create', function(){
    //     return view('admin.products.create');
    // })->name('products.create')->middleware('auth', 'check_status', 'check_if_admin');

    // Route::get('products/edit', function(){
    //     return view('admin.products.edit');
    // })->name('products.edit')->middleware('auth', 'check_status', 'check_if_admin');

    // Route::get('reservations', function(){
    //     return view('admin.reservations.index');
    // })->name('reservations.index')->middleware('auth', 'check_status', 'check_if_admin');

    // Route::get('printing', function(){
    //     return view('admin.printing.index');
    // })->name('printing.index')->middleware('auth', 'check_status', 'check_if_admin');

    // Route::get('printing/create', function(){
    //     return view('admin.printing.create');
    // })->name('printing.create')->middleware('auth', 'check_status', 'check_if_admin');

    // Route::get('printing/edit', function(){
    //     return view('admin.printing.edit');
    // })->name('printing.edit')->middleware('auth', 'check_status', 'check_if_admin');

    // Route::get('users', function(){
    //     return view('admin.users.index');
    // })->name('users.index')->middleware('auth', 'check_status', 'check_if_admin');

    // Route::get('users/view', function(){
    //     return view('admin.users.view');
    // })->name('users.view')->middleware('auth', 'check_status', 'check_if_admin');

});



Auth::routes();

// TEMPORARY
Route::get('error-401', function(){
    return view('errors._401');
  });
Route::get('error-403', function(){
  return view('errors._403');
});
Route::get('error-404', function(){
    return view('errors._404');
  });
Route::get('error-500', function(){
   return view('errors._500');
});
Route::get('error-502', function(){
    return view('errors._502');
});
Route::get('error-503', function(){
    return view('errors._503');
});
Route::get('error-504', function(){
    return view('errors._504');
});
