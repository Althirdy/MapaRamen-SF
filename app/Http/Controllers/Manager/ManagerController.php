<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ManagerController extends Controller
{
    public function index(){
       return Inertia::render('Manager/Home');
    }

    public function pos(){
        return Inertia::render('Manager/POS');
     }
}
