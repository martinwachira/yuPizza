<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Http\Resources\OrderResponse;
use\App\Customer;
use\App\Order;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return OrderResponse::collection(Order::with(['user'])->latest()->get());
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
        // create new order
        try {
            \DB::beginTransaction();
            $customer = Customer::find($request->customer_id);
            $order = new Order();
            $order->user()->associate($customer);
            $order->phoneNo = $request->get('phoneNo' , $customer->phoneNo);
            $order->address = $request->get('currentAddress' , $customer->currentAddress);
            $order->total_money = 0;
            if ($order->save()) {
                $order->pizzas()->sync($request->pizzas);
                foreach ($order->pizzas as $pizza)
                    $order->total_money += $pizza->price;
                if ($order->save()) {
                    \DB::commit();
                    return response('', 200);
                }
            }
            \DB::rollBack();
            return response('', 500);
        } catch (\Exception $exception) {
            \DB::rollBack();
            return response('', 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
