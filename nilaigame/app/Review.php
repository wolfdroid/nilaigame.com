<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    // Table name
    protected $table = 'reviews';
    // Primary Key
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps = true;
}
