@extends('layout.food_master')
@section("content")
<main>
    <div class="banner meats-banner"></div>
    <h1 class="title">Restaurant & Bar</h1>
    <h2 class="sub-title">Meat</h2>
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