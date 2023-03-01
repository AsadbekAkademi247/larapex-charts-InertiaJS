<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use ConsoleTVs\Charts\Classes\Chartjs\Chart;

class HeatmapChart extends Chart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build()
    {
        return $this->chart->heatMapChart()
            ->setTitle('Basic radar chart')
            ->addData('Sales', [80, 50, 30, 40, 100, 20])
            ->addHeat('Income', [70, 10, 80, 20, 60, 40])
            ->setMarkers(['#FFA41B', '#4F46E5'], 7, 10)
            ->setXAxis(['January', 'February', 'March', 'April', 'May', 'June'])
            ->toVue();
    }
}
