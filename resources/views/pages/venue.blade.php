@extends('templates/default',['title'=>'GUIF | VENUE'])
        

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
               Accessibility at Expo 2020 Dubai
               @elseif(langue()=='Fr')
                 Accessibilité à l’Expo 2020 Dubaï
               @endif
        </h1></center>
        </div>
        <div class="col-md-12">
          <p style="text-align: center;">
            @if(langue()=='En')
               Expo 2020 aspires to be the most accessible expo in history. We want all of our visitors to enjoy their time at The World’s Greatest Show. On site, we’re offering a variety of services for people of determination – our visitors with special needs or disabilities.
               @elseif(langue()=='Fr')
                 <p style="text-align: center;">L’Expo 2020 a pour ambition d’être l’exposition la plus accessible jamais organisée. </p>
                 <p style="text-align: center;">Nous souhaitons que tous nos visiteurs profitent au maximum de leur passage au plus fabuleux spectacle au monde.</p> 
                 <p style="text-align: center;">
                   Sur place, nous offrons un large éventail de services aux personnes ayant des besoins spéciaux, nos visiteurs présentant des besoins spécifiques ou un handicap.
                 </p>
               @endif
          </p>
        </div>
      </div>
       <br>
       <div class="row" >
        <div class="col-md-12">
          <b>
          @if(langue()=='En')
               <h4 style="text-transform: uppercase;color: #c1a23f;">People of determination</h4>
                <p style="color: #28a745;">Did you know?</p>
               @elseif(langue()=='Fr')
                <h4 style="text-transform: uppercase;color: #c1a23f;">Personnes ayant des besoins spéciaux</h4>
                <p style="color: #28a745;">Le saviez-vous ?</p>
               @endif
          </b>

          <p>
            @if(langue()=='En')
              <p>In the United Arab Emirates, people with disabilities are officially referred to as people of determination. The term reflects the UAE’s mission to create an inclusive, barrier-free, rights-based society that promotes, protects and ensures the self-determination of everyone with the aim to empower people of determination and their families.
              </p>
               @elseif(langue()=='Fr')
                <p>
                  Aux Émirats arabes unis, les personnes en situation de handicap sont officiellement appelées des personnes ayant des besoins spéciaux. Ce terme traduit la mission des Émirats arabes unis de créer une société inclusive, sans obstacle et fondée sur les droits, qui promet, protège et garantit l’autodétermination de chacun, dans le but de renforcer l’autonomie des personnes ayant des besoins spéciaux et de leurs familles.
                </p>
               @endif
          </p>

          <p>
            @if(langue()=='En')
              As you visit Expo 2020 and travel around Dubai and the UAE, you may hear people using this term and see signs for facilities or programs for people of determination.
               @elseif(langue()=='Fr')
                En visitant l’Expo 2020 et en parcourant Dubaï et les Émirats arabes unis, vous entendrez peut-être des gens utiliser ce terme et verrez des panneaux indiquant des installations ou des programmes destinés aux personnes ayant des besoins spéciaux.
               @endif
          </p>
          <br>
           <b>
          @if(langue()=='En')
               <p style="color: #28a745;">Security</p>
               @elseif(langue()=='Fr')
                <p style="color: #28a745;">Sécurité</p>
               @endif
          </b>

          <p>
            @if(langue()=='En')
              Expo 2020 is a large event with many visitors. For your security we will ask visitors to go through a security screening device that contains a metal detector. If you use a medical device and have been advised not to go through a metal detector, please inform security so they can advise you on alternative screening routes.
               @elseif(langue()=='Fr')
                L’Expo 2020 est un grand événement attirant de nombreux visiteurs. Pour votre sécurité, nous demanderons aux visiteurs de passer par un dispositif de contrôle de sécurité qui contient un détecteur de métaux. Si vous portez un appareil médical et que l’on vous a conseillé de ne pas passer par un détecteur de métaux, veuillez en informer la sécurité afin qu’elle puisse vous indiquer d’autres méthodes de contrôle.
               @endif
          </p>

          <br>
           <b>
          @if(langue()=='En')
               <p style="color: #28a745;">Free tickets for people of determination</p>
               @elseif(langue()=='Fr')
                <p style="color: #28a745;">Billets gratuits pour les personnes ayant des besoins spéciaux</p>
               @endif
          </b>

          <p>
            @if(langue()=='En')
              Tickets to Expo 2020 are free of charge for people of determination and a 50% discount is given for one companion. This is part of the Dubai government’s commitment to empower people of determination.
               @elseif(langue()=='Fr')
                Les billets de l’Expo 2020 sont gratuits pour les personnes ayant des besoins spéciaux et une remise de 50 % est accordée à leur accompagnateur. Cette mesure s’inscrit dans le cadre de l’engagement du gouvernement de Dubaï en faveur du renforcement de l’autonomie des personnes ayant des besoins spéciaux.
               @endif
          </p>

          <p>
            @if(langue()=='En')
              People of determination will be required to provide proof of disability status from their respective countries (e.g. people of determination ID card; Sanad card; Social Security benefit letter e.g. DLA, PIP; EU disability card; ADA disability card, France’s carte d’invalidité, etc.).
               @elseif(langue()=='Fr')
               Les personnes ayant des besoins spéciaux devront fournir un justificatif de leur statut de personne en situation de handicap délivré par leur pays (par exemple, la carte d’identification « people of determination » ou la carte Sanad de Dubaï, un courrier de prestations de sécurité sociale (telles que l’allocation aux adultes handicapés), la carte européenne du handicap, la carte américaine du handicap ADA, la carte française d’invalidité, etc.).
               @endif
          </p>
          <p>
            @if(langue()=='En')
              All visitors, including people of determination, must obtain a ticket to enter Expo 2020.
               @elseif(langue()=='Fr')
               Tous les visiteurs, y compris les personnes ayant des besoins spéciaux, doivent être munis d’un billet pour accéder à l’Expo 2020.
               @endif
          </p>
                <br>
           <b>
          @if(langue()=='En')
               <p style="color: #28a745;">PODium App</p>
               @elseif(langue()=='Fr')
                <p style="color: #28a745;">Application PODium</p>
               @endif
          </b>

          <p>
            @if(langue()=='En')
              This innovative app, designed specifically for people of determination visiting Expo 2020, will enable visitors to navigate around the Expo 2020 site and know what features of accessibility are available in each pavilion, and readily find accessible services. It will be available to download before Expo 2020 opens.
               @elseif(langue()=='Fr')
                Cette application innovante est spécialement conçue pour les personnes ayant des besoins spéciaux visitant l’Expo 2020. Elle permettra aux visiteurs de s’orienter sur le site de l’Expo 2020, de connaître les caractéristiques d’accessibilité de chaque pavillon et de trouver facilement des services accessibles. L’application pourra être téléchargée avant l’ouverture de l’Expo 2020.
               @endif
          </p>
               <br>
           <b>
          @if(langue()=='En')
               <p style="color: #28a745;">Visitors with additional requirements</p>
               @elseif(langue()=='Fr')
                <p style="color: #28a745;">Visiteurs ayant des besoins supplémentaires</p>
               @endif
          </b>

          <p>
            @if(langue()=='En')
              Find specific information about accessibility features to assist those with visual or hearing impairments, autism or intellectual impairment, dementia, photosensitive epilepsy or reduced mobility.

               @elseif(langue()=='Fr')
               Trouvez des informations spécifiques sur les dispositifs d’accessibilité destinés à aider les personnes souffrant de troubles visuels ou auditifs, d’autisme ou de déficience intellectuelle, de démence, d’épilepsie photosensible ou de mobilité réduite.

               @endif
          </p>
              <br>
           <b>
          @if(langue()=='En')
               <p style="color: #28a745;">Transportation and parking</p>
               @elseif(langue()=='Fr')
                <p style="color: #28a745;">Transport et stationnement</p>
               @endif
          </b>

          <p>
            @if(langue()=='En')
              This section provides accessibility information for Dubai’s airports, Dubai Metro, Expo Rider bus, taxis, parking at Expo 2020 and transportation from the carpark and within Expo 2020.

               @elseif(langue()=='Fr')
               Cette section fournit des informations sur l’accessibilité des aéroports de Dubaï, du métro de Dubaï, des bus Expo Rider, des taxis, du parking de l’Expo 2020 et du transport depuis le parking et au sein de l’Expo 2020.

               @endif
          </p>
          <br>
           <b>
          @if(langue()=='En')
               <p style="color: #28a745;">Facilities and services</p>
               @elseif(langue()=='Fr')
                <p style="color: #28a745;">Installations et services</p>
               @endif
          </b>

          <p>
            @if(langue()=='En')
              Learn about the accessibility features provided to make your visit more enjoyable, including storage of medicine and special products, quiet rooms, first aid centres and areas for service dogs.

               @elseif(langue()=='Fr')
               Découvrez les aménagements d’accessibilité prévus pour rendre votre visite plus agréable, notamment le stockage de médicaments et de produits spéciaux, les salles de repos, les centres de premiers secours et les aires réservées aux chiens d’assistance.

               @endif
          </p>

        </div>
        
      </div>
     

   

  </div>
  </section>
  <!-- /about end -->

   @stop