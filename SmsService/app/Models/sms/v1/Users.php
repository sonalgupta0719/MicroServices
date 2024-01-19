<?php

namespace App\Models\sms\v1;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Users extends Model
{
    use HasFactory;

    public function Organizations()
    {
        return $this->belongsTo(Organizations::class);
    }

    public function Products()
    {
        return $this->belongsTo(Products::class);
    }
}
