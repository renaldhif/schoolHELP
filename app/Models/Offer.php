<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function requestData() {
        return $this->belongsTo(RequestData::class,'request_id');
    }
}
