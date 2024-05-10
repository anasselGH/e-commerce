<?php

namespace App\Http\Controllers;

use App\Models\Familles;
use Illuminate\Http\Request;

class FamilleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $familles= Familles::all();
        // return view("famille.index",["familles"=>$familles]);
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
    public function show(Familles $famille)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Familles $famille)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Familles $famille)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Familles $famille)
    {
        //
    }
}
