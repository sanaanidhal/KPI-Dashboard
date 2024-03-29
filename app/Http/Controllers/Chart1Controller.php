<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Premier;

class Chart1Controller extends Controller
{
    public function barChart()
    {
        $premiers = Premier::all();
foreach($premiers as $premier ){
    $labels[]=$premier->month;
    $con=$premier->completed_on_time;
    $tot=$premier->total_tasks;
$data1[]=$con*100/$tot;}
    
        
        $data = [
            'labels' => $labels
        ,
            'data' => $data1,
        ];
        return view('bar-chart', compact('data'));
    }
}
