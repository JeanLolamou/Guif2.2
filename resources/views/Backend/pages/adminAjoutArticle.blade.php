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
           <h2>Ajout article</h2>
         </div>
          <div class="row" style="padding-left: 20px; padding-right: 20px;">

          <form  action="{{route ('Actualite.store')}}" method="POST" enctype="multipart/form-data" style="width: 100%;">
                     {{ csrf_field() }}
 <div class="row">
   <div class="col-md-5" style="margin-left: 5px;">
      <div class="form-group">
     <div class="text-input">
          <input name="titrefr" type="text" id="input1" placeholder="Entrer un titre!" value="{{ old('titrefr') }}" style="width: 400px;">
          <label for="input1">Titre (Fr)</label>
          </div>
         
          {!!$errors->first('titrefr','<div class="alert alert-danger">
  <strong>Erreur!</strong> <span class="error">:message</span>
</div>')!!}
  </div>
    </div>
    <div class="col-md-5">
      <div class="form-group">
     <div class="text-input">
          <input name="titre" type="text" id="input1" placeholder="Enter a title!" value="{{ old('titre') }}" required style="width: 400px;">
          <label for="input1">Title (En)</label>
          </div>
         
          {!!$errors->first('titre','<div class="alert alert-danger">
  <strong>Erreur!</strong> <span class="error">:message</span>
</div>')!!}
  </div>
    </div>
   
  </div>
  <br>
  <div class="row">
    <div class="col-md-4">
      <div class="form-group">
    <input name="image" type="file" value="{{ old('image') }}" required>
    {!!$errors->first('image','<div class="alert alert-danger">
  <strong>Erreur!</strong> <span class="error">:message</span>
</div>')!!}
  </div>
  
    </div>
    <div class="col-md-6">
      <div class="form-group">
    <input name="date_publier" type="date" value="{{ old('date_publier') }}">
    {!!$errors->first('date_publier','<div class="alert alert-danger">
  <strong>Erreur!</strong> <span class="error">:message</span>
</div>')!!}
  </div>
    </div>
  </div>


  <div class="form-group">
    <label style="padding: 10px;background: salmon; color: white;">Contenu (Fr)</label><br>
      {!!$errors->first('contenufr','<div class="alert alert-danger">
  <strong>Erreur!</strong> <span class="error">:message</span>
</div>')!!}
   <textarea name="contenufr" id="contenufr" class="contenufr">
     {{ old('contenufr') }}
   </textarea>
 
  </div>

  <div class="form-group">
    <label style="padding: 10px;background: salmon; color: white;">Contenu (En)</label><br>
      {!!$errors->first('contenu','<div class="alert alert-danger">
  <strong>Erreur!</strong> <span class="error">:message</span>
</div>')!!}
   <textarea name="contenu" id="contenu" class="contenu">
     {{ old('contenu') }}
   </textarea>
 
  </div>

  

  <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Publier">
                <a href="{{route('article')}}" type="button"  class="btn btn-danger" >Annuler</a>
            </div>  

            </form>  
    </div>

    <script>
                        CKEDITOR.replace( 'contenu');
                        CKEDITOR.replace('contenufr');



                </script>

        

           @stop