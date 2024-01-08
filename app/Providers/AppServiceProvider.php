<?php

namespace App\Providers;

use A17\Twill\Facades\TwillNavigation;
use A17\Twill\View\Components\Navigation\NavigationLink;
use Illuminate\Support\ServiceProvider;

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
        TwillNavigation::addLink(
            NavigationLink::make()->forModule('architectures')
        );
        TwillNavigation::addLink(
            NavigationLink::make()->forModule('news')
        );
        TwillNavigation::addLink(
            NavigationLink::make()->forModule('art')
        );
    }
}
