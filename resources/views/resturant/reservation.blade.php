@extends('layout.food_master')
@section("content")
<main>
    <section class="reservas">
        <div id="remsg" >{{ session("msg") }} </div>
        <h1 id="reservation">Reservations</h1>
        <form action="/reservation" method="POST">
            @csrf
            <input type="text" required="required" name="name" placeholder="Enter your full name">
            <input type="number" required="required" name="phone" maxlength="12" placeholder="Enter your phone number">
            <input type="date" required="required" name="date" value="2023-07-01">
            <select name="time" required="required">
                <option value="brakfast">BREAKFAST</option>
                <option value="lunch">LUNCH</option>
                <option value="dinner" selected>DINNER</option>
            </select>
            <select name="size" required="required">
                <option value="1 person">1 person</option>
                <option value="2 person">2 person</option>
                <option value="3 person" >3 person</option>
                <option value="4 person">4 person</option>
                <option value="5 person">5 person</option>
                <option value="6 person">6 person</option>
            </select>
            <input type="submit" required="required" placeholder="Enviar" class="enviar">
        </form>
    </section>  
</main>
@endsection
