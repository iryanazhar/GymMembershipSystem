<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trainers extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'expertise', 'image_url', 'facebook', 'twitter', 'youtube', 'instagram', 'email'];
}
