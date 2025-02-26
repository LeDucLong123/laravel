<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;


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
        // Thay đổi URL gốc cho các route
        URL::forceRootUrl('https://literate-bassoon-g447p5464xq53wp5-8002.app.github.dev');

        // Nếu muốn ép buộc sử dụng HTTPS cho toàn bộ ứng dụng
        if (env('APP_ENV') !== 'local') {
            URL::forceScheme('https');
        }
    }
}
