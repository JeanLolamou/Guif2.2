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
 <div class="row" style="width: 100%;padding: 20px;">
          @if(session()->has('message'))
                      <div class="alert alert-success alert-dismissible" style="width: 100%;">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Succés!</strong> {{session()->get('message')}}
</div>      
                                 
               @endif
         
         </div>
<!-- Breadcrumbs-->
        <ol class="breadcrumb">
         
          <li class="breadcrumb-item active">Demandes Statistiques</li>
        </ol>

        <div class="row" style="padding: 20px;">
            <div class="col-md-3">
               <a href="{{route('traiter')}}"  type="button" class="btn bg-blue fs-it-btn" style="color: white;">
        <i class="fa fa-check" aria-hidden="true"></i>
        <span class="fs-it-btn-vertical-line"></span>
        Demandes Traitées</a>
            </div>
           <!--  <div class="col-md-3">
               <a href="#" type="button" class="btn bg-red fs-it-btn" style="color: white;">
        <i class="fa fa-ban" aria-hidden="true"></i>
        <span class="fs-it-btn-vertical-line"></span>
        Liste annulés</a>
            </div> -->
          </div>

        

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Liste demande en attente</div>
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
                    <td>
                       <a href="#"  data-toggle="modal" data-target="#traiter{{$demande_stat1->id}}" type="button" class="btn bg-blue fs-it-btn" style="color: white;">
                       <i class="fa fa-check" aria-hidden="true"></i>
                      </a>

                       <!-- Validation-->
  <div class="modal fade" id="traiter{{$demande_stat1->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Avez-vous vraiment Traiter cette démande ?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Cliquer sur TRAITER si c'est le cas !</div>
        <div class="modal-footer">
           <form action="{{ route ('Demande.update', $demande_stat1->id)}}" method="post" >
               {{ csrf_field() }}
              {{ method_field('PUT') }}
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
          <button class="btn btn-primary" type="submit"><i class="fa fa-check"></i> Traiter</button>
                        <input type="hidden" name="val" value="0">
          </form>
        </div>
      </div>
    </div>
  </div>

        <a href="#"  data-toggle="modal" data-target="#" type="button" class="btn bg-red fs-it-btn" style="color: white;">
        <i class="fa fa-ban" aria-hidden="true"></i>
        </a>

          <!-- Annulation-->
  <!-- <div class="modal fade" id="annuler{{$demande_stat1->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Voulez-vous vraiment SUPPRIMER cette démande ?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Cliquer sur SUPPRIMER si c'est le cas !</div>
        <div class="modal-footer">
           <form action="#" method="post" >
               {{ csrf_field() }}
              {{ method_field('PUT') }}
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
          <button class="btn btn-primary" type="submit"><i class="fa fa-ban"></i> Supprimer</button>
                        <input type="hidden" name="sup" value="0">
          </form>
        </div>
      </div>
    </div>
  </div> -->

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