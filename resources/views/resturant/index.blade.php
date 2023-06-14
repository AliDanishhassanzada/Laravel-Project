@extends('layout.index_master')
@section("content")
<main>
    <div class="banner banner-inicio"></div>
    <h1 class="title">Restaurant & Cafe</h1>
    <div class="organizar">
        <div>
            <h1>Made With Friends. Simply Delicious</h1>
            <p>Lorem ipsum dolor sit amet, consectwetur adipiscing elit. Nunc mauris nibh, ullamcorper vitae dapibus sed, consectetur id tellus. Vestibulum dignissim accumsan nunc, vitae commodo sem maximus non. In hac habitasse.</p>
            <span><a href="{{ route("menu") }}">View Menu</a></span>
        </div>
        <img src="imgs/photo1.jpg" alt="foto número 1">
    </div>
    <div class="organizar">
        <div>
            <h1>A Flesh and Seasonal Cuisine</h1>
            <p>Lorem ipsum dolor sit amet, consectwetur adipiscing elit. Nunc mauris nibh, ullamcorper vitae dapibus sed, consectetur id tellus. Vestibulum dignissim accumsan nunc, vitae commodo sem maximus non. In hac habitasse.</p>
            <span><a href="About.pdf" download>About GoalZara</a></span>
        </div>
        <img src="imgs/photo2.jpg" alt="foto número 2">
    </div>
</main>
@endsection