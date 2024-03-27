<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyDartController extends Controller
{
    public function index(){
        return view('User.MyDart.index');
    }
    public function PaiementIndex(){
        return view('User.MyDart.paiement');
    }
}
