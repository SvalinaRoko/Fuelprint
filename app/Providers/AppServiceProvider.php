<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
        //
    }
}

// protected function prepareForValidation()
// {
//     $this->merge([
//         'name' => trim($this->name),
//         'surname' => trim($this->surname),
//         'email' => trim($this->email),
//     ]);
// }