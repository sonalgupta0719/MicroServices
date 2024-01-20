<?php

namespace App\Models\sms\v1;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Products extends Model
{
    use HasFactory;

    /**
     * many-to-one relationship with organization.
     */
    public function organization()
    {
        return $this->belongsTo(Organizations::class);
    }

    /**
     * Define a one-to-many relationship with Users.
     */
    public function user()
    {
        return $this->hasMany(Users::class,'product_id');
    }
    
    /**
     * Define a one-to-many relationship with SmsTemplates.
     */
    public function sms_template()
    {
        return $this->hasMany(SmsTemplates::class,'product_id');
    }
    
    /**
     * Define a one-to-many relationship with SmsDeadletters.
     */
    public function sms_deadletter()
    {
        return $this->hasMany(SmsDeadletters::class,'product_id');
    }
    
    /**
     * Define a one-to-many relationship with SmsRequests.
     */
    public function sms_request()
    {
        return $this->hasMany(SmsRequests::class,'product_id');
    }
}
