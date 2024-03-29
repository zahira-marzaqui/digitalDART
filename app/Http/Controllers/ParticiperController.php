<?php

namespace App\Http\Controllers;
use App\Models\Participer;
use App\Models\User;
use App\Models\Offer;
use App\Models\offer_user;
use Illuminate\Http\Request;

class ParticiperController extends Controller
{
    public function participer(Request $request)
    {
        // Valider les données si nécessaire

        // Vérifier si l'offre et l'utilisateur existent
        $offer = Offer::find($request->input('offer_id'));
        $user = User::find($request->input('user_id'));


        if (!$offer || !$user) {
            // Redirection ou gestion de l'erreur si l'offre ou l'utilisateur n'existe pas
            return redirect()->back()->with('error', 'L\'offre ou l\'utilisateur n\'existe pas.');
        }
        
        // Créer une nouvelle instance de Participer avec les données du formulaire
        $participation = new Participer();
        $participation->offer_id = $offer->id;
        $participation->user_id = $user->id;

        // Générer un nombre aléatoire entre 1 et 6 pour la colonne 'classement'
        $participation->classement = rand(1, $offer->période);

        // Enregistrer la participation dans la base de données
        $participation->save();

        // Incrémenter le nombre de participants pour cette offre
        $offer->nbr_de_participant++;

       // Enregistrer les modifications de l'offre
       $offer->save();

        // Redirection ou retourner une réponse si nécessaire
        return redirect()->route('user.offer.index')->with('success', 'Votre participation est enregistrée avec succès.');
    }

}
