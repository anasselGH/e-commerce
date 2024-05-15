<?php
namespace App\Http\Controllers;

use App\Models\sousFamilles;
use App\Models\Familles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SousFamillesController extends Controller
{
    public function index()
    {
        // Récupérer toutes les sous-familles
        $sousFamilles = sousFamilles::all();

        // Passer les sous-familles récupérées à la vue 'sousFamilles.index'
        return view('sousFamilles.index', compact('sousFamilles'));
    }
    public function create()
    {
        // Récupérer toutes les familles disponibles
        $familles = Familles::all();

        // Passer les familles récupérées à la vue 'sousFamilles.create'
        return view('sousFamilles.create', compact('familles'));
    }


public function store(Request $request)
{
    $request->validate([
        'libelle' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'famille_id' => 'required|exists:familles,id'
    ]);

    $imagePath = $request->file('image')->store('images', 'public');

    $sousFamille = sousFamilles::create([
        'libelle' => $request->libelle,
        'image' => str_replace('public/', '', $imagePath),
        'famille_id' => $request->famille_id
    ]);

    return Redirect::route('sousFamilles.index');
}
    public function edit(sousFamilles $sousFamille)
    {
         $familles = Familles::all();

    // Passer les familles récupérées à la vue 'sousFamilles.edit'
    return view('sousFamilles.edit', compact('sousFamille', 'familles'));
    }

    public function update(Request $request, sousFamilles $sousFamille)
    {
        $request->validate([
            'libelle' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'famille_id' => 'required|exists:familles,id'
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images');
            $sousFamille->image = $imagePath;
        }

        $sousFamille->libelle = $request->libelle;
        $sousFamille->famille_id = $request->famille_id;
        $sousFamille->save();

        return Redirect::route('sousFamilles.index');
    }

    public function destroy(sousFamilles $sousFamille)
    {
        $sousFamille->delete();
        return Redirect::route('sousFamilles.index');
    }

    public function show(sousFamilles $sousFamille)
    {
        return view('sousFamilles.show', compact('sousFamille'));
    }

}
