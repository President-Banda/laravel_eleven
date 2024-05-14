<?php

namespace App\Models;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model{
    use HasFactory;

    protected $table = "job_listings";

    //protected $fillable = ['title', 'salary', 'description', 'employer_id'];

    //disable fillable feature by using guarded, empty effectively disables it
    protected $guarded = [];

    public function employer(){
        return $this->belongsTo(Employer::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class, foreignPivotKey: "job_listings_id");
    }
}


