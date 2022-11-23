<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function school()
    {
        return $this->belongsTo(School::class);
    }

    protected $fillable = [
        'request_date',
        'description',
        'proposed_date',
        'student_level',
        'student_number',
        'resource_category',
        'resource_quantity',
    ];
}

