<?php

namespace App\Http\Controllers;

use App\Models\Order_product;
use Illuminate\Http\Request;

class Order_ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Order_product::all();
        return view('order_product.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('order_product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = Order_product::create([
            'order_id'=> $request->order_id,
            'product_id'=>$request->product_id,
            'quantity'=>$request->quantity,
            'price'=>$request->price
        ]);
        if ($data){
            return view('order_product.index')->with('success', 'Order Product Added Successfully');
        }else{
            return redirect()->back()->with('error', 'Order Product Not Added');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
