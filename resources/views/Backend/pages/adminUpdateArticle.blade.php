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
           <h2>Modification article</h2>
         </div>
          <div class="row" style="padding-left: 20px; padding-right: 20px;">
              @foreach ($article as $article)
           <form action="{{ route ('Actualite.update', $article->id_actualite)}}" method="post" enctype="multipart/form-data" style="width: 100%;">
                       {{ csrf_field() }}
                        {{ method_field('PUT') }}
   <div class="row">
     <div class="col-md-5" style="margin-left: 1px;">
      <div class="form-group">
     <div class="text-input">
          <input name="titrefr" type="text" id="input1" placeholder="Entrer un titre!" value="{{$article->titreFr}}">
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
          <input name="titre" type="text" id="input1" placeholder="Enter a title!" value="{{$article->titre}}">
          <label for="input1">Title (En)</label>
          </div>
         
          {!!$errors->first('titre','<div class="alert alert-danger">
  <strong>Erreur!</strong> <span class="error">:message</span>
</div>')!!}
  </div>
    </div>
   

    
   
  </div>
  <div class="row">
    <div class="col-md-4">
      <div class="form-group">
        <img src="{{ asset('images/actualite/'.$article->image.'')}}" alt="" style="height: 50px;"><br>
    <input name="image" type="file">
    {!!$errors->first('image','<div class="alert alert-danger">
  <strong>Erreur!</strong> <span class="error">:message</span>
</div>')!!}
  </div>
  
    </div>
    <div class="col-md-6" style="padding-top: 50px;">
      <div class="form-group">
    <input name="date_publier" type="date" value="{{$article->date_publier}}">
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
      {{$article->contenuFr}}
   </textarea>
 
  </div>

 <div class="form-group">
    <label style="padding: 10px;background: salmon; color: white;">Contenu (En)</label><br>
      {!!$errors->first('contenu','<div class="alert alert-danger">
  <strong>Erreur!</strong> <span class="error">:message</span>
</div>')!!}
   <textarea name="contenu" id="contenu" class="contenu">
      {{$article->contenu}}
   </textarea>
 
  </div>

  


 

  <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Update">
                <a href="{{route('article')}}" type="button"  class="btn btn-danger" value="">Cancel</a>

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
          <h5 class="modal-title" id="exampleModalLabel">Voulez-vous vraiment supprimer cet article ?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Cliquez sur SUPPRIMER si oui!</div>
        <div class="modal-footer">
           <form action="{{ route ('Actualite.update', $article->id_actualite)}}" method="post" >
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