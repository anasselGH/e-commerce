<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produits;
<<<<<<< HEAD
use App\Models\Sousfamilles;
use App\Models\Marques ;
use App\Models\Unites;
use Symfony\Component\HttpKernel\Attribute\MapRequestPayload;
=======
use App\Models\sousFamilles;
use App\Models\marques ;
use App\Models\unites;
>>>>>>> c869a97a2b41769c8826145d619aa548ae9f0aba

class ProduitController extends Controller
{
    public function index()
    {
        $produits = produits::all();
        return view('produits.index', compact('produits'));
    }

    public function create()
{
<<<<<<< HEAD
    $sousfamilles = Sousfamilles::all();
    $marques = Marques::all();
    $unites = Unites::all();

=======
    $sousfamilles = sousFamilles::all();
    $marques = marques::all();
    $unites = unites::all();
    
>>>>>>> c869a97a2b41769c8826145d619aa548ae9f0aba
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
            'sous_famille_id' => 'required',
            'marque_id' => 'required|exists:marques,id',
            'unite_id' => 'required|exists:unites,id',
        ]);

        $validatedData = $request->only('codebarre', 'designation', 'prix_ht', 'tva', 'sous_famille_id','description' ,'marque_id', 'unite_id');

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $validatedData['image'] = $imagePath;
        }

<<<<<<< HEAD
        Produits::create($validatedData);
=======
        produits::create($validatedData);
>>>>>>> c869a97a2b41769c8826145d619aa548ae9f0aba

        return redirect()->route('produits.index')->with('success', 'Produit ajouté avec succès.');
    }

<<<<<<< HEAD
    public function show(Produits $produit)
=======
    public function show( produits $produit)
>>>>>>> c869a97a2b41769c8826145d619aa548ae9f0aba
    {
        return view('produits.show', compact('produit'));
    }

<<<<<<< HEAD
    public function edit(Produits $produit)
    {
        $sousfamilles = Sousfamilles::all();
        $marques = MapRequestPayload::all();
        $unites = Unites::all();
        return view('produits.edit', compact('produit', 'sousfamilles','marques','unites'));
    }

    public function update(Request $request, Produits $produit)
=======
    public function edit(produits $produit)
    {
        $sousfamilles = sousFamilles::all();
        $marques = marques::all();
        $unites = unites::all();
        return view('produits.edit', compact('produit', 'sousfamilles','marques','unites'));
    }

    public function update(Request $request, produits $produit)
>>>>>>> c869a97a2b41769c8826145d619aa548ae9f0aba
    {
        $request->validate([
            'codebarre' => 'required|numeric',
            'designation' => 'required|string',
            'prix_ht' => 'required|numeric',
            'tva' => 'required|numeric',
            'sous_famille_id' => 'required',
            'marque_id' => 'required|exists:marques,id',
            'unite_id' => 'required|exists:unites,id',
        ]);

        $produit->update($request->all());

        return redirect()->route('produits.index')->with('success', 'Produit mis à jour avec succès.');
    }

<<<<<<< HEAD
    public function destroy(Produits $produit)
=======
    public function destroy(produits $produit)
>>>>>>> c869a97a2b41769c8826145d619aa548ae9f0aba
    {
        $produit->delete();

        return redirect()->route('produits.index')->with('success', 'Produit supprimé avec succès.');
    }
}

