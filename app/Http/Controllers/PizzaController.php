<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function index(){
        $pizzaList= Pizza::all();
        return view('pizzas',['pizzaList'=>$pizzaList]);
    }

    public function create(){
        return view('pizzaCreate');
    }

    public function add(){
        $newPizza= new Pizza;
        $newPizza->name=request('name');
        $newPizza->type= request('pizzaType');
        $newPizza->base=request('pizzaBase');
        $newPizza->toppings=request('pizzaToppings');
        $newPizza->save();
        return redirect('/pizzas');
    }

    public function delete($id){
        $deletePizza= Pizza::where('id',$id)->delete();
        return redirect('/pizzas');
    }

    public function updateView($id){
        $pizzaDetails= Pizza::where('id',$id)->get();
        return view('Pizzaupdate',['pizzaDetails'=>$pizzaDetails]);
    }

    public function update($id){
        Pizza::where('id',$id)->update([
            'name'=> request('name'),
            'type'=> request('pizzaType'),
            'base'=>request('pizzaBase'),
            'toppings'=>request('pizzaToppings')
        ]);
        return redirect('/pizzas');
    }

    public function details($id){
        $pizzaDetails= Pizza::where('id',$id)->get();
        return view('pizzaDetails',['pizzaDetails'=>$pizzaDetails]);
    }
}
