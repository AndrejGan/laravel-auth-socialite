<?php

use App\Http\Controllers\AuthSocialiteController;
use Illuminate\Support\Facades\Route;

//public route
Route::get('/', \App\Livewire\Index::class)->name('index');

// Authentication route
Route::middleware('guest')->controller(AuthSocialiteController::class)->group(function () {
    Route::get('/auth/vk', 'vk')->name('vk');
    Route::get('/auth/vk/callback', 'vkCallback');

    Route::get('/auth/ok', 'ok')->name('ok');
    Route::get('/auth/ok/callback', 'okCallback');

    Route::get('/auth/mailru', 'mailru')->name('mailru');
    Route::get('/auth/mailru/callback', 'mailruCallback');

    Route::get('/auth/yandex', 'yandex')->name('yandex');
    Route::get('/auth/yandex/callback', 'yandexCallback');
});

// Authorization route
Route::post('/auth/logout', [AuthSocialiteController::class, 'logout'])->name('logout')->middleware('auth');

// Authorization route for user
Route::middleware(['user-access:user'])->group(function () {

});

// Authorization route for admin
Route::middleware(['user-access:admin'])->group(function () {
    Route::get('/dashboard', \App\Livewire\Dashboard\Index::class)->name('dashboard.index');
    Route::get('/dashboard/users', \App\Livewire\Dashboard\Users::class)->name('dashboard.users');
    Route::get('/dashboard/users/{id}', \App\Livewire\Dashboard\Users\ShowOne::class)->name('dashboard.users.one');
});

