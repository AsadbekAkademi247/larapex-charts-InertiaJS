<?php

use App\Charts\AreaChart;
use App\Charts\BarChart;
use App\Charts\ChangeChartColorsDynamicallyChart;
use App\Charts\CustomizeChartGridChart;
use App\Charts\CustomizeChartMarkersChart;
use App\Charts\CustomizeFontsChart;
use App\Charts\DonutChart;
use App\Charts\HeatmapChart;
use App\Charts\HorizontalBarChart;
use App\Charts\LineChart;
use App\Charts\MonthlyUsersChart;
use App\Charts\PolarAreaChart;
use App\Charts\RadarChart;
use App\Charts\RadialBarChart;
use App\Charts\SetDataLabelsChart;
use App\Charts\SetSparklineChart;
use App\Charts\Users2Chart;
use App\Charts\UsersChart;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function (MonthlyUsersChart $chart) {
        return Inertia::render('Dashboard',['chart' => $chart->build()]);
    })->name('dashboard');

    Route::get('/donut', function (DonutChart $chart) {
        return Inertia::render('Dashboard',['chart' => $chart->build()]);
    })->name('donut');

    Route::get('/radial-bar', function (RadialBarChart $chart) {
        return Inertia::render('Dashboard',['chart' => $chart->build()]);
    })->name('radial-bar');


    Route::get('/polar-area', function (PolarAreaChart $chart) {
        return Inertia::render('Dashboard',['chart' => $chart->build()]);
    })->name('polar-area');


    Route::get('/line', function (LineChart $chart) {
        return Inertia::render('Dashboard',['chart' => $chart->build()]);
    })->name('line');

    Route::get('/area', function (AreaChart $chart) {
        return Inertia::render('Dashboard',['chart' => $chart->build()]);
    })->name('area');

    Route::get('/bar', function (BarChart $chart) {
        return Inertia::render('Dashboard',['chart' => $chart->build()]);
    })->name('bar');

    Route::get('/horizontal_bar', function (HorizontalBarChart $chart) {
        return Inertia::render('Dashboard',['chart' => $chart->build()]);
    })->name('horizontal_bar');

    Route::get('/heatmap', function (HeatmapChart $chart) {
        return Inertia::render('Dashboard',['chart' => $chart->build()]);
    })->name('heatmap');

    Route::get('/radar-chart', function (RadarChart $chart) {
        return Inertia::render('Dashboard',['chart' => $chart->build()]);
    })->name('radar-chart');

    Route::get('/change-chart-colors-dynamically', function (ChangeChartColorsDynamicallyChart $chart) {
        return Inertia::render('Dashboard',['chart' => $chart->build()]);
    })->name('change-chart-colors-dynamically');

    Route::get('/customize-fonts', function (CustomizeFontsChart $chart) {
        return Inertia::render('Dashboard',['chart' => $chart->build()]);
    })->name('customize-fonts');

    Route::get('/customize-chart-grid', function (CustomizeChartGridChart $chart) {
        return Inertia::render('Dashboard',['chart' => $chart->build()]);
    })->name('customize-chart-grid');

    Route::get('/customize-chart-markers', function (CustomizeChartMarkersChart $chart) {
        return Inertia::render('Dashboard',['chart' => $chart->build()]);
    })->name('customize-chart-markers');

    Route::get('/set-data-labels', function (SetDataLabelsChart $chart) {
        return Inertia::render('Dashboard',['chart' => $chart->build()]);
    })->name('set-data-labels');

    Route::get('/set-sparkline', function (SetSparklineChart $chart) {
        return Inertia::render('Dashboard',['chart' => $chart->build()]);
    })->name('set-sparkline');

    Route::get('/users', function (UsersChart $chart) {
        return Inertia::render('Dashboard',['chart' => $chart->build()]);
    })->name('users');
    Route::get('/users2', function (Users2Chart $chart) {
        return Inertia::render('Dashboard',['chart' => $chart->build()]);
    })->name('users2');
});
