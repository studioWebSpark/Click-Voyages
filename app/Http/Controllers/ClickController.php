<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ClickController extends Controller
{
    public function index()
    {
        return Inertia::render('Admin/Clicks');
    }
}
