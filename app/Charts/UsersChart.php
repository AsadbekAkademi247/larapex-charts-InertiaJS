<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use ConsoleTVs\Charts\Classes\Chartjs\Chart;

class UsersChart extends Chart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build()
    {
        return $this->chart->pieChart()
            ->setTitle('Monthly Users')
            ->addData([
                \App\Models\User::where('id', '<=', 60)->count(),
                \App\Models\User::where('id', '>', 60)->count()
            ])
            ->setColors(['#ffc63b', '#ff6384'])
            ->setLabels(['Active users', 'Inactive users'])
            ->toVue();
    }
}
