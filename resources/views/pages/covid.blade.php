@extends('templates/default',['title'=>'GUIF | COVID'])
        

    @section('contenu')
    <style type="text/css">
       .zoomIn {
  -webkit-animation-name: zoomIn;
  animation-name: zoomIn;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  }
  @-webkit-keyframes zoomIn {
  0% {
  opacity: 0;
  -webkit-transform: scale3d(.3, .3, .3);
  transform: scale3d(.3, .3, .3);
  }
  50% {
  opacity: 1;
  }
  }
  @keyframes zoomIn {
  0% {
  opacity: 0;
  -webkit-transform: scale3d(.3, .3, .3);
  transform: scale3d(.3, .3, .3);
  }
  50% {
  opacity: 1;
  }
  } 

  p{
    margin: 0px;
    text-align: justify;
  }
    </style>
 <!--/page_bannner start-->
   <div class="carousel-item active" style="background-image:url(images/1.jpg); background-size:cover; height:200px; width:100%;">
    <div class="carousel-caption1" style="text-align: left;">
      
      <div class="breadcrumbs d-sm-none d-md-block d-none d-sm-block">
        <div class="container">
         <div class="about_btn" style="position: absolute;right: -82px;top: 1px;"> <a href="{{route('partenariat')}}" class="explore">
           @if(langue()=='En')
                Become partner
               @elseif(langue()=='Fr')
                 Devenir partenaire
               @else
                Devenir partenaire
               @endif
             </a></div>
          
        </div>
      </div>
    </div>
  </div>
  <!--/page_banner end--> 

   <!-- /about start -->
  <section class="about inner_about" id="about">
   
  <div class="container">

      <div class="row" >
        <div class="col-md-12">
          <center><h1 style="color: #c1a23f;">
          @if(langue()=='En')
               COVID-19 safety measures
               @elseif(langue()=='Fr')
                 Mesures de sécurité COVID-19
               @endif
        </h1></center>
        </div>
        <div class="col-md-12">
          <br>
         <b>
            <p style="color: #28a745;">
          @if(langue()=='En')
               Before coming to Expo
               @elseif(langue()=='Fr')
                 Avant de venir à l’Expo
               @endif
        </p>
         </b>
        </div>
        <div class="col-md-12">
          <p style="">
            @if(langue()=='En')
               Please do not visit Expo 2020 if you are suffering from any health symptoms associated with COVID-19, if you have been in close contact with an individual confirmed as COVID-19 positive, or are under any quarantine/self-quarantine orders.
               @elseif(langue()=='Fr')
                 Veuillez ne pas vous rendre à l’Expo 2020 si vous souffrez des symptômes associés à la COVID-19, si vous avez été en contact étroit avec une personne confirmée comme positive à la COVID-19, ou si vous êtes en quarantaine/auto-quarantaine.
               @endif
          </p>
        </div>
      </div>

       <div class="row" >
        <div class="col-md-12">
          <br>
          <b>
          @if(langue()=='En')
          <p style="color: #28a745;">COVID-19 safety measures and precautions</p>
               @elseif(langue()=='Fr')
                <p style="color: #28a745;">Mesures de sécurité et précautions COVID-19</p>
               @endif
          </b>

          <p>
            @if(langue()=='En')
              <p>We want to make sure that your visit is enjoyable and safe. To ensure this, we have implemented a number of precautionary measures across the site:
              </p>
               @elseif(langue()=='Fr')
                <p>
                  Nous voulons nous assurer que votre visite est agréable et sûre. Nous avons à cet effet mis en œuvre un certain nombre de mesures de précaution sur l’ensemble du site:
                </p>
               @endif
          </p>

          <div class="row">
            <div class="col-md-4">
              <center><img src="{{asset('images/Guif2/camera.svg')}}" style="height: 80px;"></center>
               @if(langue()=='En')
              <p>Thermal cameras at arrival points to check the temperature of visitors before entry to the site
              </p>
               @elseif(langue()=='Fr')
                <p>
                  Caméras thermiques aux points d’arrivée pour vérifier la température des visiteurs avant leur entrée sur le site
                </p>
               @endif
            </div>
            <div class="col-md-4">
               <center><img src="{{asset('images/Guif2/mask.svg')}}" style="height: 80px;"></center>
               @if(langue()=='En')
              <p>Visitors are required to wear face masks at all times
              </p>
               @elseif(langue()=='Fr')
                <p>
                  Les visiteurs sont tenus de porter des masques faciaux à tout moment
                </p>
               @endif
            </div>
            <div class="col-md-4">
               <center><img src="{{asset('images/Guif2/distance.svg')}}" style="height: 80px;"></center>
               @if(langue()=='En')
              <p>Social-distancing regulations of at least two metres between people
              </p>
               @elseif(langue()=='Fr')
                <p>
                  Règles de distanciation physique d’au moins deux mètres entre les personnes
                </p>
               @endif
            </div>
            <div class="col-md-4">
              <center><img src="{{asset('images/Guif2/clean.svg')}}" style="height: 80px;"></center>
               @if(langue()=='En')
              <p>All venues and common areas are regularly cleaned and sanitised
              </p>
               @elseif(langue()=='Fr')
                <p>
                  Tous les lieux et espaces communs sont régulièrement nettoyés et désinfectés
                </p>
               @endif
            </div>
             <div class="col-md-4">
              <center><img src="{{asset('images/Guif2/hand.svg')}}" style="height: 80px;"></center>
               @if(langue()=='En')
              <p>Hand-sanitiser stations are positioned at regular intervals throughout the site
              </p>
               @elseif(langue()=='Fr')
                <p>
                  Les stations de désinfection des mains sont positionnées à intervalles réguliers sur l’ensemble du site
                </p>
               @endif
            </div>
            <div class="col-md-4">
              <center><img src="{{asset('images/Guif2/aid.svg')}}" style="height: 80px;"></center>
               @if(langue()=='En')
              <p>Appropriate facilities and specialist staff are available to manage any potential medical issues on site
              </p>
               @elseif(langue()=='Fr')
                <p>
                  Des installations adaptées et un personnel spécialisé sont disponibles pour gérer tout problème médical potentiel sur le site
                </p>
               @endif
            </div>

          </div>
           <br>
          <div class="col-md-12">
            <p style="color: #28a745;"><b>Sur l’ensemble du site, vous trouverez:
</b></p>
            <ul>
              <li>Une multitude de stations de désinfection des mains et de toilettes</li>
              <li>
                Marquages au sol indiquant la distance appropriée à respecter, que ce soit lorsque vous patientez dans une file d’attente, lorsque vous assistez à une exposition ou un spectacle ou lorsque vous profitez de nos parcs et zones de loisirs
              </li>
              <li>
                Espaces de restauration avec des tables suffisamment éloignées les unes des autres et avec une capacité d’accueil appropriée
              </li>
              <li>
                Des membres du personnel de l’Expo qui pourront répondre à vos questions et vous informer sur nos pratiques de sécurité</li>
                <li>Cliniques et installations médicales, au cas où vous vous sentiriez mal
</li>
            </ul>
          </div>

         

        </div>
        
      </div>
     

   

  </div>
  </section>
  <!-- /about end -->

   @stop