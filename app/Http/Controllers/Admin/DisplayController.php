<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Carbon\Carbon;
use Session;
use Hash;
use DB;

class DisplayController extends Controller
{
    public function login(){
        return view('admin.auth.login');
    }
    public function index(){
        return redirect()->route("admin.sponsor.index");
    }
    public function statistic(){
        return view('admin.manager.statistic');
    }
}
