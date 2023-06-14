<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\appetizer;
use App\Models\barbecue;
use App\Models\dessert;
use App\Models\drink;
use App\Models\fish;
use App\Models\meat;
use App\Models\special_meat;

class ResturantController extends Controller
{
    public function index(){
        return view("resturant/index");
    }

    public function menu(){
        return view("resturant/menu");
    }
    
    public function appetizers(){
        $data = appetizer::all();
        return view("/resturant/appetizers",["data" => $data]);
    }

    public function barbecues(){
        $data = barbecue::all();
        return view("/resturant/barbecues",["data" => $data]);
    }

    public function desserts(){
        $data = dessert::all();
        return view("/resturant/desserts",["data" => $data]);
    }

    public function drinks(){
        $data = drink::all();
        return view("/resturant/drinks",["data" => $data]);
    }

    public function fish(){
        $data = fish::all();
        return view("/resturant/fish",["data" => $data]);
    }

    public function meats(){
        $data = meat::all();
        return view("/resturant/meat",["data" => $data]);
    }

    public function special_meats(){
        $data = special_meat::all();
        return view("/resturant/special_meats",["data" => $data]);
    }

    // functions add new elementa
    public function addAppetizer(Request $request){
        appetizer::create([
            "name" => $request->name,
            "price" => $request->price,       
        ]); 
        return redirect("/AdminResturanr");
    }    
    public function addBarbecuse(Request $request){
        barbecue::create([
            "name" => $request->name,
            "price" => $request->price, 
        ]); 
        return redirect("/AdminResturanr");
    }
    public function addDessert(Request $request){
        dessert::create([
            "name" => $request->name,
            "price" => $request->price,
        ]); 
        return redirect("/AdminResturanr");  
    }
    public function addDrink(Request $request){
        drink::create([
            "name" => $request->name,
            "price" => $request->price,     
        ]); 
        return redirect("/AdminResturanr");    
    }
    public function addFish(Request $request){
        fish::create([
            "name" => $request->name,
            "price" => $request->price,      
        ]); 
        return redirect("/AdminResturanr");   
    }
    public function addMeat(Request $request){
        meat::create([
            "name" => $request->name,
            "price" => $request->price,      
        ]); 
        return redirect("/AdminResturanr");   
    }
    public function addSpeial_Meat(Request $request){
        special_meat::create([
            "name" => $request->name,
            "price" => $request->price,       
        ]); 
        return redirect("/AdminResturanr");   
    } 
}
