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
 width: 400px;
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
</style>

  <div class="row" style="width: 100%;padding-left: 20px;">
          @if(session()->has('message'))
                      <div class="alert alert-success alert-dismissible" style="width: 100%;">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Succés!</strong> {{session()->get('message')}}
</div>      
                                 
               @endif

         
         </div>

<script src="https://cdn.ckeditor.com/4.11.3/standard/ckeditor.js"></script>
         <div class="row" style="padding-left: 10px;">
           <h2>Modification maison</h2>
         </div>
          <div class="row" style="padding-left: 20px; padding-right: 20px;">
              @foreach ($maison as $maisons)
           <form action="{{ route ('Maison.update', $maisons->id)}}" method="post" enctype="multipart/form-data" style="width: 100%;">
                       {{ csrf_field() }}
                        {{ method_field('PUT') }}

    <div class="row">
    <div class="col-md-5">
      <div class="form-group">
     <div class="text-input">
          <input name="libelle" type="text" id="input1" placeholder="Entrer un nom!" value="{{ $maisons->libelle}}" required>
          <label for="input1">Nom</label>
          </div>
         
          {!!$errors->first('libelle','<div class="alert alert-danger">
  <strong>Erreur!</strong> <span class="error">:message</span>
</div>')!!}
  </div>
    </div>
 
    <div class="col-md-5">
      <div class="form-group">
     <div class="text-input">
          <input name="prix" type="text" id="input1" placeholder="Entrer le prix!" value="{{$maisons->prix}}">
          <label for="input1">Prix</label>
          </div>
         
          {!!$errors->first('prix','<div class="alert alert-danger">
  <strong>Erreur!</strong> <span class="error">:message</span>
</div>')!!}
  </div>
    </div>
    <div class="col-md-5" style="margin-left: 1px;">
      <div class="form-group">
     <div class="text-input">
          <input name="surface" type="text" id="input1" placeholder="Entrer une surface!" value="{{$maisons->surface}}">
          <label for="input1">Superficie</label>
          </div>
         
          {!!$errors->first('surface','<div class="alert alert-danger">
  <strong>Erreur!</strong> <span class="error">:message</span>
</div>')!!}
  </div>
    </div>
     <div class="col-md-5" style="margin-left: 1px;">
      <div class="form-group">
     <div class="text-input">
          <input name="chambre" type="text" id="input1" placeholder="Entrer le nombre de chambre!" value="{{$maisons->chambre}}">
          <label for="input1">Nbr cham.</label>
          </div>
         
          {!!$errors->first('chambre','<div class="alert alert-danger">
  <strong>Erreur!</strong> <span class="error">:message</span>
</div>')!!}
  </div>
    </div>
      <div class="col-md-5" style="margin-left: 1px;">
      <div class="form-group">
     <div class="text-input">
          <input name="toilette" type="text" id="input1" placeholder="Entrer le nombre de toilette!" value="{{$maisons->toilette}}">
          <label for="input1">Nbr toil.</label>
          </div>
         
          {!!$errors->first('toilette','<div class="alert alert-danger">
  <strong>Erreur!</strong> <span class="error">:message</span>
</div>')!!}
  </div>
    </div>
    <div class="col-md-5" style="margin-left: 1px;">
      <div class="form-group">
     <div class="text-input">
          <input name="garage" type="text" id="input1" placeholder="Entrer le nombre de garage!" value="{{$maisons->garage}}">
          <label for="input1">Nbr gar.</label>
          </div>
         
          {!!$errors->first('garage','<div class="alert alert-danger">
  <strong>Erreur!</strong> <span class="error">:message</span>
</div>')!!}
  </div>
    </div>

   
  </div>
  <div class="row" style="margin-top: 15px;">

     <div class="col-md-4">
      <div class="form-group">
      <img src="{{ asset('images/'.$maisons->image.'')}}" alt="" style="height: 50px;"><br>
    <input name="image" type="file">
    {!!$errors->first('image','<div class="alert alert-danger">
  <strong>Erreur!</strong> <span class="error">:message</span>
</div>')!!}
  </div>
  
    </div>
   
       <div class="col-md-4">
       <div class="form-group" >
        <label>Statut</label><br>
    <select name="statut" style="padding: 8px;border: 2px solid #fa8072;">
      <option value="{{$maisons->statut}}"> 
        @if($maisons->type==0)
                      A Vendre
        @else
                      A louer
        @endif</option>
      <option value="0">A vendre</option>
      <option value="1">A louer</option>
    </select>
         
          {!!$errors->first('type','<div class="alert alert-danger">
  <strong>Erreur!</strong> <span class="error">:message</span>
</div>')!!}
  </div>
    </div>
    <div class="col-md-4">
       <div class="form-group" >
        <label>Type</label><br>
   <select name="type" style="padding: 8px;border: 2px solid #fa8072;">
      <option value="{{$maisons->type}}">{{$maisons->type}}</option>
      <option value="Villa">Villa</option>
      <option value="Immeuble">Immeuble</option>
    </select>
         
          {!!$errors->first('type','<div class="alert alert-danger">
  <strong>Erreur!</strong> <span class="error">:message</span>
</div>')!!}
  </div>
    </div>
  
  </div>

  <div class="form-group">
    <label>Details</label><br>
      {!!$errors->first('details','<div class="alert alert-danger">
  <strong>Erreur!</strong> <span class="error">:message</span>
</div>')!!}
   <textarea name="details" id="details" class="details">
     {{$maisons->details}}
   </textarea>
 
  </div>


  <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Modifier">
                <a href="{{route('adminMaison')}}" type="button"  class="btn btn-infos">Annuler</a>

                 <a href="#"  data-toggle="modal" data-target="#deleteModal" type="button"  class="btn btn-danger" style="float: right;">Supprimer</a>
            </div>  

            </form>  
            @endforeach
    </div>

    <script>
                         CKEDITOR.replace( 'details');
                </script>


                 <!-- Logout Modal-->
  <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Voulez-vous vraiment supprimer cet element?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Cliquez sur SUPPRIMER si c'est le cas!</div>
        <div class="modal-footer">
           <form action="{{ route ('Maison.update', $maisons->id)}}" method="post" >
               {{ csrf_field() }}
              {{ method_field('PUT') }}
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
          <button class="btn btn-primary" type="submit"><i class="fa fa-trash"></i> SUPPRIMER</button>
                        <input type="hidden" name="sup" value="0">
          </form>
        </div>
      </div>
    </div>
  </div>

        

           @stop