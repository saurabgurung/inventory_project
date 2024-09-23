<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use App\Models\Categories;
use App\Models\Products;
use App\Models\ReorderStock;
use Illuminate\Http\Request;

class ReorderStockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

//        $products = Products::all()->pluck('product_name', 'id');
//        // Pass both 'categories' and 'brands' to the view
//        return view('reorder_stock.index', compact('products'));

        $data = ReorderStock::with(['Product'])->get();;
        return view('reorder_stock.index',compact('data'));
//
//        $data= ReorderStock::all();
//        return view('reorder_stock.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
