@extends('Backend/templates/default')
         @section('contenu')
<!-- Breadcrumbs-->
<style type="text/css">
 
.text-input{ 
 position: relative;
 margin-top: 50px;
}
 
 input[type="text"]{
 display: inline-block;
 width: 500px;
 height: 40px;
 box-sizing: border-box;
 outline: none;
 border: 1px solid lightgray;
 border-radius: 3px;
 padding: 10px 10px 10px 100px;
 transition: all 0.1s ease-out;
 }
 
 input[type="text"] + label{
 position: absolute;
 top: 0;
 left: 0;
 bottom: 0;
 height: 40px;
 line-height: 40px;
 color: white;
 border-radius: 3px 0 0 3px;
 padding: 0 20px;
 background: #fa8072;
 transform: translateZ(0) translateX(0);
 transition: all 0.3s ease-in;
 transition-delay: 0.2s;
 }
 
 input[type="text"]:focus + label{
 transform: translateY(-120%) translateX(0%);
 border-radius: 3px;
 transition: all 0.1s ease-out;
 }
 
 input[type="text"]:focus{
 padding: 10px;
 transition: all 0.3s ease-out;
 transition-delay: 0.2s;
 }


 .boxes {
  padding: 10px;
  background: #484848;
  width: 30%
}

/*Checkboxes styles*/
input[type="checkbox"] { display: none; }

input[type="checkbox"] + label {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 20px;
  font: 14px/20px 'Open Sans', Arial, sans-serif;
  color: #ddd;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
}

input[type="checkbox"] + label:last-child { margin-bottom: 0; }

input[type="checkbox"] + label:before {
  content: '';
  display: block;
  width: 20px;
  height: 20px;
  border: 1px solid #6cc0e5;
  position: absolute;
  left: 0;
  top: 0;
  opacity: .6;
  -webkit-transition: all .12s, border-color .08s;
  transition: all .12s, border-color .08s;
}

input[type="checkbox"]:checked + label:before {
  width: 10px;
  top: -5px;
  left: 5px;
  border-radius: 0;
  opacity: 1;
  border-top-color: transparent;
  border-left-color: transparent;
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
}
</style>

