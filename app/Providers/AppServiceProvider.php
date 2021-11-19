<?php

namespace App\Providers;

use App\Http\Controllers\NewsletterController;
use App\Models\User;
use App\Services\MailchimpNewsletter;
use App\Services\Newsletter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use MailchimpMarketing\ApiClient;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */

    public function register()
    {
        app()->bind(Newsletter::class,function(){
            $client = (new ApiClient)->setConfig([
                'apiKey' => config('services.mailchimp.key'),
                'server' => 'us20'
            ]);

           return new MailchimpNewsletter($client);
        });
    }

//    public function register()
//    {
//        app()->bind(MailchimpNewsletter::class,function(){
//          return new MailchimpNewsletter(
//              new ApiClient(),
//              'foobar'
//          );
//        });
//    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
      Model::unguard();

      Gate::define('admin',function (User $user){
          return $user->username == 'yiksoon';
      });

      Blade::if('admin',function(){
          return request()->user()->can('admin') ? :null ;  //'? null' to check the user is admin or not and put the null behind
      });
    }
}
