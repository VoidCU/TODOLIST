<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\TodoList;

class saveController extends Controller
{
    //

    public function saveItem(Request $request){

        
        $list = new TodoList();
        $list->title = $request->title;
        $list->description = $request->description;
        $list->status = "pending";
        $list->save();



        return redirect('/');

    }

}
