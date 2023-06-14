<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ResturantController;
use App\Http\Controllers\ViewpointController;
use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Facades\Route;

Route::prefix("/goalzar")->group(function(){
    // Routes common
    Route::get("/",[ResturantController::class,"index"])->name("index");
    Route::get("/appetizers",[ResturantController::class,"appetizers"])->name("appetizers");
    Route::get("/barbecues",[ResturantController::class,"barbecues"])->name("barbecues");
    Route::get("/desserts",[ResturantController::class,"desserts"])->name("desserts");
    Route::get("/drinks",[ResturantController::class,"drinks"])->name("drinks");
    Route::get("/fish",[ResturantController::class,"fish"])->name("fish");
    Route::get("/meats",[ResturantController::class,"meats"])->name("meats");
    Route::get("/special_meats",[ResturantController::class,"special_meats"])->name("special_meats");
    // Route menu
    Route::get("/menu",[ResturantController::class,"menu"])->name("menu"); 
});

// Routes ViewPoint
Route::get("/viewpoint",[ViewpointController::class,"create"])->name("view.create");
Route::post("/viewpoint",[ViewpointController::class,"store"])->name("view.store");
Route::delete("/viewpoint/{id}",[ViewpointController::class,"destroy"]);

// Routes Reservation
Route::get("/reservation",[OrderController::class,"create"])->name("reservation.craete");
Route::post("/reservation",[OrderController::class,"store"])->name("reservation.store");
Route::delete("/reservation/{id}",[OrderController::class,"destroy"]);

// Add new Elements
Route::post("/addAppetizer",[ResturantController::class,"addAppetizer"]);
Route::post("/addBarbecuse",[ResturantController::class,"addBarbecuse"]);
Route::post("/addDessert",[ResturantController::class,"addDessert"]);
Route::post("/addDrink",[ResturantController::class,"addDrink"]);
Route::post("/addFish",[ResturantController::class,"addFish"]);
Route::post("/addMeat",[ResturantController::class,"addMeat"]);
Route::post("/addSpeial_Meat",[ResturantController::class,"addSpeial_Meat"]);



 
Auth::routes();
Route::get('/AdminGoalzar', [App\Http\Controllers\HomeController::class, 'index'])
->name('home');

