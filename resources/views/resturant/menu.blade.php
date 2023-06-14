@extends('layout.food_master')
@section("content")
<main>
    <div class="banner banner-menu"></div>
    <h1 class="title">Restaurant & Cafe</h1>
    <h2 class="sub-title">Filter menu by type of dish:</h2>
    <div class="categories">
        <a href="{{ route("appetizers") }}">
            <div class="category0">
                <span>Appetizers</span>
            </div>
        </a>
        <a href="{{ route("special_meats") }}">
            <div class="category2">
                <span>Special meats</span>
            </div>
        </a>
        <a href="{{ route("barbecues") }}">
            <div class="category3">
                <span>Barbecue</span>
            </div>
        </a>
        <a href="{{ route("fish") }}">
            <div class="category4">
                <span>Fish</span>
            </div>
        </a>
        <a href="{{ route("meats") }}">
            <div class="category5">
                <span>Meat</span>
            </div>
        </a>
        <a href="{{ route("desserts") }}">
            <div class="category6">
                <span>Desserts</span>
            </div>
        </a>
        <a href="{{ route("drinks") }}">
            <div class="category7">
                <span>Drinks</span>
            </div>
        </a>
    </div>
</main>
@endsection