@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center ">
        <div class="col-md-12 ">
            <div class="card">
               <div class="font-size-20"> <div class="card-header p-3 pt-2 text-center" >{{ __('Admin Panel') }}</div></div>
                    <div class="container-fluid border p-3 mt-4">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="p-3 pt-7 text-center ">Reservations</h3>
                                <div class="container">
                                    <table id="mytable" class="table table-bordered table-striped ">
                                        <thead  class="text-center">
                                            <th>Number</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Time</th>
                                            <th>Party Size</th>  
                                            <div class="p-1 pt-1"><th >Delete</th></div>
                                        </thead>
                                        <tbody>
                                        @foreach($reservations as $reservation) 
                                            <tr class="text-center">
                                                <td>
                                                        {{ $numberreservation++ }}
                                                </td>
                                                <td>
                                                         {{ $reservation->name }}
                                                </td>
                                                <td>
                                                         {{ $reservation->phone }}
                                                </td>
                                                <td>        
                                                        {{ $reservation->time }}

                                                </td>
                                                <td>
                                                    {{ $reservation->size }}
                                                </td>
                                           <td class="text-center ">
                                            <form action="/reservation/{{ $reservation->id}}" method="post" >
                                                @csrf
                                                @method("DELETE")
                                                {{-- <input type="submit" value="DELETE" > --}}
                                                <button class="btn btn-danger">Delete</button>
                                            </form>
                                           </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table> 
                                    {{$reservations->links()}} 
                                              
                                </div>
                            </div>
                             
                             {{-- ViewPoint  --}}
                             <div class="col-md-12">
                                <h3 class="p-3 pt-7 text-center ">ViewPoints</h3>
                                <div class="container-fluid m">
                                    <table id="mytable" class="table table-bordered table-striped ">
                                        <thead  class="text-center">
                                            <th>Number</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Subject</th>
                                            <th>Description</th>  
                                            <div class="p-1 pt-1"><th class="">Delete</th></div>
                                        </thead>
                                        <tbody>
                                        @foreach($viewpoints as $viewpoint) 
                                        
                                            <tr class="text-center">
                                                <td>
                                                        {{ $numberviewpoint++ }}
                                                </td>
                                                <td>
                                                    {{ $viewpoint->first_name }} {{ " " }} {{ $viewpoint->last_name }}
                                                </td>
                                                <td>
                                                    {{ $viewpoint->email }}
                                                </td>
                                                <td>
                                                    {{ $viewpoint->subjec }}
                                                </td>
                                                <td>
                                                    {{ $viewpoint->description }}
                                                </td>
                                           <td class="text-center ">
                                            <form action="/viewpoint/{{ $viewpoint->id}}" method="post" >
                                                @csrf
                                                @method("DELETE")
                                                {{-- <input type="submit" value="DELETE" > --}}
                                                <button class="btn btn-danger">Delete</button>
                                            </form>
                                           </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{$viewpoints->links()}} 
                                </div>
                                {{-- start --}}
                                <h3 class="p-3 pt-7 text-center ">Add new element into Appetizer menu.</h3>
                                <div>
                                    <form action='/addAppetizer' method="post" class="p-3 pt-7 text-center ">
                                        @csrf
                                        <label for="name">Name</label>    <input type="text" name="name" class="p-2 pt-2">                          
                                        <label for="price">Price</label>    <input type="number" name="price" class="p-2 pt-2">       
                                        <input type="submit" value="Add" class="btn btn-success  p-2 pt-2 col-sm-4" >
                                    </form>
                                </div>
                                <h3 class="p-3 pt-7 text-center ">Add new element into Barbecuse menu.</h3>
                                <div>
                                    <form action='/addBarbecuse' method="post" class="p-3 pt-7 text-center ">
                                        @csrf
                                        <label for="name">Name</label>    <input type="text" name="name" class="p-2 pt-2">                          
                                        <label for="price">Price</label>    <input type="number" name="price" class="p-2 pt-2">       
                                        <input type="submit" value="Add" class="btn btn-success  p-2 pt-2 col-sm-4" >
                                    </form>
                                </div>
                                <h3 class="p-3 pt-7 text-center ">Add new element into Dessert menu.</h3>
                                <div>
                                    <form action='/addDessert' method="post" class="p-3 pt-7 text-center ">
                                        @csrf
                                        <label for="name">Name</label>    <input type="text" name="name" class="p-2 pt-2">                          
                                        <label for="price">Price</label>    <input type="number" name="price" class="p-2 pt-2">       
                                        <input type="submit" value="Add" class="btn btn-success  p-2 pt-2 col-sm-4" >
                                    </form>
                                </div>
                                <h3 class="p-3 pt-7 text-center ">Add new element into Drink menu.</h3>
                                <div>
                                    <form action='/addDrink' method="post" class="p-3 pt-7 text-center ">
                                        @csrf
                                        <label for="name">Name</label>    <input type="text" name="name" class="p-2 pt-2">                          
                                        <label for="price">Price</label>    <input type="number" name="price" class="p-2 pt-2">       
                                        <input type="submit" value="Add" class="btn btn-success  p-2 pt-2 col-sm-4" >
                                    </form>
                                </div>
                                <h3 class="p-3 pt-7 text-center ">Add new element into Fish menu.</h3>
                                <div>
                                    <form action='/addFish' method="post" class="p-3 pt-7 text-center ">
                                        @csrf
                                        <label for="name">Name</label>    <input type="text" name="name" class="p-2 pt-2">                          
                                        <label for="price">Price</label>    <input type="number" name="price" class="p-2 pt-2">       
                                        <input type="submit" value="Add" class="btn btn-success  p-2 pt-2 col-sm-4" >
                                    </form>
                                </div>
                                <h3 class="p-3 pt-7 text-center ">Add new element into Meat menu.</h3>
                                <div>
                                    <form action='/addMeat' method="post" class="p-3 pt-7 text-center ">
                                        @csrf
                                        <label for="name">Name</label>    <input type="text" name="name" class="p-2 pt-2">                          
                                        <label for="price">Price</label>    <input type="number" name="price" class="p-2 pt-2">       
                                        <input type="submit" value="Add" class="btn btn-success  p-2 pt-2 col-sm-4" >
                                    </form>
                                </div>
                                <h3 class="p-3 pt-7 text-center ">Add new element into Speial_Meat menu.</h3>
                                <div>
                                    <form action='/addMeat' method="post" class="p-3 pt-7 text-center ">
                                        @csrf
                                        <label for="name">Name</label>    <input type="text" name="name" class="p-2 pt-2">                          
                                        <label for="price">Price</label>    <input type="number" name="price" class="p-2 pt-2">       
                                        <input type="submit" value="Add" class="btn btn-success  p-2 pt-2 col-sm-4" >
                                    </form>
                                </div>
                                {{-- end --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
