<?php

namespace App\Providers;

use Darryldecode\Cart\Cart;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Session;

class WishListProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton('wishlist', function($app)
        {
            $SId ="88uuiioo99888";
            // if(Session::has('id')){
            //     $SId = Session::get('id');
            // }else{
            //     Session::put('id',  rand());
            //     $SId = Session::get('id');
            // }
            $storage = $app['session'];
            $events = $app['events'];
            $instanceName = 'cart_2';
            $session_key = $SId;
            return new Cart(
                $storage,
                $events,
                $instanceName,
                $session_key,
                config('shopping_cart')
            );
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
