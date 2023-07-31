<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homepageController extends Controller
{
    
    
    // function to show the homepage

   public function index(){
        return view('welcome', [
            'title' => 'Todo List',
            'description' => 'This is a simple todo list app made with Laravel',
            'author' => 'Rafael',
            'date' => '2021-03-01'
        ]);

    }




}
