<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        View::composer('/', function ($view) {
            // Masukkan logic untuk mendapatkan data $kegiatans, misalnya dari model Kegiatan
            $kegiatans = \App\Models\Kegiatan::all();

            // Kirimkan data $kegiatans ke view
            $view->with('kegiatans', $kegiatans);
        });
    }
}