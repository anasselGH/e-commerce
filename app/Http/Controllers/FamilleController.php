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
        $familles = Familles::all();
        return view("famille.index", ["familles" => $familles]);
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("famille.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'libelle' => 'required|string|max:200',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:20480',
        ]);
    
        $famille = new Familles();
        $famille->libelle = $request->input('libelle');
    
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $famille->image = $imagePath;
        }
    
        $famille->save();
    
        return redirect()->route('familles.index')->with('success', 'Famille created successfully.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Familles $famille)
    {
        return view("famille.show", ["famille" => $famille]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Familles $famille)
    {
        return view("famille.edit", ["famille" => $famille]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Familles $famille)
    {
        $famille->libelle = $request->input('libelle');
        $famille->image = $request->input('image');
        $famille->save();
        
        return redirect()->route('familles.index')->with('success', 'Famille updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Familles $famille)
    {
        $famille->delete();
        
        return redirect()->route('familles.index')->with('success', 'Famille deleted successfully.');
    }
}
