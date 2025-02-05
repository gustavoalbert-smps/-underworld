<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ConversionController extends Controller
{
    public function index(): View
    {
        return view('processed.conversions.index');
    }
}
