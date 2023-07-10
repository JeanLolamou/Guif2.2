@extends('templates/default',['title'=>'GUIF | TRANSACTION'])
        

    @section('contenu')
    <style type="text/css">
      /* Tabs*/
section {
    padding: 60px 0;
}

section .section-title {
    text-align: center;
    color: #007b5e;
    margin-bottom: 50px;
    text-transform: uppercase;
}
a{
  color: #106fb3;
}
#tabs{
  
    color: black;
}
#tabs h6.section-title{
    color: black;
}

#tabs .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
    color: #f3f3f3;
    background-color: #106fb3;
    border-color: #106fb3 #106fb3 #f3f3f3;
    border-bottom: 4px solid !important;
    font-size: 20px;
    font-weight: bold;
}
#tabs .nav-tabs .nav-link {
    border: 1px solid transparent;
    border-top-left-radius: .25rem;
    border-top-right-radius: .25rem;
    
    font-size: 20px;
}
#tab-pane{
  width: 100%;
}
    </style>
  <!--/page_bannner start-->
  <div class="carousel-item active" style="background-image:url(images/1.jpg); background-size:cover; height:200px; width:100%;">
    <div class="carousel-caption1" style="text-align: left;">
   
      <div class="breadcrumbs">
        <div class="container">
           <div class="about_btn" style="position: absolute;right: 2px;top: 1px;"><a href="{{route('partenariat')}}" class="explore">Devenir partenaire</a></div>
          
        </div>
      </div>
    </div>
  </div>
  <!--/page_banner end--> 

   <!-- Tabs -->
<section id="tabs">
  <div class="container">
    <!-- <h6 class="section-title h1">Tabs</h6> -->
    <div class="row">
           
              <div class="col-md-12">
              <h2>BoardRoom GUIF</h2>
                <p style="color: black;">
Le Forum d’Investissement en Guinée abritera une séance plénière où seront présentés les grands projets structurants du gouvernement et entrepreneurs nationaux à l’endroit des sociétés de capitaux.
</p> 
 <p style="color: black;">
La BoardRoom GUIF exposera les projets d’envergure dont le montant avoisine les 900 millions de dollars (USD).
</p>



             </div>
               <div class="col-md-12">
              <h2>DealRoom GUIF</h2>
                <p style="color: black;">
Dans le but d’offrir une opportunité unique aux participants, le Forum d’Investissement en Guinée lance sa première édition de la DealRoom GUIF pour connecter les sociétés d’investissements aux entreprises guinéennes.
</p> 
 <p style="color: black;">
Organisée par APIP-Guinée, la DealRoom présentera aux investisseurs 20 entreprises dynamiques sélectionnées représentant un peu moins de 500 millions de dollars (USD).
</p>



             </div>
            <a href="#" class="get_started" style="margin-left: 20px;">S'incrire à la DealRoom</a>
           </div>
  </div>
</section>
<!-- ./Tabs -->

   @stop