<script src="https://cdn.ckeditor.com/4.11.3/standard/ckeditor.js"></script>
   <div class="row" style="width: 100%;padding: 20px;">
          @if(session()->has('message'))
                     
                     @if(isset($existe))
                 @if($existe==0)
                   <div class="alert alert-success alert-dismissible" style="width: 100%;">
                   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                   <strong>Succès!</strong> {{session()->get('message')}}
                   </div>
                   @else 

                    <div class="alert alert-danger alert-dismissible" style="width: 100%;">
                   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                   <strong>Succès!</strong> {{session()->get('message')}}
                   </div>

                  @endif

           @else  

                  <div class="alert alert-danger alert-dismissible" style="width: 100%;">
                   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                   <strong>Succés!</strong> {{session()->get('message')}}
                   </div>  
           @endif  
                                 
               @endif

               
         
         </div>
         <div class="row" style="padding: 10px;">
           <h2>Modifier evenement</h2>
         </div>
          <div class="row" style="padding-left: 20px; padding-right: 20px;">
   @foreach ($evenement as $evenement)
           <form action="{{ route ('Evenement.update', $evenement->id_evenement)}}" method="post" enctype="multipart/form-data" style="width: 100%;">
                       {{ csrf_field() }}
                        {{ method_field('PUT') }}
                     <div class="row">
    <div class="col-md-6">
      <div class="form-group">
     <div class="text-input">
          <input name="nomFr" type="text" id="input1" placeholder="Entrer un nom d'evenement!" value="{{$evenement->nomFr}}" required="">
          <label for="input1">Nom (Fr)</label>
          </div>
         
          {!!$errors->first('nomFr','<div class="alert alert-danger">
  <strong>Erreur!</strong> <span class="error">:message</span>
</div>')!!}
  </div>
    </div>

    <div class="col-md-6">
      <div class="form-group">
     <div class="text-input">
          <input name="nom" type="text" id="input1" placeholder="Enter an event name!" value="{{$evenement->nom}}" required="">
          <label for="input1">Name (En) </label>
          </div>
         
          {!!$errors->first('nom','<div class="alert alert-danger">
  <strong>Erreur!</strong> <span class="error">:message</span>
</div>')!!}
  </div>
    </div>
    <div class="col-md-3">
       <div class="form-group">
     <div class="text-input">
          <input name="lieu" type="text" id="input2" placeholder="Entrer le lieu!" value="{{$evenement->lieu}}" required="">
          <label for="input2">Lieu</label>
          </div>
         
          {!!$errors->first('lieu','<div class="alert alert-danger">
  <strong>Erreur!</strong> <span class="error">:message</span>
</div>')!!}
  </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
     <div class="text-input">
        <input name="prix" type="text" id="input1" placeholder="Entrer le prix!" value="{{$evenement->prix}}" required="">
          <label for="input1">Prix</label>
          </div>
         
          {!!$errors->first('prix','<div class="alert alert-danger">
  <strong>Erreur!</strong> <span class="error">:message</span>
</div>')!!}
  </div>
    </div>
  </div>

<br>
  <div class="row">
    <div class="col-md-4">
      <div class="form-group">
        <img src="{{ asset('/images/evenement/'.$evenement->image.'')}}" alt="" style="height: 50px;"><br>
    <input name="image" type="file" value="{{ old('image') }}">
    {!!$errors->first('image','<div class="alert alert-danger">
  <strong>Erreur!</strong> <span class="error">:message</span>
</div>')!!}
  </div>
  
    </div>
    <div class="col-md-6">
      <div class="form-group">
    <input name="date" type="date" value="{{$evenement->date}}">
    {!!$errors->first('date','<div class="alert alert-danger">
  <strong>Erreur!</strong> <span class="error">:message</span>
</div>')!!}
  </div>
    </div>
  </div>

  <br>
  <div class="form-group">
      {!!$errors->first('descriptionFr','<div class="alert alert-danger">
  <strong>Erreur!</strong> <span class="error">:message</span>
 
</div>')!!}
 <label style="padding: 10px;background: salmon; color: white;">Détails (Fr)</label><br>
   <textarea name="descriptionFr" cols="20" rows="5" style="width: 80%">
     {{$evenement->descriptionFr}}
   </textarea>
 
  </div>

  <div class="form-group">
      {!!$errors->first('description','<div class="alert alert-danger">
  <strong>Erreur!</strong> <span class="error">:message</span>
</div>')!!}
<label style="padding: 10px;background: salmon; color: white;">Détails (En)</label><br>
   <textarea name="description" cols="20" rows="5" style="width: 100%">
     {{$evenement->description}}
   </textarea>
 
  </div>

 

  


  <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Modifier">
                <a href="{{route('evenement')}}" type="button"  class="btn btn-danger" >Annuler</a>
                 <a href="#"  data-toggle="modal" data-target="#deleteEventModal" type="button"  class="btn btn-danger" style="float: right;">Supprimer</a>
                  <a href="#"  data-toggle="modal" data-target="#addEventModal" type="button"  class="btn btn-info" style="float: right;margin-right: 5px;">Ajouter au flash</a>
            </div>  

            </form>  

           
    </div>


    <!-- Add to event-->
  <div class="modal fade" id="addEventModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Voulez-vous vraiment ajouter cet evenement au flash ?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Cliquer sur AJOUTER si c'est le cas !</div>
        <div class="modal-footer">
           <form action="{{ route ('Evenement.update', $evenement->id_evenement)}}" method="post" >
               {{ csrf_field() }}
              {{ method_field('PUT') }}
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
          <button class="btn btn-primary" type="submit"><i class="fa fa-check"></i> Ajouter</button>
                        <input type="hidden" name="event" value="0">
                        <input type="hidden" name="titre" value="{{$evenement->nom}}">
                        <input type="hidden" name="titreFr" value="{{$evenement->nomFr}}">

          </form>
        </div>
      </div>
    </div>
  </div>



    <!-- Logout Deletevent-->
  <div class="modal fade" id="deleteEventModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Voulez-vous vraiment supprimer cet evenement ?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Cliquer sur SUPPRIMER si c'est le cas !</div>
        <div class="modal-footer">
           <form action="{{ route ('Evenement.update', $evenement->id_evenement)}}" method="post" >
               {{ csrf_field() }}
              {{ method_field('PUT') }}
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
          <button class="btn btn-primary" type="submit"><i class="fa fa-trash"></i> Supprimer</button>
                        <input type="hidden" name="sup" value="0">

          </form>
        </div>
      </div>
    </div>
  </div>
 @endforeach
        

           @stop