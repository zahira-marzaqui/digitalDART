@extends('layouts.app')
  
{{-- @section('title', '') --}}
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Liste des Membres</h1>
        
        <a href="{{ route('admin.members.create') }}" class="btn btn-primary" style="background-color: #257e38">Ajouter un membre</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success')}}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="" style="background-color: #eff5ef">
            <tr>
                <th style="color: black">id</th>
                <th style="color: black">Nom complet</th>
                <th style="color: black">Age</th>
                <th style="color: black">Numéro de téléphone</th>
                <th style="color: black">Adresse Email</th>
                <th style="color: black">CNI</th>
                <th style="color: black">Adresse</th>
                <th style="color: black">Validation</th>
                <th style="color: black">Action</th>
            </tr>
        </thead>
        <tbody>
            @if($user->count() > 0)
                @foreach($user as $us)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $us->last_name}} {{$us->first_name}}</td>
                        <td class="align-middle">{{ $us->age}} ans</td>
                        <td class="align-middle">{{ $us->telephone}}</td>
                        <td class="align-middle">le {{ $us->email}}</td>
                        <td class="align-middle text-center"> {{$us->CNI}}</td>
                        <td class="align-middle text-center"> {{$us->adresse}}</td>
                        <td style="" class="text-center">
                            @if ($us->validation == false)
                               
                                
                                <a type="button" class="btn" data-toggle="modal" data-target="#exampleModal">
                                    <img src="{{asset('img/x.png')}}" alt="" style="background-size: cover;
                                     width: 19px; height: auto ;">
                                </a>
                                  
                                  <!-- Modal -->
                                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel" style="color: #257e38"><strong>Validation des utilisateurs</strong> </h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          <p style="color: black">J'ai examiné attentivement le dossier de l'utilisateur et je le valide pour devenir membre dans notre application.</p>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                          <button type="button" class="btn btn-success" style="background-color: #257e38">Valider</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                <!-- Button trigger modal -->

                            @else 
                               <img src="{{asset('img/check.png')}}" alt="" style="background-size: cover;
                               width: 22px; height: auto ;">
                            @endif
                        </td>

                        <td class="text-center">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                
                                {{-- <a href="#" type="button" class="btn btn-warning" style="background-color: #dfcd7b">Edit</a> --}}
                                <form action="" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    {{-- <span class="badge text-danger" style="background-color: white">supprimer</span> --}}
                                    {{-- <button class="btn text-danger btn-xs" style="background-color: white; padding: 0.2rem 0.5rem;">supp</button> --}}
                                    <a href="#" class="btn btn-danger btn-circle btn-sm">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Aucun utilisateur n'est trouvé</td>
                </tr>
            @endif
        </tbody>
    </table>   
@endsection