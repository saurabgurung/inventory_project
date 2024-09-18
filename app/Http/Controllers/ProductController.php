<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductStoreRequest;
use App\Models\Brands;
use App\Models\Categories;
use App\Models\Products;
//use App\Models\Suppliers;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Products::all();
        return view('products.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categories::all()->pluck('category_name', 'id');
        $brands = Brands::all()->pluck('brand_name', 'id');

        // Pass both 'categories' and 'brands' to the view
        return view('products.create', compact('categories', 'brands'));
    }




    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        try {
            $data=Products::create([
                'product_name'=>$request->product_name,
                'description'=>$request->description,
                'category_id'=>$request->category_id,
                'brands_id'=>$request->brands_id,
                'rate'=>$request->rate,
                'quantity_in_stock'=>$request->quantity,
                'status'=>$request->status

            ]);
            if ($data){
                return redirect()->route('products.index')->with('success','Product created successfully');
            }

        }
        catch (\Exception $exception){
            dd($exception->getMessage());
        }

//        else {
//            return redirect()->back()->with('error','Something went wrong');
//
//        }

    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $products=Products::find($id);
        return view('products.edit',compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $products=Products::find($request->id);
        $products->update([
            'product_name'=>$request->product_name,
            'description'=>$request->description,
            'rate'=>$request->rate,
            'status'=>$request->status  ,
            'quantity_in_stock'=>$request->quantity_in_stock
        ]);
        return redirect()->route('products.index')->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $products=Products::findOrFail($id);
        $products->delete();
        return redirect()->route('products.index')->with('success','Product deleted successfully');
    }
}


// ProductController.php


