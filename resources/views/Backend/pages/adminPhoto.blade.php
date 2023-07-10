@extends('Backend/templates/default')
         @section('contenu')
         <style type="text/css">
          #fs-it-btn {
  margin-top: 10px;
  border: 1px solid #a2a2a2;
  border-radius: 0;
  color: #fff;
  font-weight: bold;
}
.fs-it-btn-vertical-line {
  text-align:center;
  padding: 4px 0 5px 10px;
  margin-left: 10px;
  border-left: 1px solid #a2a2a2;
}
.bg-blue {
    background-color: #2c9deb;

}
.text-uppercase {
    text-transform: uppercase;
}



.text-input{ 
 position: relative;
 margin-top: 50px;
}
 
 input[type="text"]{
 display: inline-block;
 width: 450px;
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

          <div class="row" style="width: 100%;padding: 20px;">
          @if(session()->has('message'))
                      <div class="alert alert-success alert-dismissible" style="width: 100%;">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Succés!</strong> {{session()->get('message')}}
</div>      
                                 
               @endif
         
         </div>
            <h2>Photos</h2>
         <div class="row" style="padding: 20px;">
            <div class="col-md-3">
               <a href="#"  data-toggle="modal" data-target="#addModal" type="button" class="btn bg-blue fs-it-btn" style="color: white;">
        <i class="fa fa-plus" aria-hidden="true"></i>
        <span class="fs-it-btn-vertical-line"></span>
        Ajouter une photo</a>

         <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ajout Photo</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
            <form  action="{{route ('Photos.store')}}" method="POST" enctype="multipart/form-data">
                     {{ csrf_field() }}

                     <div class="form-group">
                      
     <div class="text-input">
      <label style="color: salmon;">Album</label><br>
        <select name="album" style="width: 400px;color: black;padding: 5px;">
          @foreach ($album as $albums)
          <option value="{{$albums->id}}">{{$albums->libelle}}</option>
          @endforeach
        </select>
         
          </div>
        
  </div>

            <div class="row">
    <div class="col-md-6">
      <div class="form-group">
     <div class="text-input">
        <input name="nom_photoFr" type="text" id="input1" placeholder="Entrer un titre!" value="{{ old('nom_photoFr') }}" required="">
          <label for="input1">Nom (Fr)</label>
          </div>
         
          {!!$errors->first('nom_photoFr','<div class="alert alert-danger">
  <strong>Erreur!</strong> <span class="error">:message</span>
</div>')!!}
  </div>
    </div>
  
   
  </div>
                     <div class="row">
    <div class="col-md-6">
      <div class="form-group">
     <div class="text-input">
        <input name="nom_photo" type="text" id="input1" placeholder="Entrer un titre!" value="{{ old('nom_photo') }}" required="">
          <label for="input1">Nom (En)</label>
          </div>
         
          {!!$errors->first('nom_photo','<div class="alert alert-danger">
  <strong>Erreur!</strong> <span class="error">:message</span>
</div>')!!}
  </div>
    </div>
  
   
  </div>



   <div class="form-group">
     <div class="text-input">
        <input name="images[]"type="file" multiple="true">
         
          </div>
        
  </div>

 

  



  

            
        </div>
        <div class="modal-footer">
         <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Publier">
                <a href="{{route('adminphotos')}}" type="button"  class="btn btn-danger" >Annuler</a>
            </div>  
        </div>
        </form> 
      </div>
    </div>
  </div>

            </div>
             <div class="col-md-3">
               <a href="{{route('corbeillePhotos')}}" type="button" class="btn bg-blue fs-it-btn" style="color: white;">
        <i class="fa fa-trash" aria-hidden="true"></i>
        <span class="fs-it-btn-vertical-line"></span>
        Corbeille</a>
            </div>
          </div>
           <hr>

            <div class="row">
    
     @foreach ($photos as $photos)
    <div class="col-md-3" style="margin-bottom: 5px;">
       <span>{{$photos->nom_photoFr}}</span>
      <img src="{{ asset('images/gallerie/'.$photos->lien.'')}}" style="width: 100%;height: 200px;" /><br>
     
       <a href="#"  data-toggle="modal" data-target="#deleteModal{{$photos->id_photo}}" type="button" class="btn bg-blue fs-it-btn" style="color: white;width: 100%;">
        <i class="fa fa-trash-alt" aria-hidden="true"></i>
        <span class="fs-it-btn-vertical-line">Supprimer</span>
        </a>

         <!-- Supprimer-->
  <div class="modal fade" id="deleteModal{{$photos->id_photo}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Voulez-vous vraiment supprimer cette photo ?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Cliquer sur SUPPRIMER si c'est le cas !</div>
        <div class="modal-footer">
           <form action="{{ route ('Photos.update', $photos->id_photo)}}" method="post" >
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


    </div>
   @endforeach
  
    
  </div>
  <!-- /#wrap -->

      


           @stop