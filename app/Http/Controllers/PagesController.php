<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about() {
        return view('about');
    }

    public function service()
    {
        $services = ['design', 'develop', 'test'];
        return view('services')->with('services', $services);
    }
}
