<?php

namespace App\Providers;

use App\Services\DateCheck;
use Illuminate\Support\ServiceProvider;

class DateCheckServiceProvider extends ServiceProvider {

    public function register() {
        $this->app->bind('dateCheck', DateCheck::class);
    }

}
