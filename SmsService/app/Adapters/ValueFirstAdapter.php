<?php
namespace App\Adapters;
// use App\Contracts\SmsVendorInterface;

use App\Services\SmsService;

// class ValueFirstAdapter implements SmsVendorInterface
class ValueFirstAdapter extends SmsService
{
    public function sendSms($phoneNumber, $message)
    {
        // Implement TwoFactor specific logic to send SMS
        // ...

        return "ValueFirst: Message sent to $phoneNumber - $message";
    }
}