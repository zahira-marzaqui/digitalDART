@extends('layouts.app')
@section('contents')

<div class="card">
    <div class="card-body">
       <h1 class="mb-0" style="color: black">Ajouter une nouvelle offre</h1>
      <hr />
      <form action="{{ route('user.offer.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="col mb-3">
              <div class="col">
                  <label for="validationCustom02" style="color: #23a92c"><strong>la somme :</strong> </label>
                  <input type="text" name="somme" class="form-control" placeholder="Somme">
              </div>
          </div>
  
  
          <div class="col mb-3">
              <div class="col">
                <label for="validationCustom02" style="color: #23a92c"><strong>la période :</strong> </label>
                  <input type="text" name="période" class="form-control" placeholder="Entrer la période de cette offer en mois">
              </div>
          </div>
  
        {{--  <div class="col mb-3">
              <div class="col">
                <label for="validationCustom02" style="color: #23a92c"><strong>le status :</strong> </label>
                  // <checkbox class="form-control" name="status" placeholder="status"></checkbox> 
                  <select name="status" class="form-control">
                    <option value="#">options</option>
                    <option value="en cours">en cours</option>
                    <option value="terminée">terminée</option>
                  </select>
              </div>
          </div>--}}
  
          <div class="col mb-3">   
              <div class="col">
                <label for="validationCustom02" style="color: #23a92c"><strong>Date de paiement :</strong> </label>
                  {{-- <checkbox class="form-control" name="status" placeholder="status"></checkbox> --}}
                  <select name="date_paiment" class="form-control">
                    <option value="#">options</option>
                    <option value="1">01</option>
                    <option value="2">02</option>
                    <option value="3">03</option>
                    <option value="4">04</option>
                    <option value="5">05</option>
                    <option value="6">06</option>
                    <option value="7">07</option>
                    <option value="8">08</option>
                    <option value="9">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                  </select>
              </div>
          </div>
  
          {{-- <div class="col mb-3">
            <div class="col">
              <label for="validationCustom02" style="color: #23a92c"><strong>nombre maximum des personnes :</strong> </label>
                <input type="text" name="nbr_max_participant" class="form-control" placeholder="Entrer le nombre maximum des personnes">
            </div>
        </div> --}}
  
          <div class="col mb-3">
            <div class="col">
              <label for="validationCustom02" style="color: #23a92c"><strong>Description :</strong> </label>
              <textarea type="text" name="description" class="form-control" placeholder="Entrer une petite description pour cette offer"></textarea>
            </div>
          </div>
   
          <div class="row">
              <div class="d-grid">
                  <button type="submit" class="btn btn-primary" style="background-color: #257e38">Enregister</button>
              </div>
          </div>
      </form> 
    </div>
  </div>
@endsection  