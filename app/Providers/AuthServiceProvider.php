<?php

namespace App\Providers;

use Hyn\Tenancy\Environment;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        view()->share('mauro', 'hola mao');
        $hostname = app(Environment::class)->hostname();
        if ($hostname){
            view()->share('currentWebsiteIncentivadora', $hostname->website);
        }else{
            view()->share('currentWebsiteIncentivadora', null);
        }
        if ($hostname){
            view()->share('currentWebsiteRedentora', $hostname->website);
        }else{
            view()->share('currentWebsiteRedentora', null);
        }
    }
}
