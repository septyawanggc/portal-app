<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\pompadosing;
use Illuminate\Support\Facades\DB;

class PompaDosingChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        $label = pompadosing::select('Tanggal')->pluck('Tanggal')->toArray();
        $data = pompadosing::select('Stroke')->pluck('Stroke')->toArray();
        return $this->chart->barChart()
        ->setTitle('Suhu Pompa Dosing')
        ->addData('PompaDosing',$data)
        ->setXAxis($label);
    }
}
