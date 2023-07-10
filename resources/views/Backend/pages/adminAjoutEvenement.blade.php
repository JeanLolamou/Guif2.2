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
         <div class="row" style="padding: 10px;">
           <h2>Ajout evenement</h2>
         </div>
          <div class="row" style="padding-left: 20px; padding-right: 20px;">

          <form  action="{{route ('Evenement.store')}}" method="POST" enctype="multipart/form-data" style="width: 100%;">
                     {{ csrf_field() }}
                     <div class="row">
     <div class="col-md-6">
      <div class="form-group">
     <div class="text-input">
          <input name="nomFr" type="text" id="input1" placeholder="Entrer un nom d'evenement!" value="{{ old('nomFr') }}" required="">
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
          <input name="nom" type="text" id="input1" placeholder="Enter an event name!" value="{{ old('nom') }}" required="">
          <label for="input1">Name (En) </label>
          </div>
         
          {!!$errors->first('nom','<div class="alert alert-danger">
  <strong>Erreur!</strong> <span class="error">:message</span>
</div>')!!}
  </div>
    </div>

     

    <div class="col-md-4">
       <div class="form-group">
     <div class="text-input">
          <input name="lieu" type="text" id="input2" placeholder="Entrer le lieu!" value="{{ old('lieu') }}" required="">
          <label for="input2">Lieu</label>
          </div>
         
          {!!$errors->first('lieu','<div class="alert alert-danger">
  <strong>Erreur!</strong> <span class="error">:message</span>
</div>')!!}
  </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
     <div class="text-input">
          <input name="prix" type="text" id="input1" placeholder="Entrer le prix!" value="{{ old('prix') }}" required="">
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
    <input name="image" type="file" value="{{ old('image') }}">
    {!!$errors->first('image','<div class="alert alert-danger">
  <strong>Erreur!</strong> <span class="error">:message</span>
</div>')!!}
  </div>
  
    </div>
    <div class="col-md-6">
      <div class="form-group">
    <input name="date" type="date" value="{{ old('date') }}">
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
     {{ old('descriptionFr') }}
   </textarea>
 
  </div>

  <div class="form-group">
      {!!$errors->first('description','<div class="alert alert-danger">
  <strong>Erreur!</strong> <span class="error">:message</span>
  
</div>')!!}
<label style="padding: 10px;background: salmon; color: white;">Details (En)</label><br>
   <textarea name="description" cols="20" rows="5" style="width: 80%">
     {{ old('description') }}
   </textarea>
 
  </div>

 

  



  <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Publier">
                <a href="{{route('evenement')}}" type="button"  class="btn btn-danger" >Annuler</a>
            </div>  

            </form>  
    </div>

        

           @stop