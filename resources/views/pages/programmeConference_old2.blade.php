@extends('templates/default',['title'=>'GUIF | PROGRAMME & CONFERENCE'])
        

    @section('contenu')
   <style type="text/css">
     /*!
 * Start Bootstrap - Scrolling Nav (https://startbootstrap.com/template-overviews/scrolling-nav)
 * Copyright 2013-2019 Start Bootstrap
 * Licensed under MIT (https://github.com/BlackrockDigital/startbootstrap-scrolling-nav/blob/master/LICENSE)
 */
 html {
    scroll-behavior: smooth;
}
   </style>
     <!--/page_bannner start-->
  <div class="carousel-item active" style="background-image:url(images/forum3.jpg); background-size:cover; height:520px; width:100%;">
    <div class="carousel-caption1" style="text-align: left;">
       
      <div class="breadcrumbs">
        <div class="container">
        <div class="slideInLeft2 hidephone" style="position: absolute;left: -150px;top: -81px;color: #fff;">
          <h2 style="margin-bottom: 30px;color: #fff;text-transform: uppercase;">
            @if(langue()=='En')
                Program
               @elseif(langue()=='Fr')
                 Programmes et conférences
               @else
                Programmes et conférences
               @endif
             </h2>
          <p style="width: 600px;
    font-weight: bold;
    color: #c1a23f;
    font-size: 30px;">
             @if(langue()=='En')
                11 to 14 February 2022 at Expo 2020 in Dubaï
               @elseif(langue()=='Fr')
                 11 au 14 Fevrier 2022 à Expo 2020 Dubaï
               @else
                11 au 14 Fevrier 2022 à Expo 2020 Dubaï
               @endif


          </p>
        </div>
         <div class="slideInLeft2 hidepc" style="position: absolute;left: -70px;top: -81px;color: #fff;width: 70%;">
          <h2 style="margin-bottom: 30px;color: #fff;text-transform: uppercase;">
            @if(langue()=='En')
                Program
               @elseif(langue()=='Fr')
                 Programmes et conférences
               @else
                Programmes et conférences
               @endif
             </h2>
          <p style="width: 500px;font-weight: bold;">
             @if(langue()=='En')
                11 to 14 February 2022 at Dubaï
               @elseif(langue()=='Fr')
                 11 au 14 Fevrier 2022 à Dubaï
               @else
                11 au 14 Fevrier 2022 à Dubaï
               @endif
                


          </p>
        </div>
            <div class="about_btn slideInRight2 hidephone" style="position: absolute;right: -150px;bottom: 10px;">
              <h4 style="margin-bottom: 30px;color: #fff;">
                @if(langue()=='En')
                Program
               @elseif(langue()=='Fr')
                 Programmes
               @else
                Programmes
               @endif
             </h4>
             <a href="#premier" class="explore2" style="margin-right: 10px;">
               @if(langue()=='En')
                 February 11, 2022
               @elseif(langue()=='Fr')
                  11 février 2022
               @else
                 11 février 2022
               @endif
             </a><a href="#deuxieme" class="explore2" style="margin-right: 10px;">
              @if(langue()=='En')
                 February 12, 2022
               @elseif(langue()=='Fr')
                  12 février 2022
               @else
                 12 février 2022
               @endif
             </a>
            <a href="#troisieme" class="explore2" style="margin-right: 10px;">
              @if(langue()=='En')
                 February 13, 2022
               @elseif(langue()=='Fr')
                  13 février 2022
               @else
                 26 février 2022
               @endif
             </a>
              <a href="#quatrieme" class="explore2">
              @if(langue()=='En')
                 February 14, 2022
               @elseif(langue()=='Fr')
                  14 février 2022
               @else
                 14 février 2022
               @endif
             </a>
          </div>


           <div class="about_btn slideInRight2 hidepc" style="position: absolute;right: -110px;bottom: 10px;">
              <h4 style="margin-bottom: 30px;color: #fff;">
                @if(langue()=='En')
                Program
               @elseif(langue()=='Fr')
                 Programmes
               @else
                Programmes
               @endif
             </h4>
             <a href="#premier" class="explore2" style="margin-right: 20px;">
              @if(langue()=='En')
                Friday February 11, 2022
               @elseif(langue()=='Fr')
                 Vendredi 11 février 2022
               @else
                Vendredi 11 février 2022
               @endif
             </a>
              <br><br><br>
              <a href="#deuxieme" class="explore2" style="margin-right: 20px;">
               @if(langue()=='En')
                Saturday, February 12, 2022
               @elseif(langue()=='Fr')
                 Samedi 12 février 2022
               @else
                Samedi 12 février 2022
               @endif
             </a>
             <br><br><br>
            <a href="#troisieme" class="explore2">
              @if(langue()=='En')
                Sunday February 13, 2022
               @elseif(langue()=='Fr')
                 Dimanche 13 février 2022
               @else
                Vendredi 26 février 2022
               @endif
             </a>
              <br><br><br>
            <a href="#quatrieme" class="explore2">
              @if(langue()=='En')
                Monday February 14, 2022
               @elseif(langue()=='Fr')
                 Lundi 14 février 2022
               @else
                Lundi 14 février 2022
               @endif
             </a>
          </div>
          
        </div>
      </div>
    </div>
  </div>
  <!--/page_banner end--> 
  <style type="text/css">
    .ligne{
      text-align: center;
      color: white;
      background: #c1a23f;
    }
    .colonne{
      text-align: center;

    }
    .red{
      color:#0d9457;

    }
  </style>

   <!-- /contact start-->
  
    <section class="contact_page" style="margin-bottom: 0px;padding-top: 50px;" id="premier">
       <div class="row">
     <div class="col-md-12">
      <!--  @if(langue()=='En')
                <p style="color:red;text-align: center;">
         <b><u style="color: #000;">NOTES:</u></b> 8:00 AM IN GUINEA IT IS 12:00 AM IN THE UNITED ARAB EMIRATES, 4:00 PM IN CHINA, 1:30 PM IN INDIA, 5:00 PM IN JAPAN.
       </p>
               @elseif(langue()=='Fr')
                 <p style="color:red;text-align: center;">
         <b><u style="color: #000;">NOTES:</u></b> 08:00 EN GUINEE C’EST 12:00 AUX EMIRATS ARABES UNIS, 16:00 EN CHINE, 13:30 EN INDE, 17:00 AU JAPON.
       </p>
               @else
                <p style="color:red;text-align: center;">
         <b><u style="color: #000;">NOTES:</u></b> 08:00 EN GUINEE C’EST 12:00 AUX EMIRATS ARABES UNIS, 16:00 EN CHINE, 13:30 EN INDE, 17:00 AU JAPON.
       </p>
               @endif -->
       
      
     </div>
   </div>
  <div class="container">
    <div style="padding: 40px;text-align: center;"><h2 style="color:#0d9457;">
