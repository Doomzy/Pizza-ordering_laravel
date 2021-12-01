
@extends('layouts.app')
@section('content')
    <div class="relative flex items-top justify-center  bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

        <div>
            <h2 id="main-htag">Pizza List</h2>
        </div>
        <br>
     
    </div>
    <div class="myLinks">
        <a href="{{url('pizzas/create')}}">Create Pizza</a>
        @if (Auth::check())
            <a href="{{url('/')}}">Home</a>
        @endif
    </div>
    <div id="pizza-list">
        @foreach($pizzaList as $pizza)
        <div class="pizzaContainer">
            <div>
                <p><a href="pizzas/{{$pizza['id']}}">{{$pizza['name']}}</a></p>
            </div>
            <div>
                <a class="btn btn-warning" href="pizzas/update/{{$pizza['id']}}">Update</a>
                <a class="btn btn-danger" href="pizzas/delete/{{$pizza['id']}}">Delete</a>
            </div>        
        </div>
        @endforeach
    </div>

@endsection