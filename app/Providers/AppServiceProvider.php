<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Gate::define('admin', function (User $user){
            return $user->role === 'admin';
        });

        Gate::define('writer', function(User $user){
            return $user->role === 'writer';
        });

        Gate::define('anggota', function(User $user){
            return $user->role === 'anggota';
        });
    }
}
