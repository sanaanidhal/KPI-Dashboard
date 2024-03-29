<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;


class AdminController extends Controller
{
    public function AdminDashboard(){

        return view('admin.admin_dashboard');
    }
    
    public function AdminLogout(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
    public function url(LoginRequest $request) : RedirectResponse
    {

        $request->authenticate();

        $request->session()->regenerate();

        $url = '';
        if($request->user()->role === 'admin'){
            $url = '/admin/dashboard';
        } elseif($request->user()->role === 'user'){
            $url ='/dashboard';

        }

        return redirect()->intended($url);

    }
 
}

