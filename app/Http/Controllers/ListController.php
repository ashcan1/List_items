<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\fruit;

class ListController extends Controller
{
    function show()
    {
        $data = fruit::all()->sortBy('menu_items_label');
   
        return view('list', ['fruit' => $data ]);
    }
    function edit($id) {
        $data =  fruit::find($id);
        return view('edit',['data' => $data]);
    }
    function update(Request $req){
        $data=fruit::find($req->id);
        $data->menu_items_label=$req->name;
        $data->menu_items_children_label=$req->children;
        $data->menu_items_children_children_label=$req->children;
        $data->save();
        return redirect('list');


    

}

}



