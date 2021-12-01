
@extends('layouts.app')
@section('content')
    <div class="relative flex items-top justify-center  bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

        <div>
            <h2 id="main-htag">Create a New Pizza</h2>
        </div>
        <br>
     
    </div>
    <div class="myLinks">
        @if (Auth::check())
            <a href="/pizzas">Pizzas List</a>
        @endif
        <a href="/">Home</a>
    </div>
    
    <div id="pizza-list">
        <form class="sForm" action="" method="post">
            @csrf
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name">
            <label for="type">Pizza type:</label>
            <select name="pizzaType" id="pizzaType">
                <option value="Margrita">Margrita</option>
                <option value="Hawaiian">hawaiian</option>
                <option value="Veg Supreme">Veg Supreme</option>
                <option value="Volcano">Volcano</option>
            </select>
            <label for="type">Base :</label>
            <select name="pizzaBase" id="pizzaBase">
                <option value="Cheesy Crust">Cheesy Crust</option>
                <option value="Garlic Crust">Garlic Crust</option>
                <option value="Thin & Crispy">Thin & Crispy</option>
                <option value="Thick">Thick</option>
            </select>
            <label>toopings:</label>
            <div class="checkContainer">
                <input type="checkbox" name="pizzaToppings[]" value="olive">Olive
            </div>
            <div class="checkContainer">
                <input type="checkbox" name="pizzaToppings[]" value="garlic">Garlic
            </div>
            <div class="checkContainer">
                <input type="checkbox" name="pizzaToppings[]" value="ketchep">Ketchep
            </div>
            <div class="checkContainer">
                <input type="checkbox" name="pizzaToppings[]" value="pinapple">Pinapple
            </div>
            <button type="submit">Create</button>
        </form>
    </div>

@endsection