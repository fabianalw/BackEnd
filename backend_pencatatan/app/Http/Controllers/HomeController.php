<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class HomeController extends Controller
{
    public function index()
    {
        if (auth::id()) {
            $usertype = Auth()->user()->usertype;

            if ($usertype == 'user') {
                return view('dashboard');
            } else if ($usertype == 'operator') {
                return view('operator.operatorhome');
            } else {
                return redirect()->back();
            }
        }
    }
    public function post()
    {
        return view("post");
    }
}
