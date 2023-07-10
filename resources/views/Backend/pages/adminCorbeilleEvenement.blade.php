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
            <h2>Corbeille</h2>
          <div class="row" style="padding: 20px;">
            <br/>
             <a href="{{route('evenement')}}" type="button" class="btn bg-blue fs-it-btn" style="color: white;">
        <i class="fa fa-arrow-left" aria-hidden="true"></i>
        <span class="fs-it-btn-vertical-line"></span>
        Retour</a>
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
                         <a href="#" data-toggle="modal" data-target="#Modal{{$evenement->id_evenement}}" type="button" class="btn btn-info "><i class="fas fa-edit fa-fw"></i> Restaurer</a>


                          <!-- Restore Modal-->
  <div class="modal fade" id="Modal{{$evenement->id_evenement}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Voulez-vous vraiment restaurer cet article ?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Cliquer sur RESTAURER si c'est le cas !</div>
        <div class="modal-footer">
           <form action="{{ route ('Evenement.update', $evenement->id_evenement)}}" method="post" >
               {{ csrf_field() }}
              {{ method_field('PUT') }}
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
          <button class="btn btn-primary" type="submit"><i class="fa fa-trash"></i> Restaurer</button>
                        <input type="hidden" name="restaurer" value="0">
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