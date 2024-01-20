<?php

namespace App\Models\sms\v1;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Users extends Model
{
    use HasFactory;

    /**
     * many-to-one relationship with Organizations.
     */
    public function organization()
    {
        return $this->belongsTo(Organizations::class);
    }

    /**
     * many-to-one relationship with Products.
     */
    public function product()
    {
        return $this->belongsTo(Products::class);
    }
}
