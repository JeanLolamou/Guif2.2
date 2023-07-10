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
</style>

<script src="https://cdn.ckeditor.com/4.11.3/standard/ckeditor.js"></script>
         <div class="row" style="padding: 10px;">
           <h2>Ajout Communiqué</h2>
         </div>
          <div class="row" style="padding-left: 20px; padding-right: 20px;">

          <form  action="{{route ('Communiquer.store')}}" method="POST" enctype="multipart/form-data" style="width: 100%;">
                     {{ csrf_field() }}
  <div class="form-group">
     <div class="text-input">
          <input name="titre" type="text" id="input1" placeholder="Entrer un titre!" value="{{ old('titre') }}">
          <label for="input1">Titre</label>
          </div>
         
          {!!$errors->first('titre','<div class="alert alert-danger">
  <strong>Erreur!</strong> <span class="error">:message</span>
</div>')!!}
  </div>
 

  <div class="form-group">
      {!!$errors->first('contenu','<div class="alert alert-danger">
  <strong>Erreur!</strong> <span class="error">:message</span>
</div>')!!}
   <textarea name="contenu" id="contenu" class="contenu">
     {{ old('contenu') }}
   </textarea>
 
  </div>

  <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Publier">
                <a href="{{route('communiques')}}" type="button"  class="btn btn-danger" >Annuler</a>
            </div>  

            </form>  
    </div>

    <script>
                        CKEDITOR.replace( 'contenu' );
                </script>

        

           @stop