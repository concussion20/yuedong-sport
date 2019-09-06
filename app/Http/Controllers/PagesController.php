<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $users = ['Zhoujiping', 'Kuker Chou'];
        
        return view('about');
    }
}
