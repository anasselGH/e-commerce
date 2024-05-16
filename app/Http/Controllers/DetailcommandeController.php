<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detailcommande;
use App\Models\commandes;
use App\Models\produits;

class DetailcommandeController extends Controller
{
    // Affiche une liste des ressources
    public function index()
    {
        $details_commande = Detailcommande::all();
        return view('detailcommandes.index', compact('details_commande'));
    }

    // Affiche le formulaire de création de la ressource
    public function create()
    {
        $produits = produits::all(); 
        $commandes = commandes::all();
        return view('detailcommandes.create', compact('produits','commandes'));
    }

    // Stocke une nouvelle ressource dans le stockage
    public function store(Request $request)
    {
        $request->validate([
            // Spécifier les règles de validation
        ]);

        Detailcommande::create($request->all());

        return redirect()->route('detailcommandes.index')
            ->with('success', 'Détail de commande créé avec succès.');
    }

    // Affiche la ressource spécifiée
    public function show($id)
    {
        $detailcommande = Detailcommande::findOrFail($id);
        return view('detailcommandes.show', compact('detailcommande'));
    }

    // Affiche le formulaire de modification de la ressource
    public function edit($id)
    {
        $detailcommande = Detailcommande::findOrFail($id);
        $produits = Produit::all();
        $commandes = Commande::all();
        return view('detailcommandes.edit', compact('detailcommande', 'produits','commandes'));
    }

    // Met à jour la ressource spécifiée dans le stockage
    public function update(Request $request, $id)
    {
        $request->validate([
            // Spécifier les règles de validation
        ]);

        $detailcommande = Detailcommande::findOrFail($id);
        $detailcommande->update($request->all());

        return redirect()->route('detailcommandes.index')
            ->with('success', 'Détail de commande mis à jour avec succès.');
    }

    // Supprime la ressource spécifiée du stockage
    public function destroy($id)
    {
        $detailcommande = Detailcommande::findOrFail($id);
        $detailcommande->delete();

        return redirect()->route('detailcommandes.index')
            ->with('success', 'Détail de commande supprimé avec succès.');
    }
}
