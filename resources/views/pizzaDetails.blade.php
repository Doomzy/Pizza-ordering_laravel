
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
    <div class="pizzaDetail">
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
@endsection