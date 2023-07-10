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
.bg-red {
    background-color: #dc3545;

}

.text-uppercase {
    text-transform: uppercase;
}
</style>
<!-- Breadcrumbs-->
 <div class="row" style="width: 100%;padding: 20px;">
          @if(session()->has('message'))
                      <div class="alert alert-success alert-dismissible" style="width: 100%;">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Succés!</strong> {{session()->get('message')}}
</div>      
                                 
               @endif
         
         </div>
        <ol class="breadcrumb">
         
          <li class="breadcrumb-item active">Demande statistique</li>
        </ol>


        <div class="row" style="padding: 20px;">
            <div class="col-md-3">
                <a href="{{route('demande_stat')}}" type="button" class="btn bg-blue fs-it-btn" style="color: white;">
        <i class="fa fa-arrow-left" aria-hidden="true"></i>
        <span class="fs-it-btn-vertical-line"></span>
        Retour</a>
            </div>
           
          </div>

        

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Liste demandes traités</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                     <th>Date</th>
                    <th>Entreprise</th>
                    <th>Nom</th>
                    <th>Pays</th>
                    <th>Telephone</th>
                    <th>E-mail</th>
                    <th>Message</th>
                    <th>Date Traitement</th>
                    <th>Traiter par</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                     <th>Date</th>
                    <th>Entreprise</th>
                    <th>Nom</th>
                    <th>Pays</th>
                    <th>Telephone</th>
                    <th>E-mail</th>
                    <th>Message</th>
                    <th>Date Traitement</th>
                    <th>Traiter par</th>
                    <th>Actions</th>
                  </tr>
                </tfoot>
                <tbody>
                  @foreach ($demande_stat as $demande_stat1)
                   <tr>
                    <td>{{(new DateTime($demande_stat1->date))->format("d/m/Y")}}</td>
                    <td>{{$demande_stat1->entreprise}}</td>
                    <td>{{$demande_stat1->nom}}</td>
                    <td>{{$demande_stat1->pays}}</td>
                    <td>{{$demande_stat1->tel}}</td>
                    <td>{{$demande_stat1->email}}</td>
                    <td>{{$demande_stat1->demande}}</td>
                    <td>{{(new DateTime($demande_stat1->date_traiter))->format("d/m/Y")}}</td>
                    <td>{{$demande_stat1->traiter_par}}</td>
                    <td>
                       
       

         

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