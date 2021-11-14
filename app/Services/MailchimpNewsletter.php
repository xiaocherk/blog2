<?php

namespace App\Services;

use MailchimpMarketing\ApiClient;
use App\Services\Newsletter;


//new Newsletter(new ApiClient);

class MailchimpNewsletter implements Newsletter
{
   public $client;

    public function __construct(ApiClient $client)     //if error add the protected in front of the ApiClient and foo
    {
        $this->client= $client;
    }

    public function subscribe(string $email, string $list = null)
    {
        $list = config('services.mailchimp.lists.subscribers') ?? '';     //if the list is null, it will pass it to the config


        return $this->client->lists->addListMember($list, [
            'email_address' => $email,
            'status' => 'subscribed'
        ]);
    }



}
