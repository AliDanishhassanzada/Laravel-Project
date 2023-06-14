<?php

namespace App\Http\Controllers;

use App\Models\View;
use Illuminate\Http\Request;

class ViewpointController extends Controller
{
   
    public function create()
    {
        return view("resturant/viewpoint");
    }

    public function store(Request $request){
     View::create([
        "first_name" => $request->first_name,
            "last_name" => $request->last_name,
            "email" => $request->email,
            "subjec" => $request->subjec,
            "description" => $request->description
     ]);

     return redirect("/viewpoint")->with("msg","Your ViewPoint be Recived.");
    }

    public function destroy($id)
    {
        $data = View::findOrfail($id);
        $data->delete();
        return redirect("/AdminGoalzar");    
    }

}
