<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Participer;
use App\Models\User;
use App\Models\Offer;
use Illuminate\Support\Facades\DB;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     //
    // }

    public function adminOffer(){
        $offer = Offer::get();
        return view('Admin.Offer.index' , compact('offer'));
    }

    public function UserOffer(){
        $offer = Offer::get();
        return view('User.Offer.index', compact('offer'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(Auth::user()->type === 'admin') {
            return view('Admin.Offer.create');
        } else {
            return view('User.Offer.create'); // Vue pour les utilisateurs normaux
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Offer::create($request->all());

        // return redirect()->route('admin.offer.index')->with('success', 'Offer added successfully');

        if(Auth::user()->type == 'admin' || Auth::user()->type == 'user') {
            $offer = Offer::create($request->all());
            if(Auth::user()->type == 'user'){
                $offer->nbr_de_participant++ ;
                $offer->save();
            }

            // Redirection en fonction du rôle de l'utilisateur
            if(Auth::user()->type == 'admin') {
                return redirect()->route('admin.offer.index')->with('success', 'L\'offre est ajoutée avec succés.');
            } else {
                return redirect()->route('user.offer.index')->with('success', 'L\'offre est ajoutée avec succés.');
            }
        } else {
            return redirect()->back()->with('error', 'tu n\'as pas la permession pour faire cette action.');
        }
    }

    // public function participer(Request $request)
    // {
    //     // Valider les données si nécessaire

    //     // Vérifier si l'offre et l'utilisateur existent
    //     $offer = Offer::find($request->input('offer_id'));
    //     $user = User::find($request->input('user_id'));

    //     if (!$offer || !$user) {
    //         // Redirection ou gestion de l'erreur si l'offre ou l'utilisateur n'existe pas
    //         return redirect()->back()->with('error', 'L\'offre ou l\'utilisateur n\'existe pas.');
    //     }
        
    //     // Créer une nouvelle instance de Participer avec les données du formulaire
    //     $participation = new Participer();
    //     $participation->offer_id = $offer->id;
    //     $participation->user_id = $user->id;

    //     // Générer un nombre aléatoire entre 1 et 6 pour la colonne 'classement'
    //     $participation->classement = rand(1, $offer->période);

    //     // Enregistrer la participation dans la base de données
    //     $participation->save();

    //     // Redirection ou retourner une réponse si nécessaire
    //     return redirect()->route('user.offer.index')->with('success', 'Votre participation dans l\'offre '.$offer->id.' est enregistrée avec succès.');
    // }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $offer = Offer::findOrFail($id);

        return view('User.Offer.detaills', compact('offer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $offer = Offer::findOrFail($id);

        $offer->update($request->all());

        return redirect()->route('admin.offer.index')->with('success', 'Offer updated successfully');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $offer = Offer::findOrFail($id);

        $offer->delete();

        return redirect()->route('admin.offer.destroy')->with('success', 'Cette offre a été supprimée avec succès');
    }


    public function test(string $id)
    {
        $offer = Offer::findOrFail($id);
        $usersByPeriod = [];

        for ($month = 1; $month <= $offer->période; $month++) {
            $users = DB::table('users')
                ->join('offer_user', 'users.id', '=', 'offer_user.id_user')
                ->join('offers', 'offer_user.id_offer', '=', 'offers.id')
                ->where('offers.id', $offer->id)
                ->where('offers.période', $month)
                ->select('users.*')
                ->get();
    
            $usersByPeriod[$month] = $users;
        }
    
        // Now $usersByPeriod contains users grouped by each month of the offer's duration
        // You can loop through $usersByPeriod to display users for each month
        
        return view('Admin.paiement.index',compact("usersByPeriod"));
    }

 }
