<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class POSController extends Controller
{
    public function index(){
        return Inertia::render('Manager/POS');
    }
}
