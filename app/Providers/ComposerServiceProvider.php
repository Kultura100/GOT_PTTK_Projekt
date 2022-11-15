<?php

namespace App\Providers;

use App\Models\Powiadomienie;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    public function boot()
    {
        View::composer(['dashboard','osiagniecia','odznaki','ranking','wycieczki','szlak'], function ($view) {
            $powiadomienie = Powiadomienie::where('id_turysta', Auth::user()->id)->get();
            $view->with(compact('powiadomienie'));
        });
    }
}
