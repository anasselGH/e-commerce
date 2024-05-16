<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Famille; // Assurez-vous d'importer le modèle approprié

class Home extends Component
{
    public $search = '';

    public function render()
    {
        $familles = Famille::where('libelle', 'like', '%'.$this->search.'%')->get();

        return view('livewire.home', [
            'familles' => $familles
        ]);
    }
}
