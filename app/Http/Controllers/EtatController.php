<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etats;

class EtatController extends Controller
{
    /**
     * Affiche une liste des ressources.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etats = Etats::all();
        return view('etats.index', compact('etats'));
    }

    /**
     * Affiche le formulaire de création d'une nouvelle ressource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('etats.create');
    }

    /**
     * Stocke une nouvelle ressource dans la base de données.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'etat' => 'required|string',
        ]);
    
        Etats::create([
            'etat' => $request->etat
        ]);
    
        return redirect()->route('etats.index')
            ->with('success', 'État ajouté avec succès.');
    }
    

    /**
     * Affiche une ressource spécifique.
     *
     * @param  \App\Models\Etats  $etats
     * @return \Illuminate\Http\Response
     */
    public function show(Etats $etat)
    {
        return view('etats.show', compact('etat'));
    }

    /**
     * Affiche le formulaire d'édition d'une ressource spécifique.
     *
     * @param  \App\Models\Etats  $etats
     * @return \Illuminate\Http\Response
     */
    public function edit(Etats $etat)
    {
        return view('etats.edit', compact('etat'));
    }

    /**
     * Met à jour une ressource spécifique dans la base de données.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Etats $etats
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Etats $etat)
    {
        $request->validate([
            'etat' => 'required|string',
        ]);

        $etat->update($request->all());

        return redirect()->route('etats.index')
            ->with('success', 'État mis à jour avec succès.');
    }

    /**
     * Supprime une ressource spécifique de la base de données.
     *
     * @param  \App\Models\Etats  $etats
     * @return \Illuminate\Http\Response
     */
    public function destroy(Etats $etat)
    {
        $etat->delete();

        return redirect()->route('etats.index')
            ->with('success', 'État supprimé avec succès.');
    }
}
