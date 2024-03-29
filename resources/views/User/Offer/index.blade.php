@extends('layouts.app')
@section('contents')
<div class="d-flex align-items-center justify-content-between">
    <h1 class="mb-0">Liste des Offres</h1>

    <a href="{{ route('user.offer.crate') }}" class="btn btn-primary" style="background-color: #257e38">Ajouter une Offre</a>
</div>
<hr />
@if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
    </div>
@endif
<div class="container-fluid">
<div class="row">
    @foreach($offer as $rs)
    <div class="col-xl-4 col-lg-5" >
        <div class="card shadow mb-4" style="max-height: 400px; overflow: auto;" >


            <div class="card-body" >
                @if ($rs->nbr_de_participant == $rs->période)

                 <span class="badge bg-danger" style="color: #f2f9f3"><strong>{{ $rs->status = 'terminée'}}</strong></span>
                @else
               <span class="badge bg-success" style="color: #f2f9f3"><strong>{{ $rs->status}}</strong> </span>
                @endif
                <br><br>
                <div class="">
                         <div >
                            <h2 class="text-center" style="color: black"><strong>{{ $rs->somme }} DH</strong></h2>
                         </div><br>
                        <p style="color: rgb(164, 161, 161)">le montant mensuel: {{ $rs->Montant_Mensuel()}} DH</p>
                        <p style="color: rgb(164, 161, 161)">la période: {{ $rs->période }} mois </p>
                        {{-- {% include "offers/inscription.html" %} --}}

                </div>
                <hr class="text-center">
                <div class="d-flex justify-content-between">Offer {{ $loop->iteration }}
                    @if ($rs->status == 'terminée')
                        <a href="#"  class="text-success" style=" display: none;">voir les details</a>
                    @else
                        <a href="{{ route('user.offer.detaills', $rs->id) }}"  class="text-success">voir les details</a>
                    @endif
                </div>
            </span>

        </div>
    </div>
</div>
@endforeach
</div>

@endsection
