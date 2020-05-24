<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\PizzaResource;
use App\Pizza;

class PizzaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return PizzaResource::collection(Pizza::all());
        // return response (new PizzaResource($pizza), 200);
        // $pizzas = Pizza::all();
        // return $pizzas;

        $pizzas = Pizza::all();
        return response()->json($pizzas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     "name" => "required|min:3|max:50",
        //     "description" => "nullable|max:200",
        //     "price" => "required|numeric"
        // ]);
        // \DB::beginTransaction();

        // $pizza = new Pizza();
        // $pizza->fill($request->all());
        // $pizza->save();

        // return new PizzaResource($pizza);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Pizza $pizza)
    {
        return response (new PizzaResource($pizza), 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
