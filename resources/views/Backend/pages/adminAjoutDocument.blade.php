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
  <div class="row" style="width: 100%;padding: 20px;">
          @if(session()->has('message'))
                      <div class="alert alert-success alert-dismissible" style="width: 100%;">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Succés!</strong> {{session()->get('message')}}
</div>      
                                 
               @endif
         
         </div>
         <div class="row" style="padding: 10px;">
           <h2>Ajout document</h2>
         </div>
          <div class="row" style="padding-left: 20px; padding-right: 20px;">

          <form  action="{{route ('Document.store')}}" method="POST" enctype="multipart/form-data" style="width: 100%;">
                     {{ csrf_field() }}
 <div class="row">
   <div class="col-md-5" style="margin-left: 5px;">
      <div class="form-group">
     <div class="text-input">
          <input name="libellefr" type="text" id="input1" placeholder="Entrer un libelle!" value="{{ old('libelleFr') }}" style="width: 400px;">
          <label for="input1">Libelle (Fr)</label>
          </div>
         
          {!!$errors->first('libelleFr','<div class="alert alert-danger">
  <strong>Erreur!</strong> <span class="error">:message</span>
</div>')!!}
  </div>
    </div>
    <div class="col-md-5">
      <div class="form-group">
     <div class="text-input">
          <input name="libelle" type="text" id="input1" placeholder="Enter a libelle!" value="{{ old('libelle') }}" required style="width: 400px;">
          <label for="input1">Libelle (En)</label>
          </div>
         
          {!!$errors->first('libelle','<div class="alert alert-danger">
  <strong>Erreur!</strong> <span class="error">:message</span>
</div>')!!}
  </div>
    </div>
   
  </div>
  <br>
  <div class="row">
   <div class="col-md-5" style="margin-left: 5px;">
      <div class="form-group">
     <div class="text-input">
      <label style="color: salmon;font-weight: bold;">Type Document</label><br>
         <select name="type" style="padding: 5px;width: 100%;">
           <option value="Projets-investissement">Projets d'investissements</option>
           <option value="Codes-Permis-Licences-Autorisations">Codes, Permis, Licences, Autorisations</option>
           <option value="Document-utiles">Documents utiles</option>

         </select>
         
        
    </div>
   </div>
    </div>
    <div class="col-md-5" style="margin-left: 5px;">
      <div class="form-group">
     <div class="text-input">
      <label style="color: salmon;font-weight: bold;">Catégorie</label><br>
         <select name="categorie" style="padding: 5px;width: 100%;">
           <option value="Agriculture">Agriculture</option>
           <option value="Infrastructure">Infrastructure</option>
           <option value="Mine">Mine</option>
           <option value="Energie">Energie</option>
           <option value="Tic">Tic</option>
           <option value="Autres">Autre</option>
         </select>
         
        
    </div>
   </div>
    </div>
   
  </div>
  <br>
  <div class="row">
    <div class="col-md-4">
      <div class="form-group">
    <input name="document" type="file" value="{{ old('document') }}" required>
    {!!$errors->first('document','<div class="alert alert-danger">
  <strong>Erreur!</strong> <span class="error">:message</span>
</div>')!!}
  </div>
  
    </div>
   
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