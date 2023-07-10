@extends('templates/default',['title'=>'GUIF : Forum des investissements en Guinée | APIP'])
         @section('slider')

         @include('templates/partials/_slider')

        @stop

    @section('contenu')

   <style type="text/css">
  
  .owl-nav{
    display: none;
  }
  .owl-dots{
    display: none;
  }
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   

     <!-- /services start -->
  <section class="services" id="servicesa" style="background: #fff;">
    <div class="container" >
     
        <div class="row" style="">
           <div class="col-md-5" style="padding-top: 60px;">
            @if(langue()=='En')
                 <p style="margin-bottom: 0px;color: #c1a23f;"><b>
            4 days dedicated to business opportunities in Guinea</b></p>
            <p style="margin-bottom: 0px;"><b>February 12-14, 2022</b></p>
            <p style="margin-bottom: 0px;"><i class="fa fa-map-marker-alt"></i> Expo 2020 Dubai – UAE</p>
                
               @elseif(langue()=='Fr')
                  <p style="margin-bottom: 0px;color: #c1a23f;"><b>
            4 jours dédiés aux opportunités d'affaires en Guinée</b></p>
            <p style="margin-bottom: 0px;"><b>Du 12 au 14 février 2022</b></p>
            <p style="margin-bottom: 0px;"><i class="fa fa-map-marker-alt"></i> Expo 2020 Dubaï - UAE</p>
               @else
                 <p style="margin-bottom: 0px;color: #c1a23f;"><b>
            4 jours dédiés aux opportunités d'affaires en Guinée</b></p>
            <p style="margin-bottom: 0px;"><b>Du 12 au 14 février 2022</b></p>
            <p style="margin-bottom: 0px;"><i class="fa fa-map-marker-alt"></i> Expo 2020 Dubaï - UAE</p>
               @endif
           
          </div>
          <div class="col-md-3">
            <img src="{{asset('images/logo_dubai.jpg')}}" style="width: 250px;">
          </div>
          <div class="col-md-4" style="padding-top: 60px;">

             @if(langue()=='En')
               <script class="1d9f2461454e722f08a7dfdee22bb37a" src="https://w.promofeatures.com/js/timer/1d9f2461454e722f08a7dfdee22bb37a.js?v=1638358074"></script>
               @elseif(langue()=='Fr')
                 <script class="46e0827c02a60a9e3790cedbf7358f86" src="https://w.promofeatures.com/js/timer/46e0827c02a60a9e3790cedbf7358f86.js?v=1632234746"></script>
               @endif
          

           
          </div>
        </div>

       
      </div>
  </section>
  <!-- /services end --> 




  <section class="pricing" id="pricing" style="background: #fff;padding-top: 0px;padding-bottom: 0px">
    <div class="">
      
      <div class="row" style="background-image: url('images/Guif2/img/slide5.jpg');background-size: 50% 130px;background-repeat: no-repeat;background-position: left;">

        <div class="col-md-6">
          
        </div>
       
             <div class="col-md-6" style="background: #e3f2dd;">
               @if(langue()=='En')
                <center><p style="color: #000;font-size: 30px;"><b>THE ANNUAL MEETING </b></p></center>
              <center><p style="color: #c1a23f;font-size: 30px;"><b>OF INVESTORS IN GUINEA</b></p></center>
               @elseif(langue()=='Fr')
                 <center><p style="color: #000;font-size: 30px;"><b>LE RENDEZ-VOUS ANNUEL</b></p></center>
              <center><p style="color: #c1a23f;font-size: 30px;"><b>DES INVESTISSEURS EN GUINEE</b></p></center>
               @else
                 <center><p style="color: #000;font-size: 30px;"><b>LE RENDEZ-VOUS ANNUEL</b></p></center>
              <center><p style="color: #c1a23f;font-size: 30px;"><b>DES INVESTISSEURS EN GUINEE</b></p></center>
               @endif
               
            </div>
         
    </div>
  </div>
