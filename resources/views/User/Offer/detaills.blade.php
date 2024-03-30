@extends('layouts.app')
@section('contents')
    <div class="row">
        <!-- Area Chart -->
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h3 class="m-0 font-weight-bold"  style="color: #257e38">Les détails</h3>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <h5 class="m-0 font-weight-bold" style="color: black; ">Description</h5>
                    <p style="margin-top: 15px; margin-left: 10px;">{{$offer->description}}</p>
                    <hr class="text-center" style="margin-top: 25px; margin-bottom: 25px">
                    <h5 class="m-0 font-weight-bold" style="color: black; margin-top: 60px; ">Information</h5>
                    <table class="table table-borderless" style="margin-top: 10px;">
                        <thead>
                          <tr>
                           <th scope="col">La somme :</th>
                            <td>{{$offer->somme}} DH</td>
                           </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="col">le montant mensuel :</th>
                            <td>{{$offer->Montant_Mensuel()}} DH</td>
                          </tr>
                          <tr>
                            <th scope="col">La période :</th>
                            <td>{{$offer->période}} mois</td>
                          </tr>
                          <tr>
                            <th scope="col">Nombre de participants :</th>
                            <td colspan="2">{{$offer->nbr_de_participant}} / {{$offer->période}}</td>
                          </tr>
                          <tr>
                            <th scope="col">Date de paiement :</th>
                            <td colspan="2">le {{$offer->date_paiment}} chaque mois</td>
                          </tr>
                        </tbody>
                    </table>
                    <div class="text-right pr-7">
                      <!-- Button trigger modal -->
                      {{-- <form action="{{ route('user.offer.participer') }}" method="POST">
                            @csrf
                            <input type="hidden" name="offer_id" value="{{ $offer->id }}"> --}}
                            {{-- <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"> --}}
                            <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal" style="background-color: #257e38; color:white">
                              Participer
                            </button>
                        {{-- </form> --}}
                      <!-- Modal -->
                      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h3 class="modal-title" id="exampleModalLabel" style="color: black"><strong>Participer dans cette offre</strong> </h3>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body text-center">
                                <p style="color: black">Votre dart commencera après que toutes les demandes d'inscription auront été enregistrées et que le tirage aura été effectué.</p>
                                <p style="color: #257e38"><b>Êtes-vous sûr de vouloir vous inscrire à cette offre ?</b></p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                              <form action="{{ route('user.offer.participer',$offer->id) }}" method="POST">
                                @csrf
                                <input type="hidden" name="offer_id" value="{{ $offer->id }}">
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <button type="submit" class="btn" style="background-color: #257e38; color: white">
                                  Confirmer
                                </button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                 </div>
              </div>
        </div>

        <!-- Pie Chart -->
        <div class="col-xl-4 col-lg-5" style="background-color: transparent ;">
            <div class="card shadow mb-4" style="border: 1px solid transparent; border-radius: 5%;">
                <img src="{{asset('img/dolar.jpg')}}" alt="" style="background-size: cover;
                    background-position: center; border: 1px solid transparent; border-radius: 5%;">
            </div>
        </div>
    </div>
@endsection











