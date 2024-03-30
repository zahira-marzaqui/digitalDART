@extends('layouts.app')
@section('contents')

<div class="d-flex align-items-center justify-content-between">
  <h1 class="mb-0">Espace Paiement</h1>
</div>
<br>

@if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
    </div>
@endif

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    {{-- <h1 class="h3 mb-0 text-gray-800">Mes Darts</h1> --}}
</div>


<div class="row">
  {{-- @dd($usersByPeriod) --}}
  {{-- @foreach ($usersByPeriod as $month => $users) 
    <div class="col-xl-8 col-lg-7">
      <div. class="card shadow mb-4">
        
        <div class="card-header">
        <a href="#" style="color: #257e38" class="h5"><strong>Mois {{$month}}</strong></a>
      </div>
  
      
      <div class="card-body">
        <table class="table table-hover"> 
          <thead>
            <tr>
              <th scope="col" style="color: black" class="px-7">id</th>
              <th scope="col" style="color: black" class="px-7">Nom complet</th>
              
              <th scope="col" style="color: black" class="px-7">a payé?</th>
            </tr>
          </thead> 
           <tbody>
              @foreach ($users as $user)
          
              <tr>
                <th scope="row" class="px-7">{{$user->id}}</th>
                <td class="px-7">{{$user->first_name}} {{$user->last_name}}</td>
                
                <td style="color : white" class="px-7" >
                       <img src="{{asset('img/check.png')}}" alt="" style="background-size: cover;
                       width: 20px; height: auto ;">
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        <div class="d-flex align-items-center justify-content-between">
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
  
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter" style="color: white ; background-color: #257e38">
            Effectuer votre paiement
          </button>
  
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
                        <label for="" style="color: black">Tour(mois)</label>
                        <input type="text" class="form-control" id="inputPassword4" placeholder="tour">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="" style="color: black">Nom de participant</label>
                      <input type="text" class="form-control" id="inputPassword4" placeholder="Nom">
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
    </div.>
  </div>
  @endforeach  --}}


   <!-- Afficher les liens de pagination -->
   {{-- <div class="d-flex justify-content-center">
     {{ $usersByPeriod->links() }}
   </div> --}}




 <div class="col-xl-8 col-lg-7">
  <div class="card shadow mb-4">
    <div class="card-header" >
        <a href="#" style="color: #257e38" class="h5"><strong>Mois 1</strong></a>
    </div>
    <div class="card-body">
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col" style="color: black">id</th>
                <th scope="col" style="color: black" >Nom complet</th>
                <th scope="col" style="color: black">Classement</th>
                <th scope="col" style="color: black">a payé ?</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Zahira Marzaqui</td>
                <td>la 1er</td>
                <td style="color : white" >
                       <img src="{{asset('img/check.png')}}" alt="" style="background-size: cover;
                       width: 25px; height: auto ;">
                </td>
              </tr>
              <tr>
                <th scope="row">1</th>
                <td>khadija Idhamou</td>
                <td>la 2éme</td>
                <td style="color : white" >
                       <img src="{{asset('img/check.png')}}" alt="" style="background-size: cover;
                       width: 25px; height: auto ;">
                </td>
              </tr>
              
              <tr>
                <th scope="row">1</th>
                <td>Johni Doe</td>
                <td>le 3éme</td>
                <td style="color : white">
                       <img src="{{asset('img/check.png')}}" alt="" style="background-size: cover;
                       width: 25px; height: auto ;">
                </td>
              </tr>
            </tbody>
          </table>
          <div class="d-flex align-items-center justify-content-between">
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
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter" style="color: white ; background-color: #257e38">
            Effectuer votre paiement
          </button>
  
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
                        <label for="" style="color: black">Tour(mois)</label>
                        <input type="text" class="form-control" id="inputPassword4" placeholder="tour">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="" style="color: black">Nom de participant</label>
                      <input type="text" class="form-control" id="inputPassword4" placeholder="Nom">
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
 </div>
 <div class="col-xl-8 col-lg-7">
  <div class="card shadow mb-4">
    <div class="card-header" >
        <a href="#" style="color: #257e38" class="h5"><strong>Mois 2</strong></a>
    </div>
    <div class="card-body">
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col" style="color: black">id</th>
                <th scope="col" style="color: black" >Nom complet</th>
                <th scope="col" style="color: black">Classement</th>
                <th scope="col" style="color: black">a payé ?</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Zahira Marzaqui</td>
                <td>la 1er</td>
                <td style="color : white" >
                       <img src="{{asset('img/check.png')}}" alt="" style="background-size: cover;
                       width: 25px; height: auto ;">
                </td>
              </tr>
              <tr>
                <th scope="row">1</th>
                <td>khadija Idhamou</td>
                <td>la 2éme</td>
                <td style="color : white" >
                       <img src="{{asset('img/check.png')}}" alt="" style="background-size: cover;
                       width: 25px; height: auto ;">
                </td>
              </tr>
              <tr>
                <th scope="row">1</th>
                <td>Johni Doe</td>
                <td>le 3éme</td>
                <td style="color : white">
                       <img src="{{asset('img/x.png')}}" alt="" style="background-size: cover;
                       width: 20px; height: auto ;">
                </td>
              </tr>
            </tbody>
          </table>
          <div class="d-flex align-items-center justify-content-between">
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
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter" style="color: white ; background-color: #257e38" disabled>
            Effectuer votre paiement
          </button>
  
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
                        <label for="" style="color: black">Tour(mois)</label>
                        <input type="text" class="form-control" id="inputPassword4" placeholder="tour">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="" style="color: black">Nom de participant</label>
                      <input type="text" class="form-control" id="inputPassword4" placeholder="Nom">
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
  </div>
</div>





@endsection