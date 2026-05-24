<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Partner;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        $events = Event::latest()->get();

        $partners = Partner::all();

        $categories = Category::all();

        return view('welcome', compact(
            'events',
            'partners',
            'categories'
        ));
    }
}