<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {    
        $user = User::where('type', 'user')->orderBy('created_at', 'DESC')->get();
        return view('Admin.membres.index', compact('user'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.membres.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RegisterRequest $request)
    {
         //validation des donnée
         $validatedData = $request->validated();
         // Créez un nouvel utilisateur
         $user = User::create([
             'first_name' => $validatedData['first_name'],
             'last_name' => $validatedData['last_name'],
             'age' => $validatedData['age'],
             'telephone' => $validatedData['telephone'],
             'email' => $validatedData['email'],
             'CNI' => $validatedData['CNI'],
             'adresse' => $validatedData['adresse'],
             'password' => Hash::make($validatedData['password']),
             'validation' => $validatedData['validation'],
             'type' => 0 ,
         ]);

         return redirect()->route('admin.membres.index')->with('success', 'Utilisateur ajouter avec succès.'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
