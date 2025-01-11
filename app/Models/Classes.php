<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Classes extends Model
{
    use HasFactory;

    // Define the table name if it's not the plural of the model name
    protected $table = 'classes';

    // Define the fillable attributes
    protected $fillable = [
        'classcode',
        'name',
        'time',
        'duration',
        'capacity',
        'trainer_id',
        'description'
    ];

    // Define the relationship with the Trainer model (Assuming a class has one trainer)
    public function trainer()
    {
        return $this->belongsTo(Trainer::class);
    }
}
