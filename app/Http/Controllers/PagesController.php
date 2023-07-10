<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = "Inertia";
        return Inertia::render('Home', [
            'title' => $title,
        ]);
    }

    public function about()
    {
        $title = "About";
        return Inertia::render('About', [
            'name' => $title,
        ]);
    }
}
