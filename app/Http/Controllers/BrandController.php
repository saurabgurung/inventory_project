<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use App\Models\Categories;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data= Brands::all();
        return view('brands.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('brands.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=Brands::create([

            'brand_name'=>$request->brand_name,


        ]);
        if ($data){
            return redirect()->Route('brands.index')->with('success','brand created successfully');
        }
          else {
            return redirect()->back()->with('error','Something went wrong');
//

        }


    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $brands=brands::find($id);

        return view('brands.edit',compact('brands'));
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
    public function update(Request $request)
    {
        $brands=brands::find($request-> id);

        $brands->update([
            'brand_name'=>$request->brand_name,

        ]);
        return redirect()->route('brands.index')->with('success', 'brand updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $brands= brands::findOrFail($id);
        $brands->delete();

        return redirect()->route('brands.index')->with('success', 'brand deleted successfully.');

    }
}
