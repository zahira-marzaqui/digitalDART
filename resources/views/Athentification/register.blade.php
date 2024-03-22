@extends('layout.auth')
@section('authentificate')
<body>
    <div class="login-container">
      <img src="{{asset('img/cc.png')}}" alt="">
        <h2>Bienvenue !</h2>
        <br>
        {{-- @if ($errors->any())
            @foreach ($errors->all() as $message )
               
            @endforeach
            
        @endif --}}
        <form action="{{route("user.register.store")}}" method=POST > 
            @csrf
            <label >𝗡𝗼𝗺:</label>
            <input type="text" name="first_name" placeholder="Entrer votre nom" class="@error('first_name') invalid @enderror">
            <div class="invalid-feedback">
                @error('first_name')
                <span>{{$message}}</span>
                @enderror
            </div>
            <label for="text">𝗣𝗿é𝗻𝗼𝗺 :</label>
            <input type="text" id="password" name="last_name" placeholder="Entrer votre prénom">
               <div class="invalid-feedback">
                @error('last_name')
                <span>{{ $message }}</span>
                @enderror
               </div>
            <label for="text">𝗔𝗴𝗲:</label>
            <input type="text" id="password" name="age" placeholder="Enter votre age">
            <div class="invalid-feedback">
                @error('age')
                <span>{{ $message }}</span>
                @enderror
            </div>    
            <label for="text">𝐍𝐮𝐦é𝐫𝐨 𝐝𝐞 𝐭é𝐥é𝐩𝐡𝐨𝐧𝐞:</label>
            <input type="text" id="password" name="telephone" placeholder="Entrer votre numero de téléphone">
            <div class="invalid-feedback">
                @error('telephone')
                <span>{{ $message }}</span>
                @enderror
            </div>    
            <label for="text">𝗖𝗼𝗱𝗲 𝗻𝗮𝘁𝗶𝗼𝗻𝗮𝗹𝗲 𝗱'𝗶𝗱𝗲𝗻𝘁𝗶𝘁é:</label>
            <input type="text" id="password" name="CNI" placeholder="Entrer votre CNI">
            <div class="invalid-feedback">
                @error('CNI')
                <span class="error">{{ $message }}</span>
                @enderror
            </div>
            <label for="text">𝗔𝗱𝗿𝗲𝘀𝘀𝗲:</label>
            <input type="text" id="password" name="adresse" placeholder="Rue Ville Pays">
            <div class="invalid-feedback">
                @error('adresse')
                <span>{{ $message }}</span>
                @enderror
            </div>    
            <label for="username">𝗘𝗺𝗮𝗶𝗹:</label>
            <input type="text" id="password" name="email" placeholder="Entrer votre email">
            <div class="invalid-feedback">
                @error('email')
                <span>{{ $message }}</span>
                @enderror
            </div>
            <label for="password">𝗠𝗼𝘁 𝗱𝗲 𝗽𝗮𝘀𝘀𝗲:</label>
            <input type="password" id="password" name="password" placeholder="Entrer votre mot de passe">
            <div class="invalid-feedback"> 
                @error('password')
                <span>{{ $message }}</span>
                @enderror
            </div>    
            <label for="password">𝐂𝐨𝐧𝐟𝐢𝐫𝐦𝐞𝐫 𝐯𝐨𝐭𝐫𝐞 𝐦𝐨𝐭 𝐝𝐞 𝐩𝐚𝐬𝐬𝐞:</label>
            <input type="password" id="password" name="password_confirmation" placeholder="Confirmer votre mot de passe">
            <button type="submit">S'inscrire</button>
        </form>
        
        <a class="sign-up" href="{{ route('user.login') }}">Connectez-vous</a>
    </div>
    <!-- <script src="sign up.js"></script> -->
</body>
@endsection
