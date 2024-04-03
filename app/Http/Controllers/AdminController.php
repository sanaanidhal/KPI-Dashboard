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


class AdminController extends Controller
{

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


    

return view('admin.admin_dashboard', compact('barChartData', 'pieChartData','anneesExterne','nbresExterne','anneesMobile', 'nbresMobile'));
    }
    
    public function AdminLogout(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
    public function AdminLogin(){

        return view('admin.admin_login');
    
    }
}