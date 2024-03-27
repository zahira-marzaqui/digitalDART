@extends('layouts.app')
@section('contents')
<div class="row">
    <!-- Area Chart -->
    <div class="col-xl-8 col-lg-7">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h3 class="m-0 font-weight-bold"  style="color: #257e38">Les détails</h3>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <h5 class="m-0 font-weight-bold" style="color: black; ">Description</h5>
                <p style="margin-top: 15px; margin-left: 10px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate mollitia recusandae nulla ad fuga veritatis, velit similique dolorum maxime ipsa quos itaque odio excepturi at incidunt. Non reiciendis reprehenderit molestiae.</p>     
                <hr class="text-center" style="margin-top: 25px; margin-bottom: 25px">
                <h5 class="m-0 font-weight-bold" style="color: black; margin-top: 60px; ">Information</h5>                
                <table class="table table-borderless" style="margin-top: 10px;">
                    <thead>
                      <tr>
                       <th scope="col">La somme :</th>
                        <td>9000 DH</td>
                       </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="col">le montant mensuel :</th>
                        <td>1000 DH</td>
                      </tr>
                      <tr>
                        <th scope="col">La période :</th>
                        <td>9 mois</td>
                      </tr>
                      <tr>
                        <th scope="col">Les mois restants :</th>
                        <td colspan="2">4 mois</td>
                      </tr>
                      <tr>
                        <th scope="col">Les mois payés :</th>
                        <td colspan="2">5 mois</td>
                      </tr>
                      <tr>
                        <th scope="col">Date de paiement :</th>
                        <td colspan="2">le 03 chaque mois</td>
                      </tr>
                      <tr>
                        <th scope="col">Mon classement :</th>
                        <td colspan="2">le 7éme</td>
                      </tr>
                    </tbody>
                </table>
                <div class="text-right pr-7">
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter" style="color: white ; background-color: #257e38">
                                    Effectuer votre paiement
                  </button>
                </div>
                
                
                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLongTitle" style="color: black"><strong>Effectuer votre paiement</strong> </h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="inputEmail4" style="color: black">Montant</label>
                              <input type="text" class="form-control" id="inputEmail4" placeholder="montant">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputPassword4" style="color: black">Tour(mois)</label>
                              <input type="text" class="form-control" id="inputPassword4" placeholder="tour">
                            </div>
                          </div>
                          
                            <div class="form-group">
                              <label for="inputState" style="color: black">Mode de paiement</label>
                              <select id="inputState" class="form-control">
                                <option selected>Choisie...</option>
                                <option>Visa Cart</option>
                                <option>PayPal</option>
                                <option>Banque</option>
                              </select>
                            </div>
                          
                          {{-- <div class="form-group">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="gridCheck">
                              <label class="form-check-label" for="gridCheck">
                                Check me out
                              </label>
                            </div>
                          </div> --}}
                          
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                        <button type="button" class="btn btn-success" style="background-color: #257e38">Payer</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
      </div>  
                                
                                
                    
                <!-- Button trigger modal -->
    



    <div class="col-xl-4 col-lg-5" style="background-color: transparent ;">
        <div class="card shadow mb-4" >
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h3 class="m-0 font-weight-bold"  style="color: #257e38">Historique de paiement</h3>
            </div>
        <!-- Card Body -->
            <div class="card-body">
                <table class="table table-borderless" style="margin-top: 10px;">
                    <thead>
                      <tr>
                       <th scope="col">Mois 1 :</th>
                        <td>
                            <img src="{{asset('img/check.png')}}" alt="" style="background-size: cover;
                            width: 25px; height: auto ;"> 
                        </td>
                       </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="col">Mois 2 :</th>
                        <td>
                            <img src="{{asset('img/check.png')}}" alt="" style="background-size: cover;
                            width: 25px; height: auto ;"> 
                        </td>
                      </tr>
                      <tr>
                        <th scope="col">Mois 3 :</th>
                        <td>
                            <img src="{{asset('img/check.png')}}" alt="" style="background-size: cover;
                            width: 25px; height: auto ;"> 
                        </td>
                      </tr>
                      <tr>
                        <th scope="col">Mois 4 :</th>
                        <td colspan="2">
                            <img src="{{asset('img/check.png')}}" alt="" style="background-size: cover;
                            width: 25px; height: auto ;"> 
                        </td>
                      </tr>
                      <tr>
                        <th scope="col">Mois 5 :</th>
                        <td colspan="2">
                            <img src="{{asset('img/check.png')}}" alt="" style="background-size: cover;
                            width: 25px; height: auto ;"> 
                        </td>
                      </tr>
                      <tr>
                        <th scope="col">Mois 6 :</th>
                        <td colspan="2">
                            <img src="{{asset('img/x.png')}}" alt="" style="background-size: cover;
                            width: 25px; height: auto ;">
                        </td>
                      </tr>
                      <tr>
                        <th scope="col">Mois 7 :</th>
                        <td colspan="2">
                            <img src="{{asset('img/x.png')}}" alt="" style="background-size: cover;
                            width: 25px; height: auto ;">
                        </td>
                      </tr>
                      <tr>
                        <th scope="col">Mois 8 :</th>
                        <td colspan="2">
                            <img src="{{asset('img/x.png')}}" alt="" style="background-size: cover;
                            width: 25px; height: auto ;">
                        </td>
                      </tr>
                      <tr>
                        <th scope="col">Mois 9 :</th>
                        <td colspan="2">
                            <img src="{{asset('img/x.png')}}" alt="" style="background-size: cover;
                            width: 25px; height: auto ;">
                        </td>
                      </tr>
                    </tbody>
                </table>
                <nav aria-label="Page navigation example">
                  <ul class="pagination">
                    <li class="page-item">
                      <a class="page-link" href="#" aria-label="Previous" style="color: #257e38">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                      </a>
                    </li>
                    <li class="page-item" style="color: #257e38"><a class="page-link" href="#" style="color: #257e38">1</a></li>
                    <li class="page-item" style="color: #257e38"><a class="page-link" href="#" style="color: #257e38">2</a></li>
                    <li class="page-item" style="color: #257e38"><a class="page-link" href="#" style="color: #257e38">3</a></li>
                    <li class="page-item" style="color: #257e38">
                      <a class="page-link" href="#" aria-label="Next" style="color: #257e38">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                      </a>
                    </li>
                  </ul>
                </nav>
            </div>   

        </div>
    </div>  
    
@endsection
