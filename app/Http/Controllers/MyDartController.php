<?php

namespace App\Http\Controllers;
use App\Models\Offer;

use Illuminate\Http\Request;

class MyDartController extends Controller
{
    public function index(){
        $offer = Offer::get();
        
        return view('User.MyDart.index' , compact('offer'));
    }
    public function PaiementIndex(){
        return view('User.MyDart.paiement');
    }
}
