@extends('templates/default',['title'=>'GUIF | FORUM'])
        

    @section('contenu')
  <!--/page_bannner start-->
  <div class="carousel-item active" style="background-image:url(images/1.jpg); background-size:cover; height:200px; width:100%;">
    <div class="carousel-caption1" style="text-align: left;">
      <h2>Forum</h2>
      <div class="breadcrumbs">
        <div class="container">
           <div class="about_btn" style="position: absolute;right: 2px;top: 1px;"> <a href="contact.html" class="get_started" style="">Inscription</a><a href="#" class="explore">Devenir partenaire</a></div>
          <ul id="breadcrumbs_menu" style="text-align: left;">
            <li><a href="#">Le Forum</a></li>
            <span>/</span>
            <li><a href="#">Forum</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!--/page_banner end--> 

   <!-- /about start -->
  <section class="about inner_about" id="about">
    <div class="about-content">
      <div class="about-image about-bg" style="background-image: url('images/3.jpg');"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-6"></div>
          <div class="col-lg-6">
            <div class="about_detail">
              <div class="about_title">
                  <h2>Le Forum</h2>
                <img class="img-fluid" src="{{asset('images/about_border.png')}}" alt="border_img"> </div>
              <div class="about_con">
                <p style="color: black;">
Le Guinea Investment Forum s’inscrit dans la volonté du gouvernement à transformer le formidable potentiel du pays en une réalité économique, durable et inclusive. 
C’est une première pour la République de Guinée d’abriter un rendez-vous d’affaires regroupant à la fois des investisseurs et porteurs de projets en vue de conclure des transactions. </p> 
 <p style="color: black;">
Le GUIF est le fruit d’efforts conjoints de l’Agence de Promotion des Investissements Privés (APIP-Guinée) et de ses partenaires, la Banque Mondiale à travers sa filiale SFI, et la Banque Africaine de Développement (BAD) qui ambitionnent, de vous faire découvrir, échanger et partager le nouvel élan économique de la République de Guinée.
</p>
<p><b>Pourquoi le forum ?</b></p>
<p>
  <ul class="detail_plan" style="margin: 0px;">
    <li><p style="color: black;">DECOUVRIR UNE LISTE DE PROJETS SOLVABLES EN QUETE DE FINANCEMENT</p> 
      <div class="border-left" style="border-color: #0094e2 !important; padding-left: 5px;">
          <p>Accéder à une liste de projets « bancables » et devant aboutir à des transactions opérationnelles.</p>
        </div>
</li>
 <li><p style="color: black;">PROFITER DE RENCONTRES ET D’ECHANGES</p> 
      <div class="border-left" style="border-color: #0094e2 !important; padding-left: 5px;">
          <p>Initier et concrétiser vos projets à travers des rencontres BtoB et BtoG planifiées via un espace interactif ou des discussions informelles dans des espaces adaptés.</p>
        </div>
</li>
<li><p style="color: black;">PARTICIPER A DES CONFERENCES ET DEBATS DE HAUT NIVEAU</p> 
      <div class="border-left" style="border-color: #0094e2 !important; padding-left: 5px;">
          <p>Accéder à la stratégie gouvernementale et découvrir les grandes tendances de l’économie guinéenne avec un focus sur le cadre et les réformes structurelles en vue d’améliorer l’environnement des affaires.</p>
        </div>
</li>
<li><p style="color: black;">BENEFICIER D’UN ESPACE D’EXPOSITION</p> 
      <div class="border-left" style="border-color: #0094e2 !important; padding-left: 5px;">
          <p>Entrer en contact direct avec des futurs partenaires : acteurs économiques guinéens et internationaux, prestataires de services, investisseurs guinéens et internationaux.</p>
        </div>
</li>
  </ul>

<p><b>Lieu du forum</b></p>
<p>Le Guinea Investment Forum aura lieu à Conakry à l’hôtel Sheraton Grand Conakry.
 <a href="{{route('lieuForum')}}"><i class="fa fa-hand-o-right"></i> Cliquez-Ici pour voir le lieu</a></p>
</p>
                <div class="about_btn"> <a href="contact.html" class="get_started" style="">Inscription</a><a href="#" class="explore">Devenir partenaire</a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /about end -->

   @stop