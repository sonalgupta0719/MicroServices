<?php
namespace App\Adapters;
// use App\Contracts\SmsVendorInterface;

use App\Services\SmsService;

// class TwoFactorAdapter implements SmsVendorInterface

class TwoFactorAdapter extends SmsService
{
    public function sendSms($phoneNumber, $message)
    {
        // Implement TwoFactor specific logic to send SMS
        // ...

        return "TwoFactor: Message sent to $phoneNumber - $message";
    }
}