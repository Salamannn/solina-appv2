<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\VisitorLog;
use Carbon\Carbon;
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
        View::composer('*', function ($view) {
            // Statistik kunjungan
            $totalVisitors = VisitorLog::count();
            $todayVisitors = VisitorLog::whereDate('visited_at', Carbon::today())->count();
            $yesterdayVisitors = VisitorLog::whereDate('visited_at', Carbon::yesterday())->count();

            // Kirim data ke semua view
            $view->with([
                'totalVisitors' => $totalVisitors,
                'todayVisitors' => $todayVisitors,
                'yesterdayVisitors' => $yesterdayVisitors,
            ]);
        });
    }
}
