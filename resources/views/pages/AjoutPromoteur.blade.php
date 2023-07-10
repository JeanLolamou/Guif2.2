@extends('templates/default',['title'=>'GUIF | PARTCIPANTS'])
        

    @section('contenu')

    <style type="text/css">
      .form-sec{ background:#ccc; padding:15px;width: 80%;
    background: #f8f9fa;padding: 15px;box-shadow: 0 0 4px #ccc;margin: 0 auto;}
    .error{
      color: red;
    }
    </style>

    <div id="app">
 
  <div class="carousel-item active" style="background-image:url(images/1.jpg); background-size:cover; height:200px; width:100%;">
    <div class="carousel-caption1" style="text-align: left;">
      
      <div class="breadcrumbs">
        <div class="container">
           <div class="about_btn" style="position: absolute;right: 2px;top: 1px;"> <a href="{{route('inscription')}}" class="get_started" style="">S'inscrire</a><a href="{{route('partenariat')}}" class="explore">Devenir partenaire</a></div>
        
        </div>
      </div>
    </div>
  </div>
  <!--/page_banner end--> 

   <section class="contact_page">
  <div class="container">

      <div class="row" style="width: 100%;padding: 20px;">
          @if($errors->any())
                      <div class="alert alert-danger alert-dismissible" style="width: 100%;">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Erreur!</strong>
  <ul>
      @foreach ($errors->all() as $error)
         <li>{{$error}}</li>
     @endforeach 
  </ul>
  
   
</div>      
                                 
               @endif
         
         </div>

          <div id="loader" style="display: none;">
                      <img src="{{asset('loader.gif')}}" />
                     
                      <p style="font-size: 25px;font-weight: bold;">
                        Inscription en cours... Veuillez patienter...
                    </p>
                    </div>
   
    <form action="{{route('ajoutParticipantGuif')}}" method="POST" enctype="multipart/form-data" id="form">
      {{ csrf_field() }}
      <fieldset>
        <legend> <h2 style="text-transform: uppercase;"><b>
        @if(langue()=='En')
                 Promoter Inscription 
               @elseif(langue()=='Fr')
                  Inscription Promoteur
               @else
                 Inscription Promoteur
               @endif
             </b></h2></legend>

        <input type="hidden" name="userType" value="Promoteur">
        
        <div class="row" style="box-shadow: 0 0 4px #ccc;padding: 10px;">
           <div class="col-md-12"><h4 style="color: #c1a23f;"><i class="fa fa-user"></i>
           @if(langue()=='En')
                 Promoter 
               @elseif(langue()=='Fr')
                  Promoteur
               @else
                 Promoteur
               @endif
                </h4>
              <hr>
            </div>
                  <div class="col-md-4">
                     <div class="form-group">
                    <label class="control-label">
                     @if(langue()=='En')
                Genre*
               @elseif(langue()=='Fr')
                 Genre*
               @else
                Genre*
               @endif
             </label>
                    <select name="genre" required="required" class="form-control" placeholder="Genre">
                    @if (old('genre')=="Madame")
                     <option value="Madame" selected>Madame</option>
                    @else
                     <option value="Madame">Madame</option>
                    @endif

                     @if (old('genre')=="Monsieur")
                     <option value="Monsieur" selected>Monsieur</option>
                    @else
                     <option value="Monsieur">Monsieur</option>
                    @endif
                    </select>

                    @if($errors->has('genre'))
                     <div class="error">{{ $errors->first('genre') }}</div>
                    @endif
                    
                </div>
                  </div>
                  <div class="col-md-4">
                     <div class="form-group">
                    <label class="control-label">
                    @if(langue()=='En')
                 Last Name*
               @elseif(langue()=='Fr')
                 Nom*
               @else
                Nom*
               @endif
             </label>
                    <input type="text" required="required" class="form-control" placeholder="Votre nom" name="name" value="{{old('name')}}" />
                     @if($errors->has('name'))
                     <div class="error">{{ $errors->first('name') }}</div>
                    @endif
                </div>
                  </div>
                  <div class="col-md-4">
                     <div class="form-group">
                    <label class="control-label">
                    @if(langue()=='En')
                 First Name*
               @elseif(langue()=='Fr')
                 Prenom(s)*
               @else
                Prenom(s)*
               @endif
             </label>
                    <input type="text" required="required" class="form-control" placeholder="Votre prenom" name="prenom" value="{{old('prenom')}}" />
                     @if($errors->has('prenom'))
                     <div class="error">{{ $errors->first('prenom') }}</div>
                    @endif
                </div>
                  </div>
                 
                   <!-- col -->
                   <div class="col-md-4">
                     <div class="form-group">
                    <label class="control-label">E-mail*</label>
                    <input type="text" required="required" class="form-control" placeholder="E-mail" name="email" value="{{old('email')}}"/>
                     @if($errors->has('email'))
                     <div class="error">{{ $errors->first('email') }}</div>
                    @endif
                </div>
                  </div>
                  <!-- /col -->
                   <div class="col-md-4">
                     <div class="form-group">
                    <label class="control-label">
                    @if(langue()=='En')
                 Country*
               @elseif(langue()=='Fr')
                 Pays*
               @else
                Pays*
               @endif
             </label>
                    <select name="pays" required="required" class="form-control" placeholder="Genre">
            <?php foreach ($pays as $pays): ?>
                <?php if ((old('pays')==$pays->id)or($pays->id==94)): ?>
                <option value="{{$pays->id}}" selected>{{$pays->nom_fr_fr}}</option>
                <?php else: ?>
                <option value="{{$pays->id}}">{{$pays->nom_fr_fr}}</option>
                <?php endif ?>   
            <?php endforeach ?>
                      
                    </select>
                     @if($errors->has('pays'))
                     <div class="error">{{ $errors->first('pays') }}</div>
                    @endif
                    
                </div>
                  </div>
                  <!-- col -->
                   <!-- col -->
                   <div class="col-md-4">
                     <div class="form-group">
                    <label class="control-label">
                     @if(langue()=='En')
                 Phone Number*
               @elseif(langue()=='Fr')
                 Téléphone*
               @else
                Téléphone*
               @endif
             </label>
                    <input type="text" required="required" class="form-control" placeholder="Numéro de téléphone (professionnelle)" name="tel" value="{{old('tel')}}" />
                     @if($errors->has('tel'))
                     <div class="error">{{ $errors->first('tel') }}</div>
                    @endif
                </div>
                  </div>
                  <!-- /col -->
                   <div class="col-md-4">
                     <div class="form-group">
                    <label class="control-label">
                    @if(langue()=='En')
                 City*
               @elseif(langue()=='Fr')
                 Ville*
               @else
                Ville*
               @endif
             </label>
                    <input type="text" required="required" class="form-control" placeholder="Ville de residence" name="ville" value="{{old('ville')}}"/>
                     @if($errors->has('ville'))
                     <div class="error">{{ $errors->first('ville') }}</div>
                    @endif
                </div>
                  </div>
                  <!-- /col -->
                   <!-- col -->
                   <div class="col-md-4">
                     <div class="form-group">
                    <label class="control-label">
                    @if(langue()=='En')
                 Adress*
               @elseif(langue()=='Fr')
                 Adresse*
               @else
                Adresse*
               @endif
             </label>
                    <input type="text" required="required" class="form-control" placeholder="Adresse" name="adresse" value="{{old('adresse')}}" />
                     @if($errors->has('adresse'))
                     <div class="error">{{ $errors->first('adresse') }}</div>
                    @endif
                </div>
                  </div>
                  <!-- /col -->
                   <div class="col-md-12"><h4 style="color: #c1a23f;"> <i class="fa fa-file"></i> 
                   @if(langue()=='En')
                 Project and Enterprise
               @elseif(langue()=='Fr')
                 Pojet & Entreprise
               @else
                Pojet & Entreprise
               @endif
             </h4>
                    <hr>
                  </div>
                   <div class="col-md-4">
                     <div class="form-group">
                    <label class="control-label">
                     @if(langue()=='En')
                Name of project*
               @elseif(langue()=='Fr')
                 Nom Projet*
               @else
                Nom Projet*
               @endif
             </label>
                    <input type="text" required="required" class="form-control" placeholder="Le nom de Votre Projet" name="libelle" value="{{old('libelle')}}" />
                     @if($errors->has('libelle'))
                     <div class="error">{{ $errors->first('libelle') }}</div>
                    @endif
                </div>
                  </div>
                
                
                  <!-- /col -->
                  
                  <div class="col-md-4">
                     <div class="form-group">
                    <label class="control-label">
                    @if(langue()=='En')
                 Enterprise
               @elseif(langue()=='Fr')
                 Entreprise
               @else
                Entreprise
               @endif
             </label>
                    <input type="text" class="form-control" placeholder="Nom de votre organisme" name="entreprise" value="{{old('entreprise')}}" />
                     @if($errors->has('entreprise'))
                     <div class="error">{{ $errors->first('entreprise') }}</div>
                    @endif
                </div>
                  </div>
                  <!-- /col -->
                   <div class="col-md-4">
                     <div class="form-group">
                    <label class="control-label">

                     @if(langue()=='En')
                 Field 
               @elseif(langue()=='Fr')
                 Secteur d'activité
               @else
                Secteur d'activité
               @endif
             </label>
                    <input type="text" class="form-control" placeholder="Secteur d'activité" name="secteur" value="{{old('secteur')}}" />
                     @if($errors->has('secteur'))
                     <div class="error">{{ $errors->first('secteur') }}</div>
                    @endif
                </div>
                  </div>
                  <!-- /col -->
                  <div class="col-md-4">
                     <div class="form-group">
                    <label class="control-label">
                     @if(langue()=='En')
                 Position held in the organization 
               @elseif(langue()=='Fr')
                 Poste occupé dans l'organisme
               @else
                Poste occupé dans l'organisme
               @endif
             </label>
                    <input type="text" class="form-control" placeholder="Poste occupé dans l'organisme" name="poste" value="{{old('poste')}}" />
                     @if($errors->has('poste'))
                     <div class="error">{{ $errors->first('poste') }}</div>
                    @endif
                </div>
                  </div>

                  <!-- /col -->
                   <div class="col-md-4">
                     <div class="form-group">
                    <label class="control-label">
                       @if(langue()=='En')
                 Project Sheet*
               @elseif(langue()=='Fr')
                 Fiche Projet*
               @else
                Fiche Projet*
               @endif
                <span style="color: red;">(Pdf)</span></label>
                    <input type="file" required="required" class="form-control" placeholder="Fiche Projet" name="fichier" accept="application/pdf"/>
                     @if($errors->has('fichier'))
                     <div class="error">{{ $errors->first('fichier') }}</div>
                    @endif
                </div>
                  </div>
                  <!-- /col -->
                   <div class="col-md-12">
                     <div class="form-group">
                    <label class="control-label">
                    @if(langue()=='En')
                 Brief description of the organization 
               @elseif(langue()=='Fr')
                  Bref description de l'organisme
               @else
                 Bref description de l'organisme
               @endif
             </label>
                    <textarea class="form-control" placeholder="Bref description de l'organisme" name="description">{{old('description')}}
                    </textarea>
                   
                     @if($errors->has('description'))
                     <div class="error">{{ $errors->first('description') }}</div>
                    @endif
                </div>
                  </div>
                  <!-- /col -->

                  <div class="col-md-4">
                    <div class="form-group">
                    <div class="g-recaptcha" data-sitekey="{{config('services.recaptcha.key')}}"></div>
                    @if(session()->has('erreur'))
                    <div class="error">Veuillez cocher cette case svp..!</div>
                    @endif
                </div>
                  </div>
                  <!-- /col -->
                  <div class="col-md-12">
                     <div class="form-group">
                  <button type="submit" class="btn btn-lg btn-success" onclick="" style="margin: 30px 10px;float: right;background-color: #193c7d;">Inscription</button>
                </div>
                  </div>
                  <!-- /col -->
                </div>
      </fieldset>
    </form>
  </div>
</section>

</div>

<script type="text/javascript">
function myFunction() {
  document.getElementById('loader').style.display='inline';
  document.getElementById('form').style.display='none';
}
</script>

<script src="{{asset('js/app.js')}} "></script>

   @stop