<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View; 
use App\Models\User;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
       // Share auth_user with all views if session has user_id
    View::composer('*', function ($view) {
        $user = null;

        if (session()->has('user_id')) {
            $user = User::find(session('user_id'));
        }

        $view->with('auth_user', $user);
    });
    }
}
