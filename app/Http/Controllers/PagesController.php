<?php

namespace App\Http\Controllers;

use App\Http\Controllers\PagesController;

class PagesController extends Controller
{
    public function index()
    {
        return view ('pages.index');
    }

    public function contact()
    {
        $title = 'Reliable Support + Proven Value';
        return view ('pages.contact')->with('title',$title);
    }
}
