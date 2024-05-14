<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::get('/', function (){

    return view('home');
});

Route::get('/jobs', function () {
    $jobs = Job::with('employer')->simplePaginate(3);

    return view('jobs', [
            'jobs' => $jobs
//        "greeting" => "President",  // Allows you to access a variable called $greeting
//        "name" => "Titan"
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    //dd($id);
    $job = Job::find($id);

//    dd($job);

    return view('job', ['job' => $job]);
});

Route::get('/contact', function (){
    return view('contact');
});
