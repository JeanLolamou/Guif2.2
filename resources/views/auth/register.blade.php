@extends('Backend/templates/default')
         @section('contenu')
<!-- Breadcrumbs-->
<style type="text/css">
 

</style>

 <div class="row" style="width: 100%;padding: 20px;">
          @if(session()->has('message'))
                      <div class="alert alert-success alert-dismissible" style="width: 100%;">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Succés!</strong> {{session()->get('message')}}
</div>      
                                 
               @endif
         
         </div>

         <div class="row" style="padding: 10px;">
           <h2>Ajout utilisateur</h2>
         </div>
          <div class="row" style="padding-left: 20px; padding-right: 20px;">

          <form method="POST" action="{{ route ('User.store')}}">
                        @csrf
                     <div class="row">
    <div class="col-md-12">
      <div class="form-group">
     <div class="text-input">
       <label for="input1">Nom</label>
           <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>                 
         
          </div>

      @if ($errors->has('name'))
        <div class="alert alert-danger">
          <strong>Erreur!</strong> <span class="error">{{ $errors->first('name') }}</span>
        </div>
       @endif
  </div>
    </div>
    <div class="col-md-12">
       <div class="form-group">
     <div class="text-input">
      <label for="input2">E-mail</label>
           <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>      
          
          </div>
          @if ($errors->has('email'))
             <div class="alert alert-danger">
             <strong>Erreur!</strong> <span class="error">{{ $errors->first('email') }}</span>
            </div>
           @endif
         
  </div>
    </div>
  </div>


  <div class="row">
    <div class="col-md-12">
      <div class="form-group">
        <label for="input1">Mot de pass</label>
    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
    

                                @if ($errors->has('password'))
                                <div class="alert alert-danger">
                                <strong>Erreur!</strong> <span class="error">{{ $errors->first('password') }}</span>
                                </div>
                                @endif
  </div>
  
    </div>
    <div class="col-md-12">
      <div class="form-group">
        <label for="input1">Confirmer mot de pass</label>
   <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
    

                    
  </div>
    </div>
    <div class="col-md-12">
       <div class="form-group" >
    <select name="poste" style="width: 100%;padding: 8px;border: 2px solid #fa8072;">
      <option value="Communication">Communication</option>
        <option value="Statisticien">Statisticien</option>
       <option value="Documentaliste">Documentaliste</option>
         <option value="Administrateur">Administrateur</option>
          <option value="Assistance">Assistance</option>
    </select>
         
          {!!$errors->first('mois','<div class="alert alert-danger">
  <strong>Erreur!</strong> <span class="error">:message</span>
</div>')!!}
  </div>
      
    </div>
  </div>

  
 

  



  <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Créer">
                <a href="{{route('home')}}" type="button"  class="btn btn-danger" >Annuler</a>
            </div>  

            </form>  
    </div>

        

           @stop