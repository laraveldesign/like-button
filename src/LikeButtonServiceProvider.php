<?php

namespace Laraveldesign\LikeButton;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class LikeButtonServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'like-button');
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        Livewire::component('like-button::like-button', \Laraveldesign\LikeButton\Livewire\LikeButton::class);

        if ($this->app->runningInConsole()) {

            $this->publishes([
                __DIR__ . '/../resources/views' => $this->app->resourcePath('views/vendor/like-button'),
            ], 'like-button:views');

        }
    }

}
