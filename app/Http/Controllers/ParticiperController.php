<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ParticiperController extends Controller
{
    public function participer(Request $request,$id)
    {
        $offer = Offer::find($id);
        $offer->nbr_de_participant++;
        $offer->save();
        $classement = rand(1,$offer->période);
        $offer->users()->attach(Auth::id(), ['classement' => $classement]);
        return redirect()->route('user.offer.index')->with('success', 'Votre participation est enregistrée avec succès');
    }
}