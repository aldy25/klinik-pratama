<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
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
        Gate::define('dashboard', function(User $user){
            return ($user->level_id === 1 or $user->level_id === 2);
        });

        Gate::define('owner', function(User $user){
            return $user->level_id === 1;
        });

        Gate::define('admin', function(User $user){
            return $user->level_id === 2;
        });

        Gate::define('dokter', function(User $user){
            return $user->level_id === 3;
        });

        Gate::define('apoteker', function(User $user){
            return $user->level_id === 4;
        });
    }
}
