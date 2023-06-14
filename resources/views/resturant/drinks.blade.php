@extends('layout.food_master')
@section("content")
<main>
    <div class="banner drinks-banner"></div>
    <h1 class="title">Restaurant & Cafe</h1>
    <h2 class="sub-title">Drinks</h2>
    <div class="borders">
       
        @foreach ($data as $item)
        <article>
            <p>{{ $item->name}}</p>
            <span>{{ $item->price}},00 Agh</span>
        </article>
    @endforeach
        
    </div>
</main>
@endsection