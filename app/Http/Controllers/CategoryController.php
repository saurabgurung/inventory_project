<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoriesStoreRequest;
use App\Models\Categories;
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

        $data=Categories::create([

            'category_name'=>$request->category_name,
            'description'=>$request->description


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
    public function update(Request $request, Categories $categories)
    {
        // Validate the input data
        $validated = $request->validate([
            'category_name' => 'required|string|max:255',
            'description' => 'required',
        ]);

        // Update the item with validated data
        $categories->update($validated);

        // Redirect to the index page with a success message
        return redirect()->Route('categories.index')->with('success', 'Item updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categories $categories)
    {
        $categories->delete();

        return redirect()->route('categories.index')->with('success', 'Item deleted successfully.');
    }
}
