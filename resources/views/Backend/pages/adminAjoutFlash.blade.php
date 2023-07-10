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
           <h2>Ajout Flash</h2>
         </div>
          <div class="row" style="padding-left: 20px; padding-right: 20px;">

          <form  action="{{route ('Flash.store')}}" method="POST" enctype="multipart/form-data" style="width: 100%;">
                     {{ csrf_field() }}
                     <div class="row">
     <div class="col-md-6">
      <div class="form-group">
     <div class="text-input">
        <input name="titreFr" type="text" id="input1" placeholder="Entrer un titre!" value="{{ old('titreFr') }}" required="">
          <label for="input1">Titre (Fr)</label>
          </div>
         
          {!!$errors->first('titreFr','<div class="alert alert-danger">
  <strong>Erreur!</strong> <span class="error">:message</span>
</div>')!!}
  </div>
    </div>

    <div class="col-md-6">
      <div class="form-group">
     <div class="text-input">
        <input name="titre" type="text" id="input1" placeholder="Enter a title!" value="{{ old('titre') }}" required="">
          <label for="input1">Title (En) </label>
          </div>
         
          {!!$errors->first('titre','<div class="alert alert-danger">
  <strong>Erreur!</strong> <span class="error">:message</span>
</div>')!!}
  </div>
    </div>

  
   
  </div>
  <br>

  <div class="form-group">
      {!!$errors->first('contenuFr','<div class="alert alert-danger">
  <strong>Erreur!</strong> <span class="error">:message</span>
</div>')!!}
<label style="padding: 10px;background: salmon; color: white;">Détails (Fr)</label><br>
   <textarea name="contenuFr" cols="20" rows="5" style="width: 80%">
     {{ old('contenuFr') }}
   </textarea>
 
  </div>



  <div class="form-group">
      {!!$errors->first('contenu','<div class="alert alert-danger">
  <strong>Erreur!</strong> <span class="error">:message</span>
</div>')!!}
<label style="padding: 10px;background: salmon; color: white;">Details (En)</label><br>
   <textarea name="contenu" cols="20" rows="5" style="width: 80%">
     {{ old('contenu') }}
   </textarea>
 
  </div>

 

  



  <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Publier">
                <a href="{{route('flash')}}" type="button"  class="btn btn-danger" >Annuler</a>
            </div>  

            </form>  
    </div>

        

           @stop