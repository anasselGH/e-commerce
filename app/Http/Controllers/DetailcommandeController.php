<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detailcommande;
use App\Models\Commande;
use App\Models\Produit;
class DetailcommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Récupérer tous les détails de commande
        $detailcommandes = Detailcommande::all();

        // Retourner la vue avec les détails de commande
        return view('detailcommandes.index', compact('detailcommandes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
{
    $produits = Produit::all(); 
    $commandes = Commande::all();
    // Remplacez Produit par le nom de votre modèle de produit
    return view('detailcommandes.create', compact('produits','commandes'));
}


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
            // Spécifier les règles de validation
        ]);

        // Créer un nouveau détail de commande dans la base de données
        Detailcommande::create($request->all());

        // Rediriger vers la page index avec un message de succès
        return redirect()->route('detailcommandes.index')
            ->with('success', 'Détail de commande créé avec succès.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Récupérer et afficher un détail de commande spécifique
        $detailcommande = Detailcommande::findOrFail($id);
        return view('detailcommandes.show', compact('detailcommande'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function edit($id)
{
    $detailcommande = Detailcommande::findOrFail($id);
    $produits = Produit::all();
    $commandes = Commande::all();
     // Assurez-vous de remplacer Produit par le nom de votre modèle de produit
    return view('detailcommandes.edit', compact('detailcommande', 'produits','commandes'));
}


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Valider les données du formulaire
        $request->validate([
            // Spécifier les règles de validation
        ]);

        // Récupérer le détail de commande à mettre à jour
        $detailcommande = Detailcommande::findOrFail($id);

        // Mettre à jour le détail de commande dans la base de données
        $detailcommande->update($request->all());

        // Rediriger vers la page index avec un message de succès
        return redirect()->route('detailcommandes.index')
            ->with('success', 'Détail de commande mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Récupérer et supprimer le détail de commande
        $detailcommande = Detailcommande::findOrFail($id);
        $detailcommande->delete();

        // Rediriger vers la page index avec un message de succès
        return redirect()->route('detailcommandes.index')
            ->with('success', 'Détail de commande supprimé avec succès.');
    }
}
