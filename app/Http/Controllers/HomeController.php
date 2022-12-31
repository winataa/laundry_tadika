<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function redirect(){
        $usertype=Auth::user()->usertype;

        if ($usertype=='1'){
            return view('admin.home');
        }else{
            return view('dashboard');
        }
    
    }
    // if ($usertype=='1'){
    //     return view('admin.dashboard.dashboard');
    // }else{
    //     return view('user.home.profile');
    // }

}
