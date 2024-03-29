<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Second;


class Chart2Controller extends Controller
{
    public function pieChart()
    {
       $seconds = Second::all();
       $html=0;
       $htmlcount=0;
       $laravel=0;
       $laravelcount=0;
       $php=0;
       $phpcount=0;
       $css=0;
       $csscount=0;

foreach($seconds as $second ){
    if ($second->competence ==='HTML') {
        $htmlcount++;
    $html=$html+$second->note;
};
if ($second->competence === 'CSS') {
    $csscount++;
$css=$css+$second->note;
};
if ($second->competence === 'PHP') {
    $phpcount++;
$php=$php+$second->note;
};
if ($second->competence ==='Laravel') {
    $laravelcount++;
$laravel=$laravel+$second->note;
};

}

$html=$html*100/($htmlcount*20);
$css=$css*100/($csscount*20);
$php=$php*100/($phpcount*20);
$laravel=$laravel*100/($laravelcount*20);
   

    
        $data = [
            'labels' =>['HTML', 'CSS', 'PHP', 'Laravel']
        ,
            'data' => [$html,$css,$php,$laravel],
        ];
        return view('pie-chart', compact('data'));
    }
}