</section>
 
  <section class="" id="video" style="margin-top: 0px;">
    
    
       <div class="container" style="padding: 2px;">
         <div class="row">
          <div class="col-md-6" style="margin-top: 20px;padding: 15px;background: #e9ecef;padding-left: 0px;">
             @if(langue()=='En')
               <p style="margin-left: 15px;">
             Bring together and mobilize key players of the investment sector in Guinea: Guinean government, development partners, national and international economic players
           </p>
               @elseif(langue()=='Fr')
                <p style="margin-left: 15px;">
             Réunir et mobiliser les acteurs clés du secteur des investissements en Guinée : gouvernement guinéen, partenaires au développement et acteurs économiques nationaux et internationaux
           </p>
               @else
                <p style="margin-left: 15px;">
             Réunir et mobiliser les acteurs clés du secteur des investissements en Guinée : gouvernement guinéen, partenaires au développement et acteurs économiques nationaux et internationaux
           </p>
               @endif
           
            <div style="padding-top: 30px; padding-bottom: 30px;background: #d3af39;color: #fff;border-radius: 0px 50px 50px 0px;margin-bottom: 30px;">
               @if(langue()=='En')
                <p style="margin-left: 15px;margin-bottom: 4px;">Support a fundraising for the best projects</p>
               <p style="margin-left: 15px;width: 35%;border-bottom: 2px solid #000;"></p>
               <p style="margin-left: 15px;margin-bottom: 4px;">B to B and B to G meeting</p>
               <p style="margin-left: 15px;width: 35%;border-bottom: 2px solid #000;"></p>
               <p style="margin-left: 15px;margin-bottom: 4px;">Round tables on investment opportunities</p>
               <p style="margin-left: 15px;width: 35%;border-bottom: 2px solid #000;"></p>
               <p style="margin-left: 15px;">Networking and putting in touch with possible national and international partners.</p>
               @elseif(langue()=='Fr')
                 <p style="margin-left: 15px;margin-bottom: 4px;">Appui à la levée de fonds pour les meilleurs projets</p>
               <p style="margin-left: 15px;width: 35%;border-bottom: 2px solid #000;"></p>
               <p style="margin-left: 15px;margin-bottom: 4px;">Rencontre B to B  et B to G</p>
               <p style="margin-left: 15px;width: 35%;border-bottom: 2px solid #000;"></p>
               <p style="margin-left: 15px;margin-bottom: 4px;">Tables rondes sur les opportunités d’investissement</p>
               <p style="margin-left: 15px;width: 35%;border-bottom: 2px solid #000;"></p>
               <p style="margin-left: 15px;">Networking et mise en relation avec d’éventuels partenaires nationaux et internationaux.</p>

               @else
                 <p style="margin-left: 15px;margin-bottom: 4px;">Appui à la levée de fonds pour les meilleurs projets</p>
               <p style="margin-left: 15px;width: 35%;border-bottom: 2px solid #000;"></p>
               <p style="margin-left: 15px;margin-bottom: 4px;">Rencontre B to B  et B to G</p>
               <p style="margin-left: 15px;width: 35%;border-bottom: 2px solid #000;"></p>
               <p style="margin-left: 15px;margin-bottom: 4px;">Tables rondes sur les opportunités d’investissement</p>
               <p style="margin-left: 15px;width: 35%;border-bottom: 2px solid #000;"></p>
               <p style="margin-left: 15px;">Networking et mise en relation avec d’éventuels partenaires nationaux et internationaux.</p>
               @endif
              


            </div>
             @if(langue()=='En')
               <p style="margin-left: 15px;">The 2nd Edition of GUIF will be held from February 12 to 14, 2022 in Dubai, within Expo Dubai 2020 where more than 5,000 businessmen and investors are expected.</p>
            <p style="margin-left: 15px;">Under the Theme "Guinea, source of opportunities", the country's priority sectors on the international scene will be highlighted, as well as investment opportunities in Guinea.</p>
            <p style="margin-left: 15px;padding-bottom: 0px;">The event is organized by the Private Investment Promotion Agency (APIP-Guinea) in collaboration with the African Development Bank (AFDB) and the World Bank through its subsidiary the International Finance Corporation. </p>
               @elseif(langue()=='Fr')
                <p style="margin-left: 15px;">La 2eme Edition du GUIF se tiendra du 12 au 14 Février 2022 à Dubaï, au sein de l’expo Dubaï 2020 ou plus de 5000 hommes d’affaires et investisseurs sont attendus.</p>
            <p style="margin-left: 15px;">Sous le Thème « La Guinée, source d’opportunités », les secteurs prioritaires du pays sur la scène internationale seront mis en avant, ainsi que les opportunités d’investissement en Guinée.   </p>
            <p style="margin-left: 15px;padding-bottom: 0px;">L’événement est organisé par l’Agence de Promotion des Investissements Privés (APIP-Guinée) en collaboration avec la Banque africaine de développement (BAD) et la Banque mondiale à travers sa filiale la Société financière internationale.</p>
               @else
                <p style="margin-left: 15px;">La 2eme Edition du GUIF se tiendra du 12 au 14 Février 2022 à Dubaï, au sein de l’expo Dubaï 2020 ou plus de 5000 hommes d’affaires et investisseurs sont attendus.</p>
            <p style="margin-left: 15px;">Sous le Thème « La Guinée, source d’opportunités », les secteurs prioritaires du pays sur la scène internationale seront mis en avant, ainsi que les opportunités d’investissement en Guinée.   </p>
            <p style="margin-left: 15px;padding-bottom: 0px;">L’événement est organisé par l’Agence de Promotion des Investissements Privés (APIP-Guinée) en collaboration avec la Banque africaine de développement (BAD) et la Banque mondiale à travers sa filiale la Société financière internationale.</p>
               @endif
            

            <div class="row" style="padding-left: 10px;">
              <div class="col-md-6" style="">
                 @if(langue()=='En')
                <a href="#" class="btn btn-default" style="border-radius: 20px;
    color: #fff;background: #193c7d;">Become a GUIF 2022 Partner</a>
          </div>
          <div class="col-md-6" style="">
            <a target="_blank" href="https://bsplan.guineainvestmentforum.com/Inscription-sur-la-plateforme" class="btn btn-default" style="border-radius: 20px;
    background: #c2a23f;color: #fff;"> Participate in GUIF 2022</a>
               @elseif(langue()=='Fr')
                 <a href="#" class="btn btn-default" style="border-radius: 20px;
    color: #fff;background: #193c7d;">Devenir partenaire du GUIF 2022</a>
          </div>
          <div class="col-md-6" style="">
            <a target="_blank" href="https://bsplan.guineainvestmentforum.com/Inscription-sur-la-plateforme" class="btn btn-default" style="border-radius: 20px;
    background: #c2a23f;color: #fff;"> Participer au GUIF 2022</a>
               @else
                 <a href="{{route('partenariat')}}" class="btn btn-default" style="border-radius: 20px;
    color: #fff;background: #193c7d;">Devenir partenaire du GUIF 2022</a>
          </div>
          <div class="col-md-6" style="">
            <a target="_blank" href="https://bsplan.guineainvestmentforum.com/Inscription-sur-la-plateforme" class="btn btn-default" style="border-radius: 20px;
    background: #c2a23f;color: #fff;"> Participer au GUIF 2022</a>
               @endif
           
          </div>
         
           </div>

          </div>

          <div class="col-md-6" style="margin-top: 10px;padding: 15px;">
            <div class="row">
              <div class="col-md-12">
                
                <iframe class="bounce-in-top" width="100%" height="300" src="https://www.youtube.com/embed/ZBKpuRwH7Ik" title="GUIF" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
              <div class="col-md-12">
                <div class="row" style="margin-left: 5px !important">
                  <div class="col-md-6" style="padding-left: 0px;">
                    <img src="{{asset('images/Guif2/img/slide6.jpg')}}" style="width: 100%;height: 200px;">
                  </div>
                  <div class="col-md-6" style="padding-left: 0px;">
                    <img src="{{asset('images/Guif2/cer.jpg')}}" style="width: 100%;height: 200px;">
                  </div>
                  
                  </div>
                  <div class="row" style="margin-left: 5px !important;margin-top: 2px !important">
                    <div class="col-md-6" style="padding-left: 0px;">
                    <img src="{{asset('images/Guif2/img/slide1.jpg')}}" style="width: 100%;height: 150px;">
                  </div>
                  <div class="col-md-3" style="padding-left: 0px;">
                    <img src="{{asset('images/Guif2/img/slide2.jpg')}}" style="width: 100%;height: 150px;">
                  </div>
                <div class="col-md-3" style="padding-left: 0px;padding-right: 0px;background-color: #fff;height: 150px;border: 1px solid grey;background-image: url('images/Guif2/album/1.jpg');background-size: cover;">
                   <a href="{{route('galerie')}} ">
                    <div style="text-align: center;background-color: #ffffffc7;height: 150px;width: 100%;padding-top: 80px;">
                      <center>
                        
                          <i class="fa fa-plus"></i>
                        <p style="color:#000;">VOIR PLUS</p>
                        
                        
                      </center>
                    </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
        </div>
       </div>
       
       
      </div>
  </section>
  <!-- /video --> 

  

   <section class="pricing" id="pricing" style="background: #fff;padding-top: 10px;padding-bottom: 30px">

     <div class="container">
        <div class="row" style="background: #000;">
        <div class="col-md-12" style="margin-bottom: 30px;">
           @if(langue()=='En')
               <center><p style="color: #c1a23f;font-size: 30px;text-transform: uppercase;width: 30%;margin-bottom: 0px;"><b>KEY FIGURES OF THE 2020 EDITION</b></p>
                  <p style="width: 15%;border-bottom: 2px solid #fff;"></p>
                </center>
               @elseif(langue()=='Fr')
                <center><p style="color: #c1a23f;font-size: 30px;text-transform: uppercase;width: 30%;margin-bottom: 0px;"><b>LES CHIFFRES CLéS DE L'éDITION 2020</b></p>
                  <p style="width: 15%;border-bottom: 2px solid #fff;"></p>
                </center>
               @else
                <center><p style="color: #c1a23f;font-size: 30px;text-transform: uppercase;width: 30%;margin-bottom: 0px;"><b>LES CHIFFRES CLéS DE L'éDITION 2020</b></p>
                  <p style="width: 15%;border-bottom: 2px solid #fff;"></p>
                </center>
               @endif
                
              
            </div>
        <div class="col-md-3">
          <center>
            <img src="{{asset('images/Guif2/img/i1.png')}}">
            <p style="color: #fff;font-weight: bold;margin-top: 15px;"> 
             @if(langue()=='En')
               1600 Participants registered online
               @elseif(langue()=='Fr')
                1600 Participants enregistrés en ligne
               @else
                1600 Participants enregistrés en ligne
               @endif
             </p>
          </center>

        </div>
        <div class="col-md-3">
           <center>
            <img src="{{asset('images/Guif2/img/i2.png')}}">
            <p style="color: #fff;font-weight: bold;margin-top: 15px;">
             @if(langue()=='En')
               600 Face-to-face participants in Conakry
               @elseif(langue()=='Fr')
                 600 Participants en présentiel à Conakry
               @else
                 600 Participants en présentiel à Conakry
               @endif
               </p>
          </center>
        </div>
        <div class="col-md-3">
          <center>
            <img src="{{asset('images/Guif2/img/i3.png')}}">
            <p style="color: #fff;font-weight: bold;margin-top: 15px;">
            @if(langue()=='En')
               75+
