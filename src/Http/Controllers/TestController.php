<?php

namespace Khapu\LaravelCurd\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function index(){
        
        return view('Khapu::index');
    }
}
