@extends('layouts.app')
@section('contents')


<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-flex align-items-center justify-content-between">
    <h1 class="mb-0">Mes Darts</h1>
</div>
<br>

  <div class="row">
      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                              Total Darts </div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800">10</div>
                      </div>
                      <div class="col-auto">
                          <i class="fas fa-calendar fa-2x text-gray-300"></i>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <!-- Earnings (Annual) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-success shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                              Darts payer</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800">3</div>
                      </div>
                      <div class="col-auto">
                          <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <!-- Tasks Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-info shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                            Darts non payer
                          </div>
                          <div class="row no-gutters align-items-center">
                              <div class="col-auto">
                                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">3</div>
                              </div>
                              {{-- <div class="col">
                                  <div class="progress progress-sm mr-2">
                                      <div class="progress-bar bg-info" role="progressbar"
                                          style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                          aria-valuemax="100"></div>
                                  </div>
                              </div> --}}
                          </div>
                      </div>
                      <div class="col-auto">
                          <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <!-- Pending Requests Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-warning shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                              Darts pas encore fermée
                            </div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800">4</div>
                      </div>
                      <div class="col-auto">
                          <i class="fas fa-comments fa-2x text-gray-300"></i>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- End Donut Chart -->
  <br>




<div class="d-sm-flex align-items-center justify-content-between mb-4">
    {{-- <h1 class="h3 mb-0 text-gray-800">Mes Darts</h1> --}}
</div>
 
<div class="card mb-4">
    <div class="card-header" >
        <a href="#" style="color: #257e38" class="h5"><strong>Dart 1</strong></a>
    </div>
    <div class="card-body">
        <table class="table table-borderless">
            <thead>
              <tr>
                <th scope="col" style="color: black">La somme</th>
                <th scope="col" style="color: black">la période</th>
                <th scope="col" style="color: black">Les mois payés</th>
                <th scope="col" style="color: black">Les mois restants</th>
                <th scope="col" style="color: black">Mon classement</th>
                <th scope="col" style="color: black">Le progrès</th>
                <th scope="col" style="color: black">Payer</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>9000 DH</td>
                <td>9 mois</td>
                <td>5 mois</td>
                <td>4 mois</td>
                <td>Le 7éme</td>
                <td style="color : white">
                    {{-- @if ($rs->status == 'terminée') --}}
                       {{-- <h1 class="badge bg-success">félicitation, Dart accomplie</h1> --}}
                       <h1 class="badge bg-gradient-warning">pas encore terminée</h1>
                    {{-- @else 
                      <h1 class="badge bg-success">{{ $rs->status}}</h1>
                    @endif --}}
                </td>
                <td>
                  <a href="{{route('user.mydart.paiement')}}"><img src="{{asset('img/dolarIcon.png')}}" alt="" style="background-size: cover;
                  width: 60px; height: auto ; margin-top: -12px"> </a> 
                </td>

              </tr>
            </tbody>
          </table>
    </div>
</div>

<div class="card mb-4">
  <div class="card-header">
    <a href="#" style="color: #257e38" class="h5"><strong>Dart 2</strong></a>  
  </div>
  <div class="card-body">
      <table class="table table-borderless">
          <thead>
            <tr>
              <th scope="col" style="color: black">La somme</th>
              <th scope="col" style="color: black">la période</th>
              <th scope="col" style="color: black">Les mois payés</th>
              <th scope="col" style="color: black">Les mois restants</th>
              <th scope="col" style="color: black">Mon classement</th>
              <th scope="col" style="color: black">Le progrès</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>9000 DH</td>
              <td>9 mois</td>
              <td>5 mois</td>
              <td>4 mois</td>
              <td>Le 7éme</td>
              <td style="color : white">
                  {{-- @if ($rs->status == 'terminée') --}}
                     <h1 class="badge bg-success">félicitation, Dart accomplie</h1>
                     {{-- <h1 class="badge bg-gradient-warning">pas encore terminée</h1> --}}
                  {{-- @else 
                    <h1 class="badge bg-success">{{ $rs->status}}</h1>
                  @endif --}}
              </td>
            </tr>
          </tbody>
        </table>
  </div>
</div>





@endsection