projects presented
               @elseif(langue()=='Fr')
                 75+
Projets présentés
               @else
                 75+
Projets présentés
               @endif
                </p>
          </center>
        </div>
        <div class="col-md-3">
           <center>
            <img src="{{asset('images/Guif2/img/i4.png')}}">
            <p style="color: #fff;font-weight: bold;margin-top: 15px;"> 
              @if(langue()=='En')
                $ 200M Funding Intentions
               @elseif(langue()=='Fr')
                 $200M
Intentions de financement
               @else
                 $200M
Intentions de financement
               @endif
               </p>
          </center>
        </div>
      </div>
     </div>


</section>

  

  <div class="team" id="team" style="background: #c1a23f;margin-top: 5px;">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="contact_title">
            <h2 style="color: #fff;">
            @if(langue()=='En')
                 Speakers
               @elseif(langue()=='Fr')
                 Intervenants
               @else
                Intervenants
               @endif
             </h2>
            
          </div>
        </div>
      </div>
      <div class="row clearfix" id="intervenant">

        <!-- temporaire à enlever -->
          <div class="col-md-12" style="display: none;">
            <p style="color: white;font-weight: bold;text-align: center;font-size: 25px;">
               @if(langue()=='En')
                 Coming Soon
               @elseif(langue()=='Fr')
                 A Venir
               @else
                A Venir
               @endif
            </p>
          </div>
        <!-- fin -->
        <div class="owl-carousel owl-theme ss_carousel our_team_slider" id="slider5" style="">
       @foreach ($intervenant as $intervenants)
           <div class="item">
              <div class="team-block col-md-12 col-sm-12 col-xs-12">
              <div class="inner-box">
                <div class="image"> <img src="{{ asset('images/portrait/'.$intervenants->image.'')}}" class="attachment-globalindustry_265x400 size-globalindustry_265x400 wp-post-image" style="height: 380px;">
                  <ul class="social-icon-one">
                    <li><a href="{{route('detailsIntervenant',$intervenants->id)}}" class="know_more" style="background: #c1a23f !important;">
                     @if(langue()=='En')
                 Details
               @elseif(langue()=='Fr')
                 Détails
               @else
                Détails
               @endif
                <span class="fa fa fa-arrow-right"></span></a></li>
                  </ul>
                </div>
                <div class="lower-box" style="height: 130px;background-color: #000 !important;">
                   <h3><a href="#">{{$intervenants->nom}}</a></h3>
                  <div class="designation">
                   @if(langue()=='En')
                 {{$intervenants->fonction_en}}
               @elseif(langue()=='Fr')
                 {{$intervenants->fonction}}
               @else
                {{$intervenants->fonction}}
               @endif
             </div>
                </div>
              </div>
            </div> 
          </div> 
          @endforeach
        </div>
      </div>
    </div>
  </div>
  <!-- /team end --> 

   <!-- /partners -->
  <section class="services" id="partenaire">
    <div class="services-content" style="background: #fff;padding-top: 10px;">
     
      <div class="container">
        <div class="row">
          <div class="col-md-12" style="">
                <center><p style="color: #000;font-size: 18px;text-transform: uppercase;margin-bottom: 0px;"><b>
                   @if(langue()=='En')
               A RENOWNED ORGANIZER
               @elseif(langue()=='Fr')
                UN ORGANISATEUR DE RENOMMée
               @else
                UN ORGANISATEUR DE RENOMMée
               @endif
                </b></p>
                  <p style="width: 15%;border-bottom: 2px solid #d1ae3b;"></p>
                  <img src="{{asset('images/apip.png')}}" style="height: 100px;">
                </center>
              
            </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-12" style="">
                <center><p style="color: #000;font-size: 18px;text-transform: uppercase;margin-bottom: 0px;"><b>
                   @if(langue()=='En')
               INSTITUTIONS IN THE HONOR
               @elseif(langue()=='Fr')
                DES INSTITUTIONS à L'HONNEUR
               @else
                DES INSTITUTIONS à L'HONNEUR
               @endif
                </b></p>
                  <p style="width: 15%;border-bottom: 2px solid #d1ae3b;"></p>
                 <div class="row">
                    <div class="col-md-6">
                    <img src="{{asset('images/partenaire/IFC2.jpg')}}" style="height: 100px;">
                  </div>
                  <div class="col-md-6">
                    <img src="{{asset('images/partenaire/bad.png')}}" style="height: 100px;">
                  </div>
                 </div>
                </center>
              
            </div>
        </div>
        <br>
         <div class="row">
          <div class="col-md-12" style="">
                <center><p style="color: #000;font-size: 18px;text-transform: uppercase;margin-bottom: 0px;"><b>@if(langue()=='En')
                 Partners
               @elseif(langue()=='Fr')
                 DES Partenaires POUR VOUS AIDER
               @else
                DES Partenaires POUR VOUS AIDER
               @endif</b></p>
                  <p style="width: 15%;border-bottom: 2px solid #d1ae3b;"></p>
                  
                </center>

                <div class="row">
                  <div class="col-md-12">
          <div class="owl-carousel owl-theme ss_carousel partners_slider" id="slider1">
         
            <div class="item"> <img class="img-fluid" src="images/partenaire/fiduxis.jpg" alt="codecanyon" style="height: 80px;width: 300px;margin-top: 30px;"> </div>
            <div class="item"> <img class="img-fluid" src="images/partenaire/sonap.png" alt="videohive" style="height: 100px;width: 180px;margin-top: 20px;"> </div>
            <div class="item"> <img class="img-fluid" src="images/partenaire/lb.png" alt="photodune" style="height: 100px;width: 150px;margin-top: 20px;"> </div>
            <div class="item"> <img class="img-fluid" src="images/partenaire/maf.jpg" alt="photodune" style="height: 100px;width: 150px;margin-top: 20px;"> </div>
          
            <div class="item"> <img class="img-fluid" src="images/partenaire/globetrans.jpg" alt="photodune" style="height: 100px;width: 200px;margin-top: 20px;"> </div>
            <div class="item"> <img class="img-fluid" src="images/partenaire/cbg.png" alt="photodune" style="height: 100px;width: 200px;margin-top: 20px;"> </div>
             <div class="item"> <img class="img-fluid" src="images/partenaire/soguibec.jpg" alt="photodune" style="height: 100px;width: 200px;margin-top: 20px;"> </div>
            <div class="item"> <img class="img-fluid" src="images/partenaire/topaz.jpg" alt="photodune" style="height: 100px;width: 150px;margin-top: 20px;"> </div>
            <div class="item"> <img class="img-fluid" src="images/partenaire/rtg.jpg" alt="photodune" style="height: 100px;width: 200px;margin-top: 20px;"> </div>
            
            <div class="item"> <img class="img-fluid" src="images/partenaire/monarque.png" alt="photodune" style="height: 100px;width: 200px;margin-top: 20px;"> </div>
             <div class="item"> <img class="img-fluid" src="images/partenaire/djoma.png" alt="photodune" style="height: 100px;width: 200px;margin-top: 20px;"> </div>
             
             
               <div class="item"> <img class="img-fluid" src="images/partenaire/apb.png" alt="photodune" style="height: 100px;width: 150px;margin-top: 20px;"> </div>
          </div>
        </div>
                </div>
              
            </div>
        </div>
        <br><br>
        <div class="row">
          <div class="col-md-10" style="margin: 0 auto;">
           <div class="row">
              <div class="col-md-4" style="">
            <a href="{{route('partenaire')}}" class="btn btn-default" style="border-radius: 20px;
    color: #fff;background: #193c7d;">
     @if(langue()=='En')
               See all partners
               @elseif(langue()=='Fr')
                Voir tous les partenaires
               @else
                Voir tous les partenaires
               @endif

  </a>
          </div>
          <div class="col-md-4" style="">
            <a href="{{route('partenariat')}}" class="btn btn-default" style="border-radius: 20px;
    background: #c2a23f;color: #fff;">
     @if(langue()=='En')
               Become a GUIF 2022 Partner
               @elseif(langue()=='Fr')
                Devenir partenaire du GUIF 2022
               @else
                Devenir partenaire du GUIF 2022
               @endif

  </a>
          </div>
          <div class="col-md-4" style="">
            <a href="https://guineaexpo2020.com/" target="_blank" class="btn btn-default" style="border-radius: 20px;
    color: #fff;background: #193c7d;">
     @if(langue()=='En')
               Participate in GUIF 2022
               @elseif(langue()=='Fr')
                Participer au GUIF 2022
               @else
                Participer au GUIF 2022
               @endif
  </a>
          </div>
           </div>
          </div>
        </div>
       
      </div>
    </div>
  </section>
  <!-- /partners --> 

  


  

   @stop