<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AsistenController extends Controller
{
    public function index(){
        return view('dataasisten');
    }
}