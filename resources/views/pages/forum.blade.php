@extends('templates/default',['title'=>'GUIF | FORUM'])
        

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
    font-size: 30px;font-weight:bold;
    font-weight: bold;
}
#tabs .nav-tabs .nav-link {
    border: 1px solid transparent;
    border-top-left-radius: .25rem;
    border-top-right-radius: .25rem;
    
    font-size: 30px;font-weight:bold;
}
#tab-pane{
  width: 100%;
}
p{
  color: black;
  margin-bottom: 0px;
}

li{
  margin-bottom: 20px;
  
}
    </style>
  <!--/page_bannner start-->
  <div class="carousel-item active" style="background-image:url(images/Guif2/back7.jpg); background-size:contain; min-height:340px; width:100%;background-repeat: no-repeat;background-position-x:right;background-color: #e3f2dd;">
    <div class="carousel-caption1 slideInLeft hidephone" style="text-align: left;width: 65%;position: absolute;top:15px;text-align: left;left: 80px;">
      <h1 style="color: #c1a23f;">
          @if(langue()=='En')
                <b>Event Format</b>
               @elseif(langue()=='Fr')
                 <b>Le Forum</b>
               @else
                <b>Le Forum</b>
               @endif
               </h1>
               

 @if(langue()=='En')
           
              <p style="font-size: 18px;text-align: justify"> The Guinea Investment Forum will be held from February 12 to 14, 2022.


 </p>
                  <p style="font-size: 18px;text-align: justify">International participants will be able to attend via a dedicated virtual platform.
A moment eagerly awaited by all economic players, the second edition of the GUIF will be a space for high-level panels presenting investment opportunities in Guinea, the incentives offered by the government, alternating with networking sessions, deal- rooms dedicated to investment projects.
</p>

               @elseif(langue()=='Fr')
               
                 
                  <p style="font-size: 18px;text-align: justify"> Le Guinea Investment Forum se tiendra du 12 au 14 Février 2022.
Les participants internationaux pourront y assister via une plateforme virtuelle dédiée.
 </p>
                  <p style="font-size: 18px;text-align: justify">

Moment très attendu par l'ensemble des acteurs économiques, la deuxième édition du GUIF sera un espace de panels de haut niveau présentant les opportunités d'investissement en Guinée, les mesures incitatives offertes par le gouvernement, alternant avec des sessions de networking, deal-rooms dédiées sur des projets d'investissement.
</p>



               @else
                <p style="font-size: 18px;text-align: justify"> Le Guinea Investment Forum se tiendra du 12 au 14 Février 2022.
Les participants internationaux pourront y assister via une plateforme virtuelle dédiée.
 </p>
                  <p style="font-size: 18px;text-align: justify">

Moment très attendu par l'ensemble des acteurs économiques, la deuxième édition du GUIF sera un espace de panels de haut niveau présentant les opportunités d'investissement en Guinée, les mesures incitatives offertes par le gouvernement, alternant avec des sessions de networking, deal-rooms dédiées sur des projets d'investissement.
</p>
               @endif


    </p>
    </div>


    <div class="slideInLeft hidepc" style="text-align: center;width: 80%;background: #ffffff40; ">
      <h1 style="color: #c1a23f;">
          @if(langue()=='En')
                <b>Event Format</b>
               @elseif(langue()=='Fr')
                 <b>Le Forum</b>
               @else
                <b>Le Forum</b>
               @endif
               </h1>
               <p>

 @if(langue()=='En')

 The Guinea Investment Forum will be held from February 12 to 14, 2022.

                International participants will be able to attend via a dedicated virtual platform.
A moment eagerly awaited by all economic players, the second edition of the GUIF will be a space for high-level panels presenting investment opportunities in Guinea, the incentives offered by the government, alternating with networking sessions, deal- rooms dedicated to investment projects.


               @elseif(langue()=='Fr')

                Le Guinea Investment Forum se tiendra du 12 au 14 Février 2022.
Les participants internationaux pourront y assister via une plateforme virtuelle dédiée.


