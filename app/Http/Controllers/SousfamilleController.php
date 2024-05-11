<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sousfamille;
use App\Models\Famille;

class SousfamilleController extends Controller
{
    public function index()
    {
        $sousfamilles = Sousfamille::all();
        return view('sousfamilles.index', compact('sousfamilles'));
    }

    public function create()
    {
        $familles = Famille::all();
        return view('sousfamilles.create', compact('familles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'libelle' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:20480',
            'famille_id' => 'required|exists:familles,id',
        ]);
    
        $validatedData = $request->only('libelle', 'famille_id');
    
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $validatedData['image'] = $imagePath;
        }
    
        Sousfamille::create($validatedData);
    
        return redirect()->route('sousfamilles.index')->with('success', 'Sous-famille ajoutée avec succès.');
    }

    public function edit($id)
    {
        $sousfamille = Sousfamille::findOrFail($id);
        $familles = Famille::all();
        return view('sousfamilles.edit', compact('sousfamille', 'familles'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'libelle' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:20480',
            'famille_id' => 'required|exists:familles,id',
        ]);

        $sousfamille = Sousfamille::findOrFail($id);
        $validatedData = $request->only('libelle', 'famille_id');

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $validatedData['image'] = $imagePath;
        }

        $sousfamille->update($validatedData);

        return redirect()->route('sousfamilles.index')->with('success', 'Sous-famille mise à jour avec succès.');
    }

    public function destroy($id)
    {
        $sousfamille = Sousfamille::findOrFail($id);
        $sousfamille->delete();
        return redirect()->route('sousfamilles.index')->with('success', 'Sous-famille supprimée avec succès.');
    }
}
