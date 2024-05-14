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




    // products and inventory routes

    Route::get('/product-group', function () {
        return view('products_inventory.product-group');
    })->name('product-group');

    Route::get('/create-product', function () {
        return view('products_inventory.create');
    })->name('create-product');

    Route::get('/products-list', function () {
        return view('products_inventory.products-list');
    })->name('products-list');

    Route::get('/godown', function () {
        return view('products_inventory.godown');
    })->name('godown');

    Route::get('/godown-details', function () {
        return view('products_inventory.godown-details');
        })->name('godown-details');


});
