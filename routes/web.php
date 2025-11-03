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

    return view('jobs', ['jobs' => Job::with('employer')->simplePaginate(3)]);
});

// Contact      
Route::view('/contact', 'contact')->name('contact');
