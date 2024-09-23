<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoriesStoreRequest;
use App\Models\Categories;
use App\Models\Products;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data= Categories::all();
        return view('categories.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'category_name' => 'required|max:255',
        ]);

        $data=Categories::create([

            'category_name'=>$request->category_name,


        ]);

        if ($data){
            return redirect()->Route('categories.index')->with('success','category created successfully');
        }
        else {
            return redirect()->back()->with('error','Something went wrong');
//

        }



    }
//        $data=Categories::create($request->all());

    //
    //}

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $categories=Categories::find($id);

        return view('categories.edit',compact('categories'));
        //
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
//        return redirect('suppliers.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {

        $categories=Categories::find($request-> id);

        $categories->update([
            'category_name'=>$request->category_name,
            'description'=>$request->description
        ]);
        return redirect()->route('categories.index')->with('success', 'categories updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $categories= Categories::findOrFail($id);
        $categories->delete();

        return redirect()->route('categories.index')->with('success', 'categories deleted successfully.');
    }
}
