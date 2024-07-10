<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view("frontend.index");
    }

    public function projects()
    {
        return view("frontend.projects");
    }

    public function about_us()
    {
        return view("frontend.about");
    }

    public function contacts()
    {
        return view("frontend.contact");
    }
}
