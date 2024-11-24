<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\DB; 
class ManagerController extends Controller
{
    public function index(){
       return Inertia::render('Manager/Home');
    }

    public function pos(){
        return Inertia::render('Manager/POS');
     }
     public function ingredients(){
         // $ingredients = DB::table('ingredients')->get();
        return Inertia::render('Manager/Inventory/Ingredients', 
      //   ['ingredients' => $ingredients]
      );
     }
     public function meals(){
        return Inertia::render('Manager/Inventory/Meals');
     }
     public function procurement(){
        return Inertia::render('Manager/Inventory/Procurement');
     }
     public function delivery(){
        return Inertia::render('Manager/Inventory/Delivery');
     }
     public function return(){
        return Inertia::render('Manager/Inventory/Return');
     }
}
