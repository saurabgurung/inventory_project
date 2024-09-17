<?php

namespace App\Http\Controllers;

use App\Http\Requests\SuppliersStoreRequest;
use App\Models\Categories;
use App\Models\Suppliers;
use Illuminate\Http\Request;

class SuppliersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data= Suppliers::all();
        return view('suppliers.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('suppliers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = Suppliers::create([
            'supplier_name'=> $request->supplier_name,
            'contact_number'=>$request->contact_number,
            'address'=>$request->address,
            'email'=>$request->email
            ]);
        if ($data){
            return redirect()->Route('suppliers.index')->with('success', 'supplier is successfully added ');
        }else{
            return redirect()->back()->with('error', 'something went wrong');
        }
    }

    /**
     * Display the specified resource.
//     */
    public function show($id)
    {
        $suppliers=Suppliers::find($id);
            return view('suppliers.edit', compact('suppliers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

//        $suppliers=Suppliers::find($id);
//        return view('suppliers.edit', compact('suppliers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
//        dd($request->all());
        $suppliers =Suppliers::find($request->id);
        $suppliers->update([
            'supplier_name'=>$request->supplier_name,
            'contact_number'=>$request->contact_number,
            'email'=>$request->email,
            'address'=>$request->address

        ]);
        return redirect()->Route('suppliers.index')->with('success', 'supplier is successfully updated ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $suppliers= suppliers::findOrFail($id);
        $suppliers->delete();

        return redirect()->route('suppliers.index')->with('success', 'suppliers deleted successfully.');

    }
}