<i class="fa fa-calendar"></i>  @if(langue()=='En')
                Friday February 11, 2022
               @elseif(langue()=='Fr')
                 Vendredi 11 février 2022
               @else
                Vendredi 11 février 2022
               @endif</h2></div>
    <div class="row" style="padding: 5px; box-shadow: 0 1px 16px hsla(0,0%,48.6%,.2);">
      
       <table class="table table-bordered">
                   <tr class="ligne" style=""><th>
                    @if(langue()=='En')
                Friday February 11, 2022
               @elseif(langue()=='Fr')
                 Vendredi 11 février 2022
               @else
                Vendredi 11 février 2022
               @endif
             </th></tr>
                  <tr>
                    <td class="colonne" style="">
                       <h1 style="">CEREMONIE D'OUVERTURE</h1>
                      <p style="text-align: justify;">@if(langue()=='En')
                Plenary and panel sessions updating the industry on latest
developments in Guinea. Presentation of the government
strategy and main trends in the Guinean economy with a focus on
the framework and structural reforms to improve the business
environment.
This day will be streamed to an online audience
               @elseif(langue()=='Fr')
                 Séances plénières et panel de haut niveau sur les progrès de
développement en Guinée. Présentation de la stratégie du
gouvernement et des principales tendances de l'économie
guinéenne en mettant l'accent sur le cadre et les réformes
structurelles pour améliorer l'environnement des affaires. Cette
journée sera diffusée à un public en ligne
               @else
                Séances plénières et panel de haut niveau sur les progrès de
développement en Guinée. Présentation de la stratégie du
gouvernement et des principales tendances de l'économie
guinéenne en mettant l'accent sur le cadre et les réformes
structurelles pour améliorer l'environnement des affaires. Cette
journée sera diffusée à un public en ligne
               @endif
                      </p>
                      <p style="font-weight: bold;">
                        <i class="fa fa-map-marker" style="color:#0d9457;"></i> HALL 2A SOUTH
DUBAI EXHIBITION CENTRE
                      </p>
                     
                   </td>
                  </tr>

              </table>
    </div>
  </div>
</section>
  <!-- /contact end--> 

<section class="contact_page" style="margin-bottom: 0px;padding-top: 50px;" id="deuxieme">
  <div class="container">
     <div style="padding: 40px;text-align: center;"><h2 style="color:#0d9457;">
<i class="fa fa-calendar"></i>  
 @if(langue()=='En')
                Saturday, February 12, 2022
               @elseif(langue()=='Fr')
                 Samedi 12 février 2022
               @else
                Samedi 12 février 2022
               @endif
               </h2></div>
    <div class="row" style="padding: 5px; box-shadow: 0 1px 16px hsla(0,0%,48.6%,.2);">
      <table class="table table-bordered">
                   <tr class="ligne" style=""><th>
                    @if(langue()=='En')
                Saturday, February 12, 2022
               @elseif(langue()=='Fr')
                 Samedi 12 février 2022
               @else
                Samedi 12 février 2022
               @endif
             </th>
           </tr>
                  <tr>
                   
                    <td class="colonne">
                       <h1 style="">EXPOSITION ET PRESENTATION DE PROJETS</h1>
                      <p style="text-align: justify;">
                                              @if(langue()=='En')
                Project showcases with presentations from verified publics and
