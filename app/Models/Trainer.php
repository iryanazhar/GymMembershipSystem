<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    use HasFactory;

    // Define the table name if it's not the plural of the model name
    protected $table = 'trainers';

    // Define the fillable attributes
    protected $fillable = [
        'name',
        'expertise',
        'availability'
    ];

    // Define the relationship with the Class model
    public function classes()
    {
        return $this->hasMany(Classes::class);
    }
}
