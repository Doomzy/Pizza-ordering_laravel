
@extends('layouts.app')
@section('content')
    <div class="relative flex items-top justify-center  bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

        <div>
            <h2 id="main-htag">Pizza Details</h2>
        </div>
        <br>
     
    </div>
    <div class="myLinks">
            @if (Auth::check())
                <a href="/pizzas">Pizzas List</a>
            @endif
            <a href="/">Home</a>
        </div>
    <div style="display:flex;justify-content: space-between;">
        <div class="pizzaDetail">
            <h2>Your Pizza details </h2>
            <p>Name : {{$pizzaDetails[0]['name']}}   </p>
            <p> 
                Type : {{$pizzaDetails[0]['type']}} 
            </p>
            <p>
                Base : {{$pizzaDetails[0]['base']}} 
            </p> 
            <p>Pizza Toppings : 
                <ul>
                    @foreach($pizzaDetails[0]['toppings'] as $topping)
                        <li>{{$topping}}</li>
                    @endforeach
                </ul>
            </p>
        </div>
        <form class="sForm" action="{{$pizzaDetails[0]['id']}}" method="post">
            <h2>Update your Pizza details :</h2>
            @csrf
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" value="{{$pizzaDetails[0]['name']}}" required>
            <label for="type">Choose a Pizza type:</label>
            <select name="pizzaType" id="pizzaType" required>
                <option value="Margrita">Margrita</option>
                <option value="Hawaiian">hawaiian</option>
                <option value="Veg Supreme">Veg Supreme</option>
                <option value="Volcano">Volcano</option>
            </select>
            <label for="type">Choose a Base type:</label>
            <select name="pizzaBase" id="pizzaBase" required>
                <option value="Cheesy Crust">Cheesy Crust</option>
                <option value="Garlic Crust">Garlic Crust</option>
                <option value="Thin & Crispy">Thin & Crispy</option>
                <option value="Thick">Thick</option>
            </select>
            <label>Choose your toopings:</label>
            <input type="checkbox" name="pizzaToppings[]" value="olive">Olive <br>
            <input type="checkbox" name="pizzaToppings[]" value="garlic">Garlic <br>
            <input type="checkbox" name="pizzaToppings[]" value="ketchep">Ketchep <br>
            <input type="checkbox" name="pizzaToppings[]" value="pinapple">Pinapple <br>

            <button type="submit">Update</button>
        </form>
        
    </div>
    
@endsection