private projects. Sector panel discussion on the stage with
leading national and internationals partners. Opening of
exhibition area to facilitate exchange with potential partners.
               @elseif(langue()=='Fr')
                 Des dealrooms avec des présentations de projets matures
publics et privés. Tables rondes sectorielles avec des
partenaires de premier plan nationaux et internationaux.
Ouverture de l’espace d’expositions pour favoriser les échanges
avec de potentiels partenaires.
               @else
                Des dealrooms avec des présentations de projets matures
publics et privés. Tables rondes sectorielles avec des
partenaires de premier plan nationaux et internationaux.
Ouverture de l’espace d’expositions pour favoriser les échanges
avec de potentiels partenaires.
               @endif
                      </p>
                      <p style="font-weight: bold;">
                        <i class="fa fa-map-marker" style="color:#0d9457;"></i> HALL 2A SOUTH
DUBAI EXHIBITION CENTRE
                      </p>
                   </td>
                  </tr>
                  
                   

              </table>
    </div>
  </div>
</section>

 <section class="contact_page" style="margin-bottom: 0px;padding-top: 50px;" id="troisieme">
  <div class="container">
    <div style="padding: 40px;text-align: center;"><h2 style="color:#0d9457;">
<i class="fa fa-calendar"></i>   @if(langue()=='En')
                Sunday February 13, 2022
               @elseif(langue()=='Fr')
                 Dimanche 13 février 2022
               @else
                Vendredi 26 février 2022
               @endif</h2></div>
<div class="row" style="padding: 5px; box-shadow: 0 1px 16px hsla(0,0%,48.6%,.2);">
     <table class="table table-bordered">
                    <tr class="ligne" style=""><th>
                       @if(langue()=='En')
                Sunday February 13, 2022
               @elseif(langue()=='Fr')
                 Dimanche 13 février 2022
               @else
                Vendredi 26 février 2022
               @endif
             </th></tr>
                  <tr>
                    <td class="colonne" style="">
                      <h1 style="">FETE NATIONALE DE LA GUINEE</h1>
                      <p style="text-align: justify;">
                                              @if(langue()=='En')
                Cultural programme showcasing Guinea’s heritage. Visit
Guinea’s country pavilion as part of Expo 2020 Dubai
               @elseif(langue()=='Fr')
                 Programme culturel mettant en avant le patrimoine guinéen.
Visite officielle du pavillon de la Guinée dans le cadre de l'Expo
2020 Dubaï par les officiels.
               @else
                Programme culturel mettant en avant le patrimoine guinéen.
Visite officielle du pavillon de la Guinée dans le cadre de l'Expo
2020 Dubaï par les officiels.
               @endif
                      </p>
                      <p style="font-weight: bold;">
                        <i class="fa fa-map-marker" style="color:#0d9457;"></i> AL WASL PLAZA
EXPO VILLAGE
                      </p>
                      
                  </td>
                  </tr>
                   
                  

              </table>
    </div>
  </div>
</section>

<section class="contact_page" style="margin-bottom: 0px;padding-top: 50px;" id="quatrieme">
  <div class="container">
    <div style="padding: 40px;text-align: center;"><h2 style="color:#0d9457;">
<i class="fa fa-calendar"></i> @if(langue()=='En')
                Monday February 14, 2022
               @elseif(langue()=='Fr')
                 Lundi 14 février 2022
               @else
                Lundi 14 février 2022
               @endif</h2></div>
<div class="row" style="padding: 5px; box-shadow: 0 1px 16px hsla(0,0%,48.6%,.2);">
     <table class="table table-bordered">
                    <tr class="ligne" style=""><th>
                    @if(langue()=='En')
                Monday February 14, 2022
               @elseif(langue()=='Fr')
                 Lundi 14 février 2022
               @else
                Lundi 14 février 2022
               @endif
             </th></tr>
                  <tr>
                    <td class="colonne" style="">
                      <h1 style="">B2B & B2G</h1>
                      <p style="text-align: justify;">
                                              @if(langue()=='En')
               Réunions d’échanges entre les investisseurs et les porteurs de
projets publics et privés pour favoriser des intentions de
financement..
               @elseif(langue()=='Fr')
                 Réunions d’échanges entre les investisseurs et les porteurs de
projets publics et privés pour favoriser des intentions de
financement..
               @else
                Programme culturel mettant en avant le patrimoine guinéen.
Visite officielle du pavillon de la Guinée dans le cadre de l'Expo
2020 Dubaï par les officiels.
               @endif
                      </p>
                      <p style="font-weight: bold;">
                        <i class="fa fa-map-marker" style="color:#0d9457;"></i> LARGE MEETING ROOM
BUSINESS CONNECT CENTRE
                      </p>
                  </td>
                  </tr>
                   
                  

              </table>
    </div>
  </div>
</section>


   @stop