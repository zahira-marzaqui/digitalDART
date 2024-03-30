@extends('layouts.app')
  
{{-- @section('title', '') --}}
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Liste des Offres</h1>
        
        <a href="{{ route('admin.offer.create') }}" class="btn btn-primary" style="background-color: #257e38">Ajouter une Offre</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="" style="background-color: #eff5ef">
            <tr>
                <th style="color: black">#</th>
                <th style="color: black">somme</th>
                <th style="color: black">montant mensuel</th>
                <th style="color: black">période</th>
                <th style="color: black">date de paiment</th>
                <th style="color: black">nombre de participant</th>
                <th style="color: black">status</th>
                <th style="color: black">Action</th>
            </tr>
        </thead>
        <tbody>
            @if($offer->count() > 0)
                @foreach($offer as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->somme }} DH</td>
                        <td class="align-middle">{{ $rs->Montant_Mensuel()}} DH</td>
                        <td class="align-middle">{{ $rs->période }} mois </td>
                        <td class="align-middle">le {{ $rs->date_paiment }} chaque mois </td>
                        <td class="align-middle text-center"> {{$rs->nbr_de_participant}} / {{ $rs->période}}</td>
                        <td style="color : white">
                            @if ($rs->nbr_de_participant == $rs->période)

                               <h1 class="badge bg-danger">{{ $rs->status = 'terminé'}}</h1>
                            @else 
                              <h1 class="badge bg-success">{{ $rs->status}}</h1>
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
                    <td class="text-center" colspan="5">Offer not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection