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
           <h2>Modification Document</h2>
         </div>
          <div class="row" style="padding-left: 20px; padding-right: 20px;">
              @foreach ($document as $document)
           <form action="{{ route ('Document.update', $document->id)}}" method="post" enctype="multipart/form-data" style="width: 100%;">
                       {{ csrf_field() }}
                        {{ method_field('PUT') }}
   <div class="row">
     <div class="col-md-5" style="margin-left: 1px;">
      <div class="form-group">
     <div class="text-input">
          <input name="libellefr" type="text" id="input1" placeholder="Entrer un libelle!" value="{{$document->libelleFr}}">
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
          <input name="libelle" type="text" id="input1" placeholder="Enter a libelle!" value="{{$document->libelle}}">
          <label for="input1">Libelle (En)</label>
          </div>
         
          {!!$errors->first('libelle','<div class="alert alert-danger">
  <strong>Erreur!</strong> <span class="error">:message</span>
</div>')!!}
  </div>
    </div>
   

    
   
  </div>
   <div class="row">
   <div class="col-md-5" style="margin-left: 5px;">
      <div class="form-group">
     <div class="text-input">
      <label style="color: salmon;font-weight: bold;">Type Document</label><br>
         <select name="type" style="padding: 5px;width: 100%;">
          <option value="{{$document->type}}">{{$document->type}}</option>
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
          <option value="{{$document->categorie}}">{{$document->categorie}}</option>
           <option value="Agriculture">Agriculture</option>
           <option value="Infrastructure">Infrastructure</option>
           <option value="Mine">Mine</option>
           <option value="Energie">Energie</option>
           <option value="Tic">Tic</option>
           <option value="Autre">Autre</option>
         </select>
         
        
    </div>
   </div>
    </div>
   
  </div>
  <div class="row">
    <div class="col-md-4">
      <div class="form-group">
        <a href="{{ asset('document/'.$document->fichier.'')}}" alt="" style="height: 50px;">
          <i class="fa fa-file"></i><br>
    <input name="fichier" type="file">
    {!!$errors->first('fichier','<div class="alert alert-danger">
  <strong>Erreur!</strong> <span class="error">:message</span>
</div>')!!}
  </div>
  
    </div>
   
  </div>

  

 

  


 

  <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Update">
                <a href="{{route('adminDocument')}}" type="button"  class="btn btn-danger" value="">Cancel</a>

                 <a href="#"  data-toggle="modal" data-target="#deleteModal" type="button"  class="btn btn-danger" style="float: right;">Delete this item</a>
            </div>  

            </form>  
            @endforeach
    </div>

    <script>
                         CKEDITOR.replace( 'contenu');
                        CKEDITOR.replace('contenufr');
                </script>


                 <!-- Logout Modal-->
  <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Voulez-vous vraiment supprimer ce document ?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Cliquez sur SUPPRIMER si oui!</div>
        <div class="modal-footer">
           <form action="{{ route ('Document.update', $document->id)}}" method="post" >
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

        

           @stop