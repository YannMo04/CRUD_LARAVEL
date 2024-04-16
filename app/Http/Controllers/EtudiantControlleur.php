<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Etudiant;

class EtudiantControlleur extends Controller
{
    //
    public function liste_etudiant(){
        // une requete pour selectionner toutes les étudiants
        $etudiants = Etudiant::all();

        return view("etudiant.liste",compact("etudiants"));

    }

    public function ajouter_etudiant(){
        return view("etudiant.ajouter");
    }

    public function ajouter_etudiant_traitement(Request $request)
    {

        $request->validate([
          "nompre"=> "required",
          "classe"=>"required",
        ]);

        $etudiant = new Etudiant();

       //Liaison

       $etudiant->nompre = $request->nompre;
       $etudiant->classe = $request->classe;
       $etudiant->save();
       // rediriger avec la session success
       return redirect("/ajouter")->with("success","L'étudiant a été ajouté avec succès");
    

    }

    public function update_etudiant ($id){
        $etudiants = Etudiant::find($id);
        return view("etudiant.update",compact("etudiants"));
    }

    public function update_etudiant_traitement(Request $request)
    {
        $request->validate([
            "nompre" => "required",
            "classe" => "required",
        ]);

        $etudiant = Etudiant::find($request->id);

        //Liaison

        $etudiant->nompre = $request->nompre;
        $etudiant->classe = $request->classe;
        $etudiant->update();
        // rediriger avec la session success
        return redirect("/")->with("success", "L'étudiant a été modifié avec succès") ;

    }
    public function delete_etudiant($id)
    {
        $etudiant = Etudiant::find($id);
        $etudiant->delete();
        return redirect("/")->with("sup", "L'étudiant a été supprimé avec succès");

    }
}
