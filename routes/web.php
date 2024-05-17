<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::get('/', function (){

    return view('home');
});

Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->simplePaginate(3);

    return view('jobs.index', [
            'jobs' => $jobs
//        "greeting" => "President",  // Allows you to access a variable called $greeting
//        "name" => "Titan"
    ]);
});


Route::get('jobs/create', function () {
    //dd('hello there');
    return view('jobs.create');
});

Route::get('/jobs/{id}', function ($id) {
    //dd($id);
    $job = Job::find($id);

//    dd($job);

    return view('jobs.show', ['job' => $job]);
});

Route::post('/jobs', function () {
    //dd(request('title'));
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required'],
        'description' => ['required'],
    ]);

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'description' => request('description'),
        'employer_id' => 1
    ]);

    return redirect('/jobs');
});

Route::get('/contact', function (){
    return view('contact');
});


