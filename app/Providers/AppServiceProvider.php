<?php

namespace App\Providers;

use A17\Twill\Facades\TwillAppSettings;
use A17\Twill\Facades\TwillNavigation;
use A17\Twill\Services\Settings\SettingsGroup;
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

        TwillNavigation::addLink(
            NavigationLink::make()->forModule('designs')
        );

        TwillNavigation::addLink(
            NavigationLink::make()->forModule('sculptures')
        );

        TwillNavigation::addLink(
            NavigationLink::make()->forModule('pages')
        );

//        Navigation for settings

        TwillAppSettings::registerSettingsGroup(
            SettingsGroup::make()->name('setting')->label('Settings')
        );

        TwillAppSettings::registerSettingsGroup(
            SettingsGroup::make()->name('home')->label('Homepage')
        );

        TwillAppSettings::registerSettingsGroup(
            SettingsGroup::make()->name('architecture')->label('Architecture')
        );

        TwillAppSettings::registerSettingsGroup(
            SettingsGroup::make()->name('art')->label('Art')
        );

        TwillAppSettings::registerSettingsGroup(
            SettingsGroup::make()->name('art-2020')->label('Art 2020s')
        );

        TwillAppSettings::registerSettingsGroup(
            SettingsGroup::make()->name('art-2010')->label('Art 2010s')
        );

        TwillAppSettings::registerSettingsGroup(
            SettingsGroup::make()->name('art-2000')->label('Art 2000s')
        );

        TwillAppSettings::registerSettingsGroup(
            SettingsGroup::make()->name('art-1990')->label('Art 1990s')
        );

        TwillAppSettings::registerSettingsGroup(
            SettingsGroup::make()->name('art-1980')->label('Art 1980s')
        );

        TwillAppSettings::registerSettingsGroup(
            SettingsGroup::make()->name('news')->label('News')
        );

        TwillAppSettings::registerSettingsGroup(
            SettingsGroup::make()->name('design')->label('Design')
        );

        TwillAppSettings::registerSettingsGroup(
            SettingsGroup::make()->name('sculpture')->label('Sculpture')
        );
    }
}
