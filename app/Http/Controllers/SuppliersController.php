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
//        dd($request->all());

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
