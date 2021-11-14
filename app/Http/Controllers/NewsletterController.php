<?php

namespace App\Http\Controllers;


use App\Services\Newsletter;
use App\Services\MailchimpNewsletter;
use Exception;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    //new Newsletter
    public function __invoke(Newsletter $newsletter)        //request interface
    {
        request()->validate(['email' => 'required|email']);
            ddd($newsletter);
        try{
            $newsletter->subscribe(request('email'));

        }catch (Exception $e){
            throw ValidationException::withMessages([
                'email'=> 'This email could not be added in our newsletter list.'
            ]);
        }
        return redirect('/')
            ->with('success','You are now signed up for our newsletter!');
    }
}
