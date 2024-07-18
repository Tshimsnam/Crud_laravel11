<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;

class EtudiantController extends Controller
{
    public function list_etudiant()
    {
        $etudiants = Etudiant::paginate(4);
        return view('etudiants.liste', compact('etudiants'));
    }

    public function ajouter_etudiant()
    {
        return view('etudiants.ajouter');
    }

    public function ajouter_etudiant_traitement(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'classe' => 'required'
        ]);
        $etudiant = new Etudiant();
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->classe = $request->classe;
        $etudiant->save();

        return redirect('/ajouter')->with('status', 'L\'étudiant à bien été ajouter avec succès');
    }

    public function update_etudiant($id){
        $etudiants = Etudiant::find($id);
        return view('etudiants.update', compact('etudiants'));
    }

    public function update_etudiant_traitement(Request $request){
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'classe' => 'required'
        ]);
        $etudiant = Etudiant::find($request->id);
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->classe = $request->classe;
        $etudiant->update();

        return redirect('/etudiant')->with('status', 'L\'étudiant a bien été modifié avec succès');
    }

    public function delete_etudiant($id){
        $etudiant = Etudiant::find($id);
        $etudiant->delete();
        
        return redirect('/etudiant')->with('status', 'L\'étudiant a bien été supprimer avec succes');
    }
}
