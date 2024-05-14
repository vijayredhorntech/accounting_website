<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Posts;

Route::get('posts', Posts::class)->middleware('auth');

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {


    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');




    // customers and vendors routes

    Route::get('/create-customer-vendor', function () {
        return view('customers_vendors.create');
    })->name('create-customer-vendor');

    Route::get('/customers', function () {
        return view('customers_vendors.customers');
    })->name('customers');

    Route::get('/vendors', function () {
        return view('customers_vendors.vendors');
    })->name('vendors');

    Route::get('/details', function () {
        return view('customers_vendors.details');
    })->name('customer-vendor-details');


});
