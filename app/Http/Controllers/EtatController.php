<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etat;
class EtatController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etats = Etat::all();
        return view('etats.index', compact('etats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('etats.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'etat' => 'required|string',
        ]);

        Etat::create($request->all());

        return redirect()->route('etats.index')
            ->with('success', 'État ajouté avec succès.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Etat  $etat
     * @return \Illuminate\Http\Response
     */
    public function show(Etat $etat)
    {
        return view('etats.show', compact('etat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Etat  $etat
     * @return \Illuminate\Http\Response
     */
    public function edit(Etat $etat)
    {
        return view('etats.edit', compact('etat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Etat  $etat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Etat $etat)
    {
        $request->validate([
            'etat' => 'required|string',
        ]);

        $etat->update($request->all());

        return redirect()->route('etats.index')
            ->with('success', 'État mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Etat  $etat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Etat $etat)
    {
        $etat->delete();

        return redirect()->route('etats.index')
            ->with('success', 'État supprimé avec succès.');
    }
}

