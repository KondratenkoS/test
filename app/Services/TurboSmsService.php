<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class TurboSmsService
{
    protected string $url;
    protected string $login;
    protected string $password;
    protected string $sender;

    public function __construct()
    {
        $this->url = 'https://api.turbosms.ua/message/send.json';
        $this->login = config('services.turbosms.login');
        $this->password = config('services.turbosms.password');
        $this->sender = config('services.turbosms.sender');
    }

    public function send(string $phone, string $message):void
    {
        Http::withBasicAuth($this->login, $this->password)
            ->post($this->url, [
                'recipient' => [$phone],
                'sms' => [
                    'sender' => $this->sender,
                    'message' => $message,
                ],
            ]);
    }
}