Moment très attendu par l'ensemble des acteurs économiques, la deuxième édition du GUIF sera un espace de panels de haut niveau présentant les opportunités d'investissement en Guinée, les mesures incitatives offertes par le gouvernement, alternant avec des sessions de networking, deal-rooms dédiées sur des projets d'investissement.




               @else
               Le Guinea Investment Forum se tiendra du 12 au 14 Février 2022.
Les participants internationaux pourront y assister via une plateforme virtuelle dédiée.


Moment très attendu par l'ensemble des acteurs économiques, la deuxième édition du GUIF sera un espace de panels de haut niveau présentant les opportunités d'investissement en Guinée, les mesures incitatives offertes par le gouvernement, alternant avec des sessions de networking, deal-rooms dédiées sur des projets d'investissement.

               @endif


    </p>
    </div>
  </div>
  <!--/page_banner end--> 

   <section class="clients" class="bounce-in-top" style="background: #c1a23f;">
    <div class="container">
      <div class="row">
       
        <div class="col-md-12 slideInRight2" style="padding: 50px;">
          <h1 style="color: #fff;font-weight: bold;">
           @if(langue()=='En')
               Why participate ?
               @elseif(langue()=='Fr')
                Pourquoi participer ?
                @else
                Pourquoi participer ?
               @endif
             </h1>
          <p style="color: #000;text-align: justify">
             @if(langue()=='En')
             The GUIF is the result of the joint efforts of the Agency for the Promotion of Private Investments (APIP-Guinea) and its partners, the African Development Bank (ADB) and the World Bank through its subsidiary International Finance Corporation (IFC) which aim to discover, exchange, and share the new economic dynamics of the Republic of Guinea.
               @elseif(langue()=='Fr')
                 Le GUIF est le fruit des efforts conjoints de l'Agence pour la Promotion des Investissements Privés (APIP-Guinée) et de ses partenaires, la Banque Africaine de Développement (BAD) et la Banque Mondiale à travers sa filiale Société Financière Internationale (SFI) qui visent à découvrir, échanger et partager les nouvelles dynamiques économiques de la République de Guinée.
                @else
                 Le GUIF est le fruit des efforts conjoints de l'Agence pour la Promotion des Investissements Privés (APIP-Guinée) et de ses partenaires, la Banque Africaine de Développement (BAD) et la Banque Mondiale à travers sa filiale Société Financière Internationale (SFI) qui visent à découvrir, échanger et partager les nouvelles dynamiques économiques de la République de Guinée.
               @endif
            
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- /clients end --> 
  <section  style="background-image: url('images/Guif2/back.jpg');background-repeat: no-repeat;background-size: cover;" class="" id="video">
    
    
       <div class="container" style="padding: 10px;">
         <div class="row">
          <div class="col-md-12" style="margin: 0 auto;color: #c1a23f;padding: 20px;">
            <center>
                @if(langue()=='En')
              <h1><b>1st EDITION GUIF
             </b></h1>
               @elseif(langue()=='Fr')
                 <h1><b>Edition 1 #GUIF
             </b></h1>
                @else
                <h1><b>Edition 1 #GUIF
             </b></h1>
               @endif

               <h4 style="color: black;">
                  @if(langue()=='En')
                At the Guinea Investment Forum 2021 we welcomed:
               @elseif(langue()=='Fr')
                 LES CHIFFRES CLES
               @else
                LES CHIFFRES CLES
               @endif
               </h4>
               </center> 
           </div>

           <div class="col-md-4" style="background: #000000c9;">
             <center>
               <p style="color: #c1a23f;font-size: 30px;font-weight:bold;">
              1600
             </p> 
             <p style="color: #fff;font-size: 20px;">
              @if(langue()=='En')
                Registered online
attendees
               @elseif(langue()=='Fr')
                 Participants
enregistrés en ligne
               @else
                Participants
