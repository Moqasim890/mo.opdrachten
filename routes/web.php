<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome', [
        'title' => [
            [
            'name' => 'Larry Robot',
            'age' => 5,
            'color' => 'blue',
        ],
        [
            'name' => 'Mo',
            'age' => 7,
            'color' => 'red',


        ],        [
            'name' => 'Herd',
            'age' => 1,
            'color' => 'green',
        ],
    ],
    ]);
});

Route:: get('about', function () {
    return view('about');
})->name('about');

route::get('contact', function () {
    return view('contact');
})->name('terms');



Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
