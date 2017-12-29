<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
class HomeController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('home.index', compact('services'));
    }
}
