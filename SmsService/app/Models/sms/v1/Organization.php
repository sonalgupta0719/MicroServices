<?php

namespace App\Models\sms\v1;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Organization extends Model
{
    use HasFactory;

    // TODO rename all the relation functions to related tables - done 
    //name all snake case - done 
    //remove HasMany - done
    // make all relation functions to singulars - done
    //add comments for all functions - done
    // hasmanythrough functions

    
    /**
     * Define a one-to-many relationship with products.
     */
    public function product()
    {
        return $this->hasMany(Product::class,'organization_id');
    }

    /**
     * Define a one-to-many relationship with users.
     */
    public function user()
    {
        return $this->hasMany(User::class,'organization_id');
    }
    
    /**
     * Define a one-to-many relationship with SmsTemplates.
     */
    public function sms_template()
    {
        return $this->hasMany(SmsTemplate::class);
    }
    
    /**
     * Define a one-to-many relationship with SmsSenders.
     */
    public function sms_sender()
    {
        return $this->hasMany(SmsSender::class);
    }
    
    /**
     * Define a one-to-many relationship with SmsRequests.
     */
    public function sms_request()
    {
        return $this->hasMany(SmsRequest::class);
    }
}
