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
           <h2>Modification profil</h2>
         </div>
          <div class="row" style="padding-left: 20px; padding-right: 20px;">

            @foreach ($users as $users)
           <form action="{{ route ('User.update', $users->id)}}" method="post" enctype="multipart/form-data" style="width: 100%;">
                       {{ csrf_field() }}
                        {{ method_field('PUT') }}
                     <div class="row">
    <div class="col-md-12">
      <div class="form-group">
     <div class="text-input">
       <label for="input1">Nom</label>
           <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{$users->name}}" required autofocus>                 
         
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
           <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{$users->email}}" required>      
          
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
       <div class="form-group" >
        <label>Fonction</label>
    <select name="poste" style="width: 100%;padding: 8px;border: 2px solid #fa8072;">
      <option value="{{$users->poste}}">{{$users->poste}}</option>
       @if(Auth::user()->poste=="Administrateur")
      <option value="Communication">Communication</option>
        <option value="Statisticien">Statisticien</option>
       <option value="Documentaliste">Documentaliste</option>
         <option value="Administrateur">Administrateur</option>
         @endif
    </select>
         
          {!!$errors->first('mois','<div class="alert alert-danger">
  <strong>Erreur!</strong> <span class="error">:message</span>
</div>')!!}
  </div>
      
    </div>
  </div>

  
 

  



  <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Modifier">
                <a href="{{route('home')}}" type="button"  class="btn btn-danger" >Annuler</a>
                 <a href="#"  data-toggle="modal" data-target="#pass" type="button"  class="btn btn-danger" style="float: right;">Modifier le mot de pass</a>

            </div>  

            </form> 
            @endforeach 
    </div>



                 <!-- Logout Modal-->
  <div class="modal fade" id="pass" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modification mot de pass</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
           <form action="{{ route ('User.update', $users->id)}}" method="post" >
               {{ csrf_field() }}
              {{ method_field('PUT') }}
               <div class="form-group">
     <div class="text-input">
          <label for="input1">Mot de pass</label>
          <input name="pass" type="password" id="input1" placeholder="Nouveau mot de pass" required ="" style="width: 100%">
          </div>
  </div>
        </div>
        <div class="modal-footer">
          
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
          <button class="btn btn-primary" type="submit"><i class="fa fa-edit"></i> Modifier</button>
                      
          </form>
        </div>
      </div>
    </div>
  </div>

        

           @stop