enregistrés en ligne
               @endif
              
             </p>
             </center>

           </div>
            <div class="col-md-4" style="background: #000000c9;padding-bottom: 10px;">
             <center>
               <p style="color: #c1a23f;font-size: 30px;font-weight:bold;">
              $200M
             </p> 
             <p style="color: #fff;font-size: 20px;">
              @if(langue()=='En')
                Investment intentions
               @elseif(langue()=='Fr')
                 Intentions de financement
               @else
                Intentions de financement
               @endif
              
             </p>
             </center>

           </div>
            <div class="col-md-4" style="background: #000000c9;padding-bottom: 10px;">
             <center>
               <p style="color: #c1a23f;font-size: 30px;font-weight:bold;">
              35
             </p> 
             <p style="color: #fff;font-size: 20px;">
              @if(langue()=='En')
                international speakers
               @elseif(langue()=='Fr')
                 Panelistes internationaux
               @else
                Panelistes internationaux
               @endif
              
             </p>
             </center>

           </div>
             <div class="col-md-4" style="background: #000000c9;padding-top: 50px;">
             <center>
               <p style="color: #c1a23f;font-size: 30px;font-weight:bold;">
              600

             </p> 
             <p style="color: #fff;font-size: 20px;">
              @if(langue()=='En')
                Live Attendees
in Conakry
               @elseif(langue()=='Fr')
                 Participants en
présentiel à Conakry
               @else
                Participants en
présentiel à Conakry
               @endif
              
             </p>
             </center>

           </div>
            <div class="col-md-4" style="background: #000000c9;border: 2px solid #f0cb3b;">
            <div class="row">
              <div class="col-md-6" style="padding: 0px;">
                <img src="{{asset('images/Guif2/album/6.jpg')}}" style="height: 100px;width: 100%;">
              </div>
              <div class="col-md-6" style="padding: 0px;">
                <img src="{{asset('images/Guif2/album/10.jpg')}}" style="height: 100px;width: 100%;">
              </div>
              <div class="col-md-6" style="padding: 0px;">
                <img src="{{asset('images/Guif2/album/4.jpg')}}" style="height: 100px;width: 100%;">
              </div>
              <div class="col-md-6" style="padding: 0px;">
                <img src="{{asset('images/Guif2/album/9.jpg')}}" style="height: 100px;width: 100%;">
              </div>
            </div>

           </div>
            <div class="col-md-4" style="background: #000000c9;padding-top: 50px;">
             <center>
               <p style="color: #c1a23f;font-size: 30px;font-weight:bold;">
              16

             </p> 
             <p style="color: #fff;font-size: 20px;">
              @if(langue()=='En')
                Exhibition
Stands
               @elseif(langue()=='Fr')
                 Exposants
               @else
                Exposants
               @endif
              
             </p>
             </center>

           </div>
            <div class="col-md-4" style="background: #000000c9;padding-top: 10px;">
             <center>
               <p style="color: #c1a23f;font-size: 30px;font-weight:bold;">
              75+

             </p> 
             <p style="color: #fff;font-size: 20px;">
              @if(langue()=='En')
                Projects
Presented
               @elseif(langue()=='Fr')
                 Projets présentés
               @else
                Projets présentés
               @endif
              
             </p>
             </center>

           </div>
            <div class="col-md-4" style="background: #000000c9;padding-top: 10px;">
             <center>
               <p style="color: #c1a23f;font-size: 30px;font-weight:bold;">
              70

             </p> 
             <p style="color: #fff;font-size: 20px;">
              @if(langue()=='En')
                Countries
Represented
               @elseif(langue()=='Fr')
                 Pays représentés
               @else
                Pays représentés
               @endif
              
             </p>
             </center>

           </div>
            <div class="col-md-4" style="background: #000000c9;padding-top: 10px;">
             <center>
               <p style="color: #c1a23f;font-size: 30px;font-weight:bold;">
              50+

             </p> 
             <p style="color: #fff;font-size: 20px;">
              @if(langue()=='En')
                B2B
               @elseif(langue()=='Fr')
                 B2B
               @else
                B2B
               @endif
              
             </p>
             </center>

           </div>
         </div>
       
       
      </div>
  </section>

   <div class="carousel-item active " id="photoprac" style="background-image:url({{asset('images/Guif2/cer.jpg')}}); background-size:cover;background-repeat: no-repeat;background-origin: bottom; height:500px; width:100%;">
   
  </div>

   @stop