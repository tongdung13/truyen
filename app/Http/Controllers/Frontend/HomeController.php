<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ListStory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $listNames = ListStory::all();
        return view('frontend.home', compact('listNames'));
    }

}
