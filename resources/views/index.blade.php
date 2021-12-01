
@extends('layouts.app')
@section('content')
    <div class="relative flex items-top justify-center bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

        <div>
            <h2 id="main-htag">Pizza House</h2>
        </div>
    </div>
    <div class="myLinks">
        <a href="{{url('pizzas/create')}}">Create Pizza</a>
        @if (Auth::check())
            <a href="{{url('pizzas')}}">Pizza Orders</a>
        @endif
    </div>
@endsection