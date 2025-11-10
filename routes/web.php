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


// Create job form

Route::get('/jobs/create', function (): View {
    return view('job.create');
});

//store new job
Route::post('/jobs', function () {
       request()->validate([
           'title' => 'required|min:3|max:255',  // minimum 3, maximum 255 characters
           'salary' => 'required|numeric|min:0',
       ]);


        job::create([
             'title' => request('title'),
             'salary' => request('salary'),
             'employer_id' => 1,
        ]);

        return redirect('/jobs');
});


// Edit job form - MUST have {job} parameter
Route::get('/jobs/{job}/edit', function (App\Models\Job $job    ): View {
    return view('job.edit', ['job' => $job]);
})->name('jobs.edit');


// Update job and now lets use patch
Route::patch('/jobs/{job}', function (App\Models\Job $job) {
    request()->validate([
        'title' => 'required|min:3|max:255',  // minimum 3, maximum 255 characters
        'salary' => 'required|numeric|min:0',
    ]);
    
    
    $job->update([
        'title' => request('title'),
        'salary' => request('salary'),
    ]);

    return redirect('/jobs');
});

//delete job
Route::delete('/jobs/{job}', function (App\Models\Job $job) {
    $job->delete();
    return redirect('/jobs');
});






// Contact
Route::view('/contact', 'contact')->name('contact');
