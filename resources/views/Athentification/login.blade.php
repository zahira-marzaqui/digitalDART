@extends('layout.auth')
@section('authentificate')
<body>
    <div class="login-container">
        <img src="{{asset('img/cc.png')}}" alt="">
        <h2>Bienvenue !</h1>
            <br>
        <form action="{{route("user.login.store")}}" method=POST > 
            @csrf
            <label for="username">Numéro de téléphone:</label>
            <input type="text" id="username" name="telephone" placeholder="Entrer votre numéro de telephone">
            <div class="invalid-feedback"> 
                @error('telephone')
                <span class="error">{{ $message }}</span>
                @enderror
            </div> 
            <label for="password">Mot de passe:</label>
            <input type="password" id="password" name="password" placeholder="Entrer votre mot de passe">
            <div class="invalid-feedback"> 
                @error('password')
                <span class="error">{{ $message }}</span>
                @enderror
            </div> 
            <button type="submit">Se connecter</button>
        </form>
        <a class="forgot-password">mot de passe oublier ?</a><br>
        <a clas="sign up" href="{{ route('user.register') }}">créer un compte</a>  
    </div>
    <!-- <script src="sign up.js"></script> -->
</body>
@endsection
