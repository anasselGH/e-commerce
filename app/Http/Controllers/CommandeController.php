<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commandes;
use App\Models\ModeReglements;
use App\Models\Etats;
use App\Models\User;





class CommandeController extends Controller
{
    public function index()
    {
        $commandes = Commandes::all();
        return view('commandes.index', compact('commandes'));
    }

    public function create()
{
    $modesReglement = ModeReglements::all();
    $etats = Etats::all();
    $users = User::all();
    return view('commandes.create', compact('modesReglement', 'etats', 'users'));
}


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'date' => 'required|date',
            'heure' => 'required',
            'regle' => 'required|string',
            'mode_reglement_id' => 'required|exists:mode_reglements,id',
            'etat_id' => 'required|exists:etats,id',
            'user_id' => 'required|exists:users,id',
        ]);

        Commandes::create($validatedData);

        return redirect()->route('commandes.index')
            ->with('success', 'Commande ajoutée avec succès.');
    }

    public function show(Commandes $commande)
    {
        return view('commandes.show', compact('commande'));
    }

    public function edit(Commandes $commande)
    {
        return view('commandes.edit', compact('commande'));
    }

    public function update(Request $request, Commandes $commande)
{
    $validatedData = $request->validate([
        'date' => 'required|date',
        'heure' => 'required',
        'regle' => 'required|string',
        // Add validation rules for other fields if needed
    ]);

    $commande->update($validatedData);

    return redirect()->route('commandes.index')->with('success', 'Commande mise à jour avec succès.');
}


    public function destroy(Commandes $commande)
    {
        $commande->delete();

        return redirect()->route('commandes.index')
            ->with('success', 'Commande supprimée avec succès.');
    }
}
