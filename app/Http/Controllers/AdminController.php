<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use App\Models\Premier;
use App\Models\Project;
use App\Models\Second;
use App\Models\Externe ;
use App\Models\Mobile ;
use App\Models\Task ;




class AdminController extends Controller
{

    public function EditTasks(Task $task){
        $tasks = Task::all();
        return view('admin.edit.edit_tasks', compact('tasks','task'));
    }
    public function UpdateTasks(Request $request, $id)
    {
       $task = Task::find($id);
       $task->title = $request->input('title');
       $task->description = $request->input('description');
       $task->priority = $request->input('priority');
       $task->date = $request->input('date');
       $task->duration = $request->input('duration');

       $task->save();
    
       return redirect()->back()->with('success', 'Data updated successfully');
       
    }
    public function EditProjects(Project $project){
        $projects = Project::all();
        return view('admin.edit.edit_projects', compact('projects','project'));
    }
    public function UpdateProjects(Request $request, $id)
    {
       $project = Project::find($id);
       $project->name = $request->input('name');
       $project->date = $request->input('date');
       $project->pole = $request->input('pole');
       $project->type = $request->input('type');
       $project->save();
    
       return redirect()->back()->with('success', 'Data updated successfully');
       
    }
    
    public function EditBarChart(Premier $premier){
        $premiers = Premier::all();
        return view('admin.edit.edit_barchart', compact('premiers','premier'));
    }
    public function UpdateBarChart(Request $request, $id)
    {
       $premier = Premier::find($id);
       $premier->completed_on_time = $request->input('completed_on_time');
       $premier->total_tasks = $request->input('total_tasks');
       $premier->save();
    
       return redirect()->back()->with('success', 'Data updated successfully');
       
    }

    public function EditPieChart(Second $second){
        $seconds = Second::all();
        return view('admin.edit.edit_piechart', compact('seconds','second'));
    }
    public function UpdatePieChart(Request $request, $id)
    {
       $second = Second::find($id);

       $second->note = $request->input('note');
       $second->notemax = $request->input('notemax');

       $second->save();
    
       return redirect()->back()->with('success', 'Data updated successfully');
       
    }
    public function EditMobile (Mobile $mobile){
        $mobiles = Mobile::all();
        return view('admin.edit.edit_mobile', compact('mobiles','mobile'));
    }
    public function UpdateMobile(Request $request, $année0)
    {
       $mobile= Mobile::find($année0);

       $mobile->nbre1= $request->input('nbre1');

       $mobile->save();
    
       return redirect()->back()->with('success', 'Data updated successfully');
       
    }
    public function EditExterne(Externe $externe){
        $externes = Externe::all();
        return view('admin.edit.edit_externe', compact('externes','externe'));
    }
    public function UpdateExterne(Request $request, $année)
    {
       $externe= Externe::find($année);

       $externe->nbre= $request->input('nbre');

       $externe->save();
    
       return redirect()->back()->with('success', 'Data updated successfully');
       
    }



    public function AdminDashboard(){

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
        $sum1+= $donneesMo->nbre1;
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
    $values = [];
    foreach ($records as $record) {
        $scheduledTaskCompletionRate = ($record->completed_on_time / $record->total_tasks) * 100;
        $sumcon+=$record->completed_on_time;
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
 //TASK 
 $tasks = Task::all();

return view('admin.admin_dashboard', compact('avgM','lastyearMo','avgE','lastyear','sumcon','tasks','projects','sum1','sum','avg1','avg','barChartData', 'pieChartData','anneesExterne','nbresExterne','anneesMobile', 'nbresMobile'));
    }
    
    public function AdminLogout(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
    public function AdminLogin(){

        return view('admin.admin_login2');
    
    }
}
