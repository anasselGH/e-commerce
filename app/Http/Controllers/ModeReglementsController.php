<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModeReglements;

class ModeReglementsController extends Controller
{
    public function index()
{
    $modeReglements = ModeReglements::all();
    return view('mode_reglements.index', compact('modeReglements'));
}


    public function create()
    {
        return view('mode_reglements.create');
    }

    public function store(Request $request)
{
    $validatedData = $request->validate([
        'mode_reglements' => 'required|string',
    ]);

    ModeReglements::create($validatedData);

    return redirect()->route('mode_reglements.index')
        ->with('success', 'Mode de règlement ajouté avec succès.');
}

    public function show(ModeReglements $modeReglement)
    {
        return view('mode_reglements.show', compact('modeReglement'));
    }

    public function edit(ModeReglements $modeReglement)
    {
        return view('mode_reglements.edit', compact('modeReglement'));
    }

    public function update(Request $request, ModeReglements $modeReglement)
    {
        $request->validate([
            'mode_reglements' => 'required|string',
        ]);

        $modeReglement->update($request->all());

        return redirect()->route('mode_reglements.index')
            ->with('success', 'Mode de règlement mis à jour avec succès.');
    }

    public function destroy(ModeReglements $modeReglement)
    {
        $modeReglement->delete();

        return redirect()->route('mode_reglements.index')
            ->with('success', 'Mode de règlement supprimé avec succès.');
    }
}
