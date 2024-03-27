<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;





class AuthController extends Controller
{
    public function login(){
        return view("Athentification.login");
    }
    public function register(){
        return view("Athentification.register");
    }
    public function loginStore(LoginRequest $request){
        
        
        $validatedData = $request->validated();
        if(auth()->attempt(array('telephone' => $validatedData['telephone'], 'password' => $validatedData['password'])))
        {
            if (auth()->user()->type == 'admin') {
                return redirect()->route('admin.dashboard');
            }else{
                return redirect()->route('user.mydart.index');
            }
        }else{
            return redirect()->route('/')
                ->with('error','Le numéro de téléphone ou le mot de passe est incorrect.');
        }
    }
    public function RegisterStore(RegisterRequest $request){
    
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
            'type' => 0 ,
        ]);
        
        // Connectez automatiquement l'utilisateur après son inscription
        Auth::login($user);

        if (auth()->user()->type == 'admin') {
            return redirect()->route('admin.dashboard')->with('success', 'Inscription réussie. Bienvenue, administrateur.');
        } else {
            return redirect()->route('user.mydart.index')->with('success', 'Inscription réussie. Bienvenue.');
        }
    
        // Redirigez l'utilisateur vers une autre page ou effectuez une autre action
        // return redirect()->route('dashboard');
    }
    
    public function logout(Request $request){
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        return redirect('/');
    }

}
