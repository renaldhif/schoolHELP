<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestData extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'school_id',
        'request_date',
        'description',
        'proposed_date',
        'student_level',
        'student_number',
        'resource_category',
        'resource_quantity',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function school()
    {
        return $this->belongsTo(School::class);
    }

    public function studentLevel()
    {
        return $this->belongsTo(StudentLevel::class);
    }

    public function resourceCategory()
    {
        return $this->belongsTo(ResourceCategory::class);
    }
}