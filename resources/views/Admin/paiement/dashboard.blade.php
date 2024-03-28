@extends('layouts.app')
  
{{-- @section('title', '') --}}
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Liste des Offres</h1>
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
                <th style="color: black">Payer</th>
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
                        
                        
                        
                        <td class="text-center">
                            <a href="{{route('admin.paiement.index')}}" class="d-inline-block">
                            <img src="{{asset('img/dolarIcon.png')}}" style="background-size: cover; width: 45px; height: auto">
                            </a> 
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