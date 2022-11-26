<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResourceCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_name',
    ];

    public function requests()
    {
        return $this->hasMany(RequestData::class);
    }
}