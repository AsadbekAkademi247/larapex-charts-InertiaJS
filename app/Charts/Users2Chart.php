<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use ConsoleTVs\Charts\Classes\Chartjs\Chart;

class Users2Chart extends Chart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build()
    {
        return $this->chart->lineChart()
            ->setTitle('Monthly Users')
            ->addLine('Active users', \App\Models\User::query()->inRandomOrder()->limit(6)->pluck('id')->toArray())
            ->addLine('Inactive users', \App\Models\User::query()->inRandomOrder()->limit(6)->pluck('id')->toArray())
            ->setXAxis(['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'])
            ->setColors(['#ffc63b', '#ff6384'])
            ->toVue();
    }
}
