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

<script src="https://cdn.ckeditor.com/4.11.3/standard/ckeditor.js"></script>
 <div class="row" style="width: 100%;padding: 20px;">
          @if(session()->has('message'))
                      <div class="alert alert-success alert-dismissible" style="width: 100%;">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Succés!</strong> {{session()->get('message')}}
</div>      
                                 
               @endif
         
         </div>
         <div class="row" style="padding: 10px;">
           <h2>Ajout Vehicule</h2>
         </div>
          <div class="row" style="padding-left: 20px; padding-right: 20px;">

          <form  action="{{route ('Vehicule.store')}}" method="POST" enctype="multipart/form-data" style="width: 100%;">
                     {{ csrf_field() }}
  <div class="row">
    <div class="col-md-5">
      <div class="form-group">
     <div class="text-input">
          <input name="libelle" type="text" id="input1" placeholder="Entrer un nom!" value="{{ old('libelle') }}" required>
          <label for="input1">Libelle</label>
          </div>
         
          {!!$errors->first('libelle','<div class="alert alert-danger">
  <strong>Erreur!</strong> <span class="error">:message</span>
</div>')!!}
  </div>
    </div>
 
    <div class="col-md-5">
      <div class="form-group">
     <div class="text-input">
          <input name="prix" type="text" id="input1" placeholder="Entrer le prix!" value="{{ old('prix') }}">
          <label for="input1">Prix</label>
          </div>
         
          {!!$errors->first('prix','<div class="alert alert-danger">
  <strong>Erreur!</strong> <span class="error">:message</span>
</div>')!!}
  </div>
    </div>
   
    
   
  </div>
  <div class="row" style="margin-top: 15px;">
   <div class="col-md-5">
      <div class="form-group">
    <input name="image" type="file" value="{{ old('image') }}" required>
    {!!$errors->first('image','<div class="alert alert-danger">
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
     {{ old('details') }}
   </textarea>
 
  </div>

  <div class="row">
    <div class="col-md-4">
      <div class="form-group">
    <input name="file[]" type="file" value="{{ old('file') }}" multiple>
    {!!$errors->first('file','<div class="alert alert-danger">
  <strong>Erreur!</strong> <span class="error">:message</span>
</div>')!!}
  </div>
  
    </div>
  
  </div>

  <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Ajouter">
                <a href="{{route('adminVehicule')}}" type="button"  class="btn btn-danger" >Annuler</a>
            </div>  

            </form>  
    </div>

    <script>
                        CKEDITOR.replace( 'details');



                </script>

        

           @stop