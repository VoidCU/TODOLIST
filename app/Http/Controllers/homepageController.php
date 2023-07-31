<?php

namespace App\Http\Controllers;

use App\Models\TodoList;
use Illuminate\Http\Request;

class homepageController extends Controller
{
    
    
    // function to show the homepage

   public function index(){
        return view('welcome', [
            "Todos"=> TodoList::all()
        ]);

    }




}
