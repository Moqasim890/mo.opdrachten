<?php

use Illuminate\Support\Facades\Route;
use Illuminate\View\View;
use App\Models\Job;


// Home
Route::view('/', 'welcome')->name('home');



// Jobs
Route::get('/jobs', function (): View {

    $jobs = Job::all();
    


    return view('jobs', compact('jobs'));
})->name('jobs');

// Contact      
Route::view('/contact', 'contact')->name('contact');
