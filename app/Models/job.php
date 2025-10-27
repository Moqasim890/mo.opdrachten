<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Job extends Model {
    protected $table = 'jobs_listings';
    use HasFactory;

    protected $fillable = ['title', 'salary'];

}