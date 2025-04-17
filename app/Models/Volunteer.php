<?php

namespace App\Models;
use MongoDB\Laravel\Eloquent\Model as Eloquent; // ✅ Correct namespace


class Volunteer extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'volunteers';

    protected $fillable = [
        'name',
        'skills',
        'location',
        'profile_link',
        'email', // ✅ Add email here

    ];
}
