<?php

use Illuminate\Support\Facades\Route;
use Illuminate\View\View;

// Home
Route::view('/', 'welcome')->name('home');

// Jobs
Route::get('/jobs', function (): View {
    $jobs = [
        ['id' => 1, 'name' => 'Larry Robot', 'age' => 5, 'color' => 'blue'],
        ['id' => 2, 'name' => 'Mo',          'age' => 7, 'color' => 'red'],
        ['id' => 3, 'name' => 'Herd',        'age' => 1, 'color' => 'green'],
    ];

    return view('jobs', compact('jobs'));
})->name('jobs');

// Contact
Route::view('/contact', 'contact')->name('contact');
