@extends('layouts.app')
@section('contents')

<div class="card">
    <div class="card-body">
       <h1 class="mb-0" style="color: black">Ajouter un nouvau membre</h1>
       <hr/>
       <form action="{{route('admin.members.store')}}" method=POST>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="" style="color: black"><strong>Nom</strong> </label>
            <input type="text" class="form-control" id="inputEmail4" placeholder="Nom" name="first_name">
            <div class="invalid-feedback">
              @error('first_name')
              <span>{{$message}}</span>
              @enderror
          </div>
          </div>
          <div class="form-group col-md-6">
            <label for="" style="color: black"><strong>Prénom</strong> </label>
            <input type="text" class="form-control" id="inputPassword4" placeholder="Prénom" name="last_name">
          </div>
        </div>
        <div class="form-group">
          <label for="" style="color: black"><strong>Adresse</strong> </label>
          <input type="text" class="form-control" id="inputAddress" placeholder="Cartier/Rue, Ville, Pays" name="adresse">
        </div>
        <div class="form-group">
          <label for="inputEmail4" style="color: black"><strong>Adresse Email</strong> </label>
          <input type="email" class="form-control" id="inputAddress2" placeholder="exemple@gmail.com" name="email">
        </div>
        <div class="form-group">
          <label for="" style="color: black"><strong>Numéro de téléphone</strong> </label>
          <input type="text" class="form-control" id="inputAddress" placeholder="Numéro de téléphone" name="telephone">
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="" style="color: black"><strong>Age</strong></label>
            <input type="text" class="form-control" id="inputCity" name="age" placeholder="age">
          </div>
          <div class="form-group col-md-4">
            <label for="inputState" style="color: black"><strong>Status</strong> </label>
            <select id="inputState" class="form-control">
              <option selected>Choisie...</option>
              <option>validée</option>
              <option>rejetée</option>
            </select>
          </div>
          <div class="form-group col-md-2">
            <label for="" style="color: black"><strong>CNI</strong> </label>
            <input type="text" class="form-control" id="inputZip" placeholder="CNI">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputPassword4" style="color: black"><strong>Mot de passe</strong> </label>
            <input type="password" class="form-control" id="inputEmail4" placeholder="Mot de passe">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4" style="color: black"><strong>Confirmer le mot de passe</strong> </label>
            <input type="password" class="form-control" id="inputPassword4" placeholder="Confirmer le mot de passe">
          </div>
        </div>
        <br>
        <div class="form-group">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck" name="droit">
            <label class="form-check-label" for="gridCheck" style="color: black">
              En utilisant cette application, le membre reconnaît et accepte tous les droits et obligations qui lui sont assignés.
              <br>
                <a href="#" data-toggle="modal" data-target="#exampleModalLong">
                  Lire ici les droits et les conditions d'accès
                </a>
                
                <!-- Modal -->
                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle" style="color: #257e38"><strong>Les droits et les conditions de l'application</strong> </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi laborum reprehenderit eum nisi? 
                        Nemo, ea soluta. Magni atque rem maiores quas debitis dignissimos iste, ducimus itaque sed consequuntur expedita quia.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit tempore, excepturi iste et, velit eveniet mollitia voluptas deserunt placeat in ratione officiis. 
                        Eveniet, neque consequuntur placeat eos sapiente dolores explicabo?
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi laborum reprehenderit eum nisi? 
                        Nemo, ea soluta. Magni atque rem maiores quas debitis dignissimos iste, ducimus itaque sed consequuntur expedita quia.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit tempore, excepturi iste et, velit eveniet mollitia voluptas deserunt placeat in ratione officiis. 
                        Eveniet, neque consequuntur placeat eos sapiente dolores explicabo?
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">retour</button>
                        
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Button trigger modal -->
            </label>
          </div>
        </div>
        <div class="text-right pr-7">
          <button type="submit" class="btn btn-success" style="background-color: #257e38">Ajouter</button>
        </div>
        
      </form>
    </div>
</div>    
@endsection