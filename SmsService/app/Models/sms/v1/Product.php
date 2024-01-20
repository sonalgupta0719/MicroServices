<?php

namespace App\Models\sms\v1;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    /**
     * many-to-one relationship with organization.
     */
    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }

    /**
     * Define a one-to-many relationship with Users.
     */
    public function user()
    {
        return $this->hasMany(User::class,'product_id');
    }
    
    /**
     * Define a one-to-many relationship with SmsTemplates.
     */
    public function sms_template()
    {
        return $this->hasMany(SmsTemplate::class,'product_id');
    }
    
    /**
     * Define a one-to-many relationship with SmsDeadletters.
     */
    public function sms_deadletter()
    {
        return $this->hasMany(SmsDeadletter::class,'product_id');
    }
    
    /**
     * Define a one-to-many relationship with SmsRequests.
     */
    public function sms_request()
    {
        return $this->hasMany(SmsRequest::class,'product_id');
    }
}
