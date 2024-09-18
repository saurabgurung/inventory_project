<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Orders;
use App\Models\Products;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Orders::all();
        return view('orders.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = Products::all()->pluck('product_name','rate', 'id');
        return view('orders.create', compact('products'));

    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $data = Products::create([
                'order_date' => $request->order_date,
                'client_name' => $request->client_name,
                'client_contact' => $request->client_contact,
                'product_id' => $request->product_id,
                'total_amount' => $request->total_amount,
                'quantity' => $request->quantity,
                'payment_type' => $request->payment_type,
                'payment_status' => $request->payment_status
            ]);
            if ($data) {
                return redirect()->route('orders.index')->with('success', 'order created successfully');
            }
        }  catch (\Exception $exception){
            dd($exception->getMessage());

    }}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $orders=Orders::find($id);
        return view('orders.edit',compact('orders'));
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
