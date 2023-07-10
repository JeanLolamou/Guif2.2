@extends('Backend/templates/default')
         @section('contenu')
<!-- Breadcrumbs-->
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
           @if(isset($existe))
                   <div class="alert alert-success alert-dismissible" style="width: 100%;">
                   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                   <strong>Succés!</strong> {{session()->get('message')}}
                   </div> 
           @else  

                  <div class="alert alert-danger alert-dismissible" style="width: 100%;">
                   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                   <strong>Succés!</strong> {{session()->get('message')}}
                   </div>  
           @endif  
                                 
               @endif
         
         </div>
            <h2>Statistique</h2>
         <div class="row" style="padding: 20px;">
            <div class="col-md-3">
               <a href="#"  data-toggle="modal" data-target="#add" type="button" class="btn bg-blue fs-it-btn" style="color: white;">
        <i class="fa fa-plus" aria-hidden="true"></i>
        <span class="fs-it-btn-vertical-line"></span>
        Ajouter</a>
            </div>

             <div class="col-md-4">
               <a href="#"  data-toggle="modal" data-target="#doc" type="button" class="btn bg-blue fs-it-btn" style="color: white;">
        <i class="fa fa-file" aria-hidden="true"></i>
        <span class="fs-it-btn-vertical-line"></span>
        Modifier Fichier Création</a>
            </div>

             <div class="modal fade" id="doc" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modification Fichier Création</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
       <form action="{{ route ('Document.update', 685)}}" method="post" enctype="multipart/form-data">
               {{ csrf_field() }}
              {{ method_field('PUT') }}
                     <div class="row">
                      <input type="hidden" name="modif" value="1">
    <div class="col-md-12">
      <div class="form-group">
     <div class="text-input">
        <input name="nom" type="text" id="input1" placeholder="Entrer le titre" value="{{ old('nom') }}" required="">
          <label for="input1">Titre</label>
          </div>
         
          {!!$errors->first('nom','<div class="alert alert-danger">
  <strong>Erreur!</strong> <span class="error">:message</span>
</div>')!!}
  </div>
    </div>

    <div class="col-md-12">
      <div class="form-group">
          <input name="fichier" type="file" id="input1" placeholder="Entrer un titre!" value="{{ old('fichier') }}" required="">
         
          {!!$errors->first('fichier','<div class="alert alert-danger">
  <strong>Erreur!</strong> <span class="error">:message</span>
</div>')!!}
  </div>
    </div>
  
   
  </div>
            
        </div>
        <div class="modal-footer">
         <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Modifier">
                <a class="close" type="button" data-dismiss="modal" aria-label="Close"  class="btn btn-danger" style="padding: 5px; margin-left: 5px;">Annuler</a>
            </div>  
        </div>
        </form> 
      </div>
    </div>
  </div>

            </div>








             <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Nouvel Ajout</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">

          <form  action="{{route ('Statistique.store')}}" method="POST" enctype="multipart/form-data">
                     {{ csrf_field() }}
                     <div class="row">
    <div class="col-md-6">
      <div class="form-group">
     <div class="text-input">
        <input name="annee" type="text" id="input1" placeholder="Entrer l'année!" value="{{ old('annee') }}" required="">
          <label for="input1">Année</label>
          </div>
         
          {!!$errors->first('annee','<div class="alert alert-danger">
  <strong>Erreur!</strong> <span class="error">:message</span>
</div>')!!}
  </div>
    </div>
  
   
  </div>


   <div class="form-group" >
    <select name="mois" style="width: 100%;padding: 8px;border: 2px solid #fa8072;">
      <option value="Janvier">Janvier</option>
       <option value="Fevrier">Fevrier</option>
        <option value="Mars">Mars</option>
         <option value="Avril">Avril</option>
          <option value="Mai">Mai</option>
           <option value="Juin">Juin</option>
            <option value="Juillet">Juillet</option>
             <option value="Aout">Aout</option>
              <option value="Septembre">Septembre</option>
               <option value="Octobre">Octobre</option>
               <option value="Novembre">Novembre</option>
                <option value="Decembre">Decembre</option>
    </select>
         
          {!!$errors->first('mois','<div class="alert alert-danger">
  <strong>Erreur!</strong> <span class="error">:message</span>
</div>')!!}
  </div>

   <div class="form-group">
     <div class="text-input">
        <input name="qte" type="text" id="input1" placeholder="Entrer le nombre!" value="{{ old('qte') }}" required="">
          <label for="input1">Nombre</label>
          </div>
         
          {!!$errors->first('annee','<div class="alert alert-danger">
  <strong>Erreur!</strong> <span class="error">:message</span>
</div>')!!}
  </div>
          


        </div>
        <div class="modal-footer">
          <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Publier">
                <a href="{{route('statistiques')}}" type="button"  class="btn btn-danger" >Annuler</a>
            </div>
          
        </div>
        </form>
      </div>
    </div>
  </div>
            
          </div>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Liste des statistiques</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Année</th>
                     <th>Mois</th>
                      <th>Valeur</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                  <th>Année</th>
                     <th>Mois</th>
                      <th>Valeur</th>
                    <th>Actions</th>
                  </tr>
                </tfoot>
                <tbody>
                  @foreach ($statistiques as $statistiques)
                  <tr>
                    <td>{{$statistiques->annee}}</td>
                      <td>{{$statistiques->mois}}</td>
                        <td>{{$statistiques->qte}}</td>
                    <td>
                      
                         <a href="#"  data-toggle="modal" data-target="#modifModal{{$statistiques->id_statistique}}" type="button" class="btn btn-info "><i class="fas fa-edit fa-fw"></i></a>


         <!-- Supprimer-->
  <div class="modal fade" id="modifModal{{$statistiques->id_statistique}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modification</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{ route ('Statistique.update', $statistiques->id_statistique)}}" method="post" >
               {{ csrf_field() }}
              {{ method_field('PUT') }}
                     <div class="row">
    
      <div class="form-group">
     <div class="text-input">
        <input name="annee" type="text" id="input1" placeholder="Entrer l'année!" value="{{$statistiques->annee}}" required ="">
          <label for="input1">Année</label>
          </div>
         
          {!!$errors->first('annee','<div class="alert alert-danger">
  <strong>Erreur!</strong> <span class="error">:message</span>
</div>')!!}
  </div>

     <div class="form-group" >
    <select name="mois" style="width: 100%;padding: 8px;border: 2px solid #fa8072;">
       <option value="{{$statistiques->mois}}">{{$statistiques->mois}}</option>
      <option value="Janvier">Janvier</option>
       <option value="Février">Février</option>
        <option value="Mars">Mars</option>
         <option value="Avril">Avril</option>
          <option value="Mai">Mai</option>
           <option value="Juin">Juin</option>
            <option value="Juillet">Juillet</option>
             <option value="Aout">Aout</option>
              <option value="Septembre">Septembre</option>
               <option value="Octobre">Octobre</option>
               <option value="Novembre">Novembre</option>
                <option value="Decembre">Decembre</option>
    </select>
  <div class="form-group">
     <div class="text-input">
        <input name="qte" type="text" id="input1" placeholder="Entrer le nombre!" value="{{$statistiques->qte}}" required="">
          <label for="input1">Nombre</label>
          </div>
         
          {!!$errors->first('annee','<div class="alert alert-danger">
  <strong>Erreur!</strong> <span class="error">:message</span>
</div>')!!}
  </div>
  
   
  </div>
        </div>
        <div class="modal-footer">
          
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
          <button class="btn btn-primary" type="submit"><i class="fa fa-edit"></i> Modifier</button>
                        <input type="hidden" name="sup" value="0">
          </form>
        </div>
      </div>
    </div>
  </div>
                    </td>
                  </tr>
                 @endforeach
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Apip</div>
        </div>


           @stop