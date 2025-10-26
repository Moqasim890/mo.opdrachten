<?php

use Illuminate\Support\Facades\Route;
use Illuminate\View\View;
use App\Models\Job;


// Home
Route::get('/', function ()
{
 return view('welcome');
});


// Jobs
Route::get('/jobs', function (): View {
    return view('jobs', ['jobs' => Job::all()]);
});

// Contact      
Route::view('/contact', 'contact')->name('contact');
