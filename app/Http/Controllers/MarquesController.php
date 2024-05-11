<?php

namespace App\Http\Controllers;

use App\Models\marques;
use Illuminate\Http\Request;

class MarquesController extends Controller
{
    public function index()
    {
        $marques = marques::all();
        return view('marques.index', compact('marques'));
    }

    public function create()
    {
        return view('marques.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'marque' => 'required|string',
        ]);

        marques::create($request->all());

        return redirect()->route('marques.index')
            ->with('success', 'Marque ajoutée avec succès.');
    }

    public function show(marques $marque)
    {
        return view('marques.show', compact('marque'));
    }


    public function edit(marques $marque)
    {
        return view('marques.edit', compact('marque'));
    }

    public function update(Request $request, marques $marque)
    {
        $request->validate([
            'marque' => 'required|string',
        ]);

        $marque->update($request->all());

        return redirect()->route('marques.index')
            ->with('success', 'Marque mise à jour avec succès.');
    }

    public function destroy(marques $marque)
    {
        $marque->delete();

        return redirect()->route('marques.index')
            ->with('success', 'Marque supprimée avec succès.');
    }
}
