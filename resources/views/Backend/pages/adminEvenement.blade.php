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
            <h2>Evenements</h2>
         <div class="row" style="padding: 20px;">
            <div class="col-md-4">
               <a href="{{route('Evenement.create')}}" type="button" class="btn bg-blue fs-it-btn" style="color: white;">
        <i class="fa fa-plus" aria-hidden="true"></i>
        <span class="fs-it-btn-vertical-line"></span>
        Ajouter un evenement</a>
            </div>
             <div class="col-md-3">
               <a href="{{route('corbeilleEvent')}}" type="button" class="btn bg-blue fs-it-btn" style="color: white;">
        <i class="fa fa-trash" aria-hidden="true"></i>
        <span class="fs-it-btn-vertical-line"></span>
        Corbeille</a>
            </div>
          </div>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Liste des evenements</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>N°</th>
                    <th>Date</th>
                    <th>Nom</th>
                    <th>Lieu</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                   <th>N°</th>
                    <th>Date</th>
                    <th>Nom</th>
                    <th>Lieu</th>
                    <th>Actions</th>
                  </tr>
                </tfoot>
                <tbody>
                  @foreach ($evenement as $evenement)
                  <tr>
                    <td>{{$evenement->id_evenement}}</td>
                    <td>{{(new DateTime($evenement->date))->format("d/m/Y")}}</td>
                    <td>{{$evenement->nom}}</td>
                    <td>{{$evenement->lieu}}</td>
                    <td>
                        <a href="{{ route ('Evenement.show', $evenement->id_evenement)}}" type="button" class="btn btn-info " target="_blank"><i class="fas fa-eye fa-fw"></i></a>
                         <a href="{{ route ('Evenement.edit', $evenement->id_evenement)}}" type="button" class="btn btn-info "><i class="fas fa-edit fa-fw"></i></a>
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