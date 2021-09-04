<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $topBar   = 'dashboard';
        return view('site.index', compact('topBar'));
    }

}
