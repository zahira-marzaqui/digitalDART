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
        $d = Offer::find($id);
        $d->nbr_de_participant++;
        $classement = rand(1,$d->pé);
        $d->users()->attach(Auth::id(), ['classement' => $classement]);
        return redirect()->route('admin.offer.index')->with('success', 'Votre participation est enregistrée avec succès');
    }
}