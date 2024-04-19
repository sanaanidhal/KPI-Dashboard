<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use App\Models\Project;
use App\Models\Premier;
use App\Models\Second;
use App\Models\Externe ;
use App\Models\mobile ;
use App\Models\Task ;


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
 // Fetch data for projects table
 $projects = Project::all();
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
    $lastyear=0;
    $i=-1;
    $avgEx=0;
    $rate=0;
    foreach($donneesExterne as $donneesEx){
        $sum+= $donneesEx->nbre ;
        $i+=1;
        $lastyear=$donneesEx->nbre ;
    }
    $avgEx=(($sum - $lastyear) / ($i));
    $rate= (($lastyear-$avgEx) / $avgEx) *100;
    // Return the average completion rate as a formatted string
    $avgE = number_format($rate, 2) . '%';


    $sum1 =0;
    $lastyearMo=0;
    $j=-1;
    $avgMo=0;
    $rateMo=0;
    foreach($donneesMobile as $donneesMo){
        $sum1+= $donneesMo->nbre1 ;
        $j+=1;
        $lastyearMo=$donneesMo->nbre1 ;
    }
    $avgMo=(($sum1- $lastyearMo) / ($j));
    $rateMo= (($lastyearMo-$avgMo) / $avgMo) *100;
    // Return the average completion rate as a formatted string
    $avgM = number_format($rateMo, 2) . '%';

    // Fetch all records from the premiers table using the Premier model
    $records = Premier::all();

    // Check if any records exist
    if ($records->isEmpty()) {
        return "No records found";
    }

    // Calculate the scheduled task completion rate for each record and store the results in an array
    $sumcon =0;
    $sumtotal=0;
    $values = [];
    foreach ($records as $record) {
        $scheduledTaskCompletionRate = ($record->completed_on_time / $record->total_tasks) * 100;
        $sumcon+=$record->completed_on_time;
        $sumtotal+=$record->total_tasks;
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
 $sumskill=0;
 $sumskilltotal=0;
 foreach ($records1 as $record1) {
     $SKILLPROFICIENCYLEVEL = ($record1->note / $record1->notemax) * 100;
     $sumskill+=$record1->note;
     $sumskilltotal+=$record1->notemax;
     $values1[] = $SKILLPROFICIENCYLEVEL;
 }

 // Calculate the average of the calculated values
 $average1 = array_sum($values1) / count($values1);

 // Return the average completion rate as a formatted string
 $avg1 = number_format($average1, 2) . '%';
//TASK 
$tasks = Task::all();
    

return view('dashboard', compact('sumskill','sumskilltotal','sumtotal','avgM','lastyearMo','avgE','lastyear','sumcon','tasks','projects','sum1','sum','avg1','avg','barChartData', 'pieChartData','anneesExterne','nbresExterne','anneesMobile', 'nbresMobile'));
}   

public function Redirect(){
    if(Auth::user()->role ==='admin' ){

    return redirect('admin/dashboard');
    }
    else{
        return redirect('dashboard');

    }
}
    
}
