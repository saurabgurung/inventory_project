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

        $data = Orders::with(['products'])->get();
        return view('orders.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = Products::select('product_name', 'rate', 'id', 'quantity_in_stock')->get();

        return view('orders.create', compact('products'));

    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $products = Products::findOrFail($request->product_id);

        if ($products->quantity_in_stock < $request->quantity) {
            return redirect()->back()->with('error', 'Not enough stock available for this product.');
        }


        $products->quantity_in_stock -= $request->quantity;
        $products->save();

        $data = Orders::create([
                'order_date' => $request->order_date,
                'client_name' => $request->client_name,
                'client_contact' => $request->client_contact,
                'product_id' => $request->product_id,
                'total_amount' => $request->total_amount,
                'quantity' => $request->quantity,
                'payment_type' => $request->payment_type,
                'payment_status' => $request->payment_status
            ]);
                return redirect()->route('orders.index')->with('success', 'order created successfully');



    }
    // select product from request and subtract its quantity in stock


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
        $orders=Orders::find($request->id);
        $orders->update([
            'order_date' => $request->order_date,
            'client_name' => $request->client_name,
            'client_contact' => $request->client_contact,
            'payment_type' => $request->payment_type,
            'payment_status' => $request->payment_status
        ]);
        return redirect()->route('orders.index')->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $orders=Orders::findOrFail($id);
        $orders->delete();
        return redirect()->route('orders.index')->with('success','Product deleted successfully');
    }
}
