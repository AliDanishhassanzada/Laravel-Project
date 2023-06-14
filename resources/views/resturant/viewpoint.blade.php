@extends('layout.food_master')
@section("content")
<main>
  
    <div class="banner banner-contact"></div>
    <div id="vimsg">{{ session("msg") }}</div>
    <h1 class="title">Restaurant & Cafe</h1>
    <h2 class="sub-title">ViewPoint</h2>
   

    <form id="contact" action="/viewpoint" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="first_name" placeholder="First Name" required="required">
        <input type="text" name="last_name" placeholder="Last Name" required="required">
        <input type="email" name="email" placeholder="Email *" required="required">
        <input type="text" name="subjec" placeholder="Subject" required="required">
        <textarea  required="required" name="description" placeholder=" Description ..." cols="50" rows="10"></textarea>
        <input type="submit" class="enviar">
        
    </form>
</main>
@endsection