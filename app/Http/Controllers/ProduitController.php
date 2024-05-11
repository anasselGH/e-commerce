<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produit;
use App\Models\Sousfamille;
use App\Models\Marque ;
use App\Models\Unites;

class ProduitController extends Controller
{
    public function index()
    {
        $produits = Produit::all();
        return view('produits.index', compact('produits'));
    }

    public function create()
{
    $sousfamilles = Sousfamille::all();
    $marques = Marque::all();
    $unites = Unites::all();
    
    return view('produits.create', compact('sousfamilles', 'marques', 'unites'));
}


    public function store(Request $request)
    {
        $request->validate([
            'codebarre' => 'required|numeric',
            'designation' => 'required|string',
            'prix_ht' => 'required|numeric',
            'tva' => 'required|numeric',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // image validation
            'sous_famille_id' => 'required|exists:sousfamilles,id',
            'marque_id' => 'required|exists:marques,id',
            'unite_id' => 'required|exists:unites,id',
        ]);

        $validatedData = $request->only('codebarre', 'designation', 'prix_ht', 'tva', 'sous_famille_id','description' ,'marque_id', 'unite_id');

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $validatedData['image'] = $imagePath;
        }

        Produit::create($validatedData);

        return redirect()->route('produits.index')->with('success', 'Produit ajouté avec succès.');
    }

    public function show(Produit $produit)
    {
        return view('produits.show', compact('produit'));
    }

    public function edit(Produit $produit)
    {
        $sousfamilles = Sousfamille::all();
        $marques = Marque::all();
        $unites = Unites::all();
        return view('produits.edit', compact('produit', 'sousfamilles','marques','unites'));
    }

    public function update(Request $request, Produit $produit)
    {
        $request->validate([
            'codebarre' => 'required|numeric',
            'designation' => 'required|string',
            'prix_ht' => 'required|numeric',
            'tva' => 'required|numeric',
            'sous_famille_id' => 'required|exists:sousfamilles,id',
            'marque_id' => 'required|exists:marques,id',
            'unite_id' => 'required|exists:unites,id',
        ]);

        $produit->update($request->all());

        return redirect()->route('produits.index')->with('success', 'Produit mis à jour avec succès.');
    }

    public function destroy(Produit $produit)
    {
        $produit->delete();

        return redirect()->route('produits.index')->with('success', 'Produit supprimé avec succès.');
    }
}

