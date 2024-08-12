<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonStoreRequest;
use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Person::all();
        return view('person.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Return view('person.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = Person::create([
            'username'=> $request->username,
            'password'=>$request->password,
            'email'=>$request->email,
            'role'=>$request->role
        ]);
        if ($data){
            return view('person.index')->with('success','Person created successfully');
        }else{
            return redirect()->back()->with('error','Person not created');
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
