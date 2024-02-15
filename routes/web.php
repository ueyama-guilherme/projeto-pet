<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'index'])->name('index');
Route::get('/list', [SiteController::class, 'list'])->name('list');
Route::get('/list/search', [SiteController::class, 'search'])->name('search');
Route::get('/details/{user}', [SiteController::class, 'details'])->name('details');

Route::middleware('guest')->group(function ()
{
    Route::get('/register', [UserController::class, 'index'])->name('admin.create');
    Route::post('/register', [UserController::class, 'store'])->name('admin.store');
    Route::get('/login', [LoginController::class, 'index'])->name('login.index');
    Route::post('/login', [LoginController::class, 'auth'])->name('login.auth');
});

Route::middleware(('auth'))->group(function ()
{
    Route::get('/admin/profile/{user}', [UserController::class, 'profile'])->name('admin.profile');
    Route::post('/admin/profile/update/{user}', [UserController::class, 'update'])->name('admin.update');
    Route::post('/admin/profile/create/image/{user}', [UserController::class, 'createImage'])->name('admin.createImage');
    Route::post('/admin/logout', [LoginController::class, 'destroy'])->name('admin.logout');
    Route::get('/admin/address/{user}', [AddressController::class, 'index'])->name('admin.address');
    Route::get('/admin/contact/{user}', [ContactController::class, 'index'])->name('admin.contact');
    Route::post('/admin/delete/{user}', [UserController::class, 'destroy'])->name('admin.destroy');
    Route::get('/admin/address/create/{user}', [AddressController::class, 'create'])->name('address.create');
    Route::post('/admin/address/create/{user}', [AddressController::class, 'store'])->name('address.store');
    Route::get('/admin/address/update/{user}', [AddressController::class, 'edit'])->name('address.edit');
    Route::put('/admin/address/update/{user}', [AddressController::class, 'update'])->name('address.update');
    Route::post('/admin/address/delete/{user}', [AddressController::class, 'destroy'])->name('address.delete');

    Route::get('/admin/contact/create/{user}', [ContactController::class, 'create'])->name('contact.create');
    Route::post('/admin/contact/create/{user}', [ContactController::class, 'store'])->name('contact.store');
    Route::get('/admin/contact/update/{user}', [ContactController::class, 'edit'])->name('contact.edit');
    Route::put('/admin/contact/update/{user}', [ContactController::class, 'update'])->name('contact.update');
    Route::post('/admin/contact/delete/{user}', [ContactController::class, 'destroy'])->name('contact.delete');
});
