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
</style>

         <div class="row" style="width: 100%;padding: 20px;">
          @if(session()->has('message'))
                      <div class="alert alert-success alert-dismissible" style="width: 100%;">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Succés!</strong> {{session()->get('message')}}
</div>      
                                 
               @endif
         
         </div>

         <h2>Actualités</h2>
    
          <div class="row" style="padding: 20px;">
            <div class="col-md-3">
               <a href="{{route('Actualite.create')}}" type="button" class="btn bg-blue fs-it-btn" style="color: white;">
        <i class="fa fa-plus" aria-hidden="true"></i>
        <span class="fs-it-btn-vertical-line"></span>
        Ajouter un article</a>
            </div>
             <div class="col-md-3">
               <a href="{{route('corbeille')}}" type="button" class="btn bg-blue fs-it-btn" style="color: white;">
        <i class="fa fa-trash" aria-hidden="true"></i>
        <span class="fs-it-btn-vertical-line"></span>
        Corbeille</a>
            </div>
          </div>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Liste des articles</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>N°</th>
                    <th>Date</th>
                    <th>Image</th>
                    <th>Titre</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>N°</th>
                    <th>Date</th>
                    <th>Image</th>
                    <th>Titre</th>
                    <th>Actions</th>
                  </tr>
                </tfoot>
                <tbody>
                  @foreach ($article as $articles)
                  <tr>
                    <td>{{$articles->id_actualite}}</td>
                    <td>{{(new DateTime($articles->date_publier))->format("d/m/Y")}}</td>
                    <td><img src="images/actualite/{!!$articles->image!!}" alt="" style="height: 100px;"></td>
                    <td>{{$articles->titre}}</td>
                    <td>
                         <a href="{{ route ('Actualite.show', $articles->id_actualite)}}" type="button" class="btn btn-info " target="_blank"><i class="fas fa-eye fa-fw"></i></a>
                         <a href="{{ route ('Actualite.edit', $articles->id_actualite)}}" type="button" class="btn btn-info "><i class="fas fa-edit fa-fw"></i></a>
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