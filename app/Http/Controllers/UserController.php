<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use App\Models\Premier;
use App\Models\Second;
use App\Models\Externe ;
use App\Models\mobile ;

class UserController extends Controller
{
    //
    public function Dashboard(){

        // Fetch data for bar chart
$premiers = Premier::all();
foreach ($premiers as $premier) {
    $labels[] = $premier->month;
    $con = $premier->completed_on_time;
    $tot = $premier->total_tasks;
    $data1[] = $con * 100 / $tot;
}

$barChartData = [
    'labels' => $labels,
    'data' => $data1,
];

// Fetch data for pie chart
$seconds = Second::all();
$html = 0;
$htmlcount = 0;
$laravel = 0;
$laravelcount = 0;
$php = 0;
$phpcount = 0;
$css = 0;
$csscount = 0;

foreach ($seconds as $second) {
    if ($second->competence === 'HTML') {
        $htmlcount++;
        $html = $html + $second->note;
    }
    if ($second->competence === 'CSS') {
        $csscount++;
        $css = $css + $second->note;
    }
    if ($second->competence === 'PHP') {
        $phpcount++;
        $php = $php + $second->note;
    }
    if ($second->competence === 'Laravel') {
        $laravelcount++;
        $laravel = $laravel + $second->note;
    }
}

$html = $html * 100 / ($htmlcount * 20);
$css = $css * 100 / ($csscount * 20);
$php = $php * 100 / ($phpcount * 20);
$laravel = $laravel * 100 / ($laravelcount * 20);

$pieChartData = [
    'labels' => ['HTML', 'CSS', 'PHP', 'Laravel'],
    'data' => [$html, $css, $php, $laravel],
];

$donneesExterne = Externe::all();
    $donneesMobile = Mobile::all();
    
    $anneesExterne = $donneesExterne->pluck('année')->toArray();
    $nbresExterne = $donneesExterne->pluck('nbre')->toArray();
    $anneesMobile = $donneesMobile->pluck('année0')->toArray();
    $nbresMobile = $donneesMobile->pluck('nbre1')->toArray();
    $sum =0;
    foreach($donneesExterne as $donneesEx){
        $sum+= $donneesEx->nbre ;
    }
    $sum1 =0;
    foreach($donneesMobile as $donneesMo){
        $sum1+= $donneesMo->nbre1 ;
    }

    // Fetch all records from the premiers table using the Premier model
    $records = Premier::all();

    // Check if any records exist
    if ($records->isEmpty()) {
        return "No records found";
    }

    // Calculate the scheduled task completion rate for each record and store the results in an array
    $values = [];
    foreach ($records as $record) {
        $scheduledTaskCompletionRate = ($record->completed_on_time / $record->total_tasks) * 100;
        $values[] = $scheduledTaskCompletionRate;
    }

    // Calculate the average of the calculated values
    $average = array_sum($values) / count($values);

    // Return the average completion rate as a formatted string
    $avg = number_format($average, 2) . '%';

 // Fetch all records from the premiers table using the Premier model
 $records1 = Second::all();

 // Check if any records exist
 if ($records1->isEmpty()) {
     return "No records found";
 }

 // Calculate the scheduled task completion rate for each record and store the results in an array
 $values1 = [];
 foreach ($records1 as $record1) {
     $SKILLPROFICIENCYLEVEL = ($record1->note / $record1->notemax) * 100;
     $values1[] = $SKILLPROFICIENCYLEVEL;
 }

 // Calculate the average of the calculated values
 $average1 = array_sum($values1) / count($values1);

 // Return the average completion rate as a formatted string
 $avg1 = number_format($average1, 2) . '%';

    

return view('dashboard', compact('sum1','sum','avg1','avg','barChartData', 'pieChartData','anneesExterne','nbresExterne','anneesMobile', 'nbresMobile'));
}   
    
}
