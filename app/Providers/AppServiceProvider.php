<?php

namespace App\Providers;

use App\Charts\CaseChart;
use App\Charts\StaffChart;
use App\Charts\StudentChart;
use ConsoleTVs\Charts\Registrar as Charts;
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
    public function boot(Charts $charts)
    {
        $charts->register([
            CaseChart::class,
            StudentChart::class,
            StaffChart::class
        ]);
    }
}
