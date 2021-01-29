<?php

namespace MONDO_PIECE\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use MONDO_PIECE\Http\ViewComposers\UserComposer;

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

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composers([
            UserComposer::class    => 'layouts.*'
        ]);
    }
}
