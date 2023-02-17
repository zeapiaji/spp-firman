<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Mail\Mailables\Content;

class DashboardController extends Controller
{
    public function index()
    {
        $title = "Dashboard";
        return view('content.dashboard.index', compact('title'));
    }
}