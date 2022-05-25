<?php

namespace App\Providers;

use App\Events\ChatMessageCreated;
use App\Models\ChatMessage;
use App\Observers\ChatMessageObserver;
use App\Observers\ChatObserver;
use Illuminate\Support\Facades\Log;
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
        ChatMessage::observe(ChatMessageObserver::class);
        // ChatMessage::observe(ChatObserver::class);
    }
}
