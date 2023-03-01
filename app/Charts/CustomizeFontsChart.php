<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use ConsoleTVs\Charts\Classes\Chartjs\Chart;

class CustomizeFontsChart extends Chart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build()
    {
        return $this->chart->lineChart()
            ->setTitle('Sales during 2021.')
            ->setSubtitle('Physical sales vs Digital sales.')
            ->addData('Published posts', [4, 9, 5, 2, 1, 8])
            ->addData('Unpublished posts', [7, 2, 7, 2, 5, 4])
            ->setColors(['#ffc63b', '#ff6384'])
            ->setXAxis(['January', 'February', 'March', 'April', 'May', 'June'])
            ->setFontFamily('DM Sans')
            ->toVue();
    }
}
