<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use App\Models\Premier;
use App\Models\Second;

class AdminController extends Controller
{
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

        return view('admin.admin_dashboard', compact('barChartData', 'pieChartData'));
    }
    
    public function AdminLogout(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
    
 
}

