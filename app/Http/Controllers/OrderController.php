<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use Error;
use Exception;

class OrderController extends Controller
{
    public function create(){
        return view("resturant/reservation");
    }
    
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'date' => 'required',
            'time' => 'required',
            'size' => 'required',
        ]);
             
        Reservation::create([
            "name" => $request->name,
            "phone" => $request->phone,
            "date" => $request->date,
            "time" => $request->time,
            "size" => $request->size
        ]); 
        return redirect("/reservation")->with("msg","Your Order be Recived.");

    }

    public function destroy($id){
        $data = Reservation::findOrfail($id);
        $data->delete();
        return redirect("/AdminGoalzar");   
    }
}
