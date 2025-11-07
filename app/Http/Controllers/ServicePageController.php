<?php

namespace App\Http\Controllers;

use App\Models\ServicePage;
use Illuminate\Http\Request;

class ServicePageController extends Controller
{
    public function show(ServicePage $servicePage)
    {
        return view('service_pages.show', compact('servicePage'));
    }
}
