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

    return view('job.index', ['jobs' => Job::with('employer')->latest()->simplePaginate(3)]);
});



Route::get('/jobs/create', function (): View {
    return view('job.create');
});
// Store new job

Route::post('/jobs', function () {
        job::create([
             'title' => request('title'),
             'salary' => request('salary'),
             'employer_id' => 1,
        ]);

        return redirect('/jobs');
});









// Contact
Route::view('/contact', 'contact')->name('contact');
