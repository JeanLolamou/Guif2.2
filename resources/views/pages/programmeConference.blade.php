@extends('templates/default',['title'=>'GUIF | PROGRAMMES'])
        

    @section('contenu')
    <style type="text/css">
     
/*  bhoechie tab */
div.bhoechie-tab-container{
  z-index: 10;
  background-color: #ffffff;
  padding: 0 !important;
  border-radius: 4px;
  -moz-border-radius: 4px;
  border:1px solid #ddd;
  margin-top: 20px;
  /*margin-left: 50px;*/
  -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
  box-shadow: 0 6px 12px rgba(0,0,0,.175);
  -moz-box-shadow: 0 6px 12px rgba(0,0,0,.175);
  background-clip: padding-box;
  opacity: 0.97;
  filter: alpha(opacity=97);
}
div.bhoechie-tab-menu{
  padding-right: 0;
  padding-left: 0;
  padding-bottom: 0;
}
div.bhoechie-tab-menu div.list-group{
  margin-bottom: 0;
}
div.bhoechie-tab-menu div.list-group>a{
  margin-bottom: 0;
}
div.bhoechie-tab-menu div.list-group>a .glyphicon,
div.bhoechie-tab-menu div.list-group>a .fa {
  color: #c1a23f;
}
div.bhoechie-tab-menu div.list-group>a:first-child{
  border-top-right-radius: 0;
  -moz-border-top-right-radius: 0;
}
div.bhoechie-tab-menu div.list-group>a:last-child{
  border-bottom-right-radius: 0;
  -moz-border-bottom-right-radius: 0;
}
div.bhoechie-tab-menu div.list-group>a.active,
div.bhoechie-tab-menu div.list-group>a.active .glyphicon,
div.bhoechie-tab-menu div.list-group>a.active .fa{
  background-color: #c1a23f;
  background-image: #c1a23f;
  color: #ffffff;
}
div.bhoechie-tab-menu div.list-group>a.active:after{
  content: '';
  position: absolute;
  left: 100%;
  top: 50%;
  margin-top: -13px;
  border-left: 0;
  border-bottom: 13px solid transparent;
  border-top: 13px solid transparent;
  border-left: 10px solid #c1a23f;
}

div.bhoechie-tab-content{
  background-color: #ffffff;
  /* border: 1px solid #eeeeee; */
  padding-left: 20px;
  padding-top: 10px;
}

div.bhoechie-tab div.bhoechie-tab-content:not(.active){
  display: none;
}
    </style>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
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
               Program
               @elseif(langue()=='Fr')
                Programme et Conférences
                @else
                Programme et Conférences
               @endif
        </h1></center>
        </div>
       
       
      </div>

       <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bhoechie-tab-container">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu">
              <div class="list-group">
                <a href="#" class="list-group-item active text-center">
                 <h2><b>
                     @if(langue()=='En')
               Day 1
               @elseif(langue()=='Fr')
                 Jour 1
               @else
                 Jour 1
               @endif
                  </b></h2>
                </a>
                <a href="#" class="list-group-item text-center">
                  <h2><b>
                  @if(langue()=='En')
               Day 2
               @elseif(langue()=='Fr')
                 Jour 2
               @else
                 Jour 2
               @endif
                </b></h2>
                </a>
                <a href="#" class="list-group-item text-center">
                  <h2><b>
                   @if(langue()=='En')
               Day 3
               @elseif(langue()=='Fr')
                 Jour 3
               @else
                 Jour 3
               @endif
                </b></h2>
                </a>
               
              </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab">
                <!-- flight section -->
                <div class="bhoechie-tab-content active">
                    <p><h3><b style="color: #c1a23f;">
                        @if(langue()=='En')
               DAY 1: SATURDAY 12TH FEBRUARY 2022
               @elseif(langue()=='Fr')
                 JOUR 1 : SAMEDI 12 FÉVRIER 2022

               @else
                 JOUR 1 : SAMEDI 12 FÉVRIER 2022

               @endif
                    </b></h3></p>
                    <table class="table table-bordered">
  <thead>
     @if(langue()=='En')
               Saturday 12 February 2022
               @elseif(langue()=='Fr')
                 Samedi 12 Février 2022
               @else
                 Samedi 12 Février 2022
               @endif
    <tr style="background: #c3a545;
    color: #fff;">
      <th colspan="2">
        @if(langue()=='En')
               DUBAI EXHIBITION CENTER HALL 2A SOUTH
               @elseif(langue()=='Fr')
                 DUBAI EXHIBITION CENTER HALL 2A SOUTH
               @endif
      </th>
    </tr>
  </thead>
  <tbody>
    <tr class="active">
        <td>09:00 – 10:00</td>
        <td>
             @if(langue()=='En')
               Registration and refreshments
               @elseif(langue()=='Fr')
                 Enregistrements et rafraîchissements
               
               @endif
        </td>
    </tr>
     <tr class="">
        <td>10:00 – 10:05</td>
        <td>
             @if(langue()=='En')
               <p>Welcome from the MC</p>
Mrs. Punam Verma, journalist and host Dubai Eye Radio
               @elseif(langue()=='Fr')
                <p>Introduction de la maîtresse de cérémonie</p>
Mme Punam Verma, journaliste et présentatrice Dubai Eye Radio
               @endif
        </td>
    </tr>
     <tr class="success">
        <td>10:05 – 10:10</td>
        <td>
             @if(langue()=='En')
               Projection of the film invest in Guinea
               @elseif(langue()=='Fr')
                 Projection vidéo « Investir en Guinée »
               @endif
        </td>
    </tr>
     <tr class="">
        <td>10:10 – 10:20</td>
        <td>
            @if(langue()=='En')
               <p>Welcome address</p>
Dr. Bernard Goumou, Minister of Commerce, Industry and SMEs
               @elseif(langue()=='Fr')
                <p>Mot de bienvenue</p>
Dr. Bernard Goumou, Ministre du Commerce, de l’Industrie et des PME
               @endif
        </td>
    </tr>
     <tr class="warning">
        <td>10:20 – 10:50</td>
        <td>
            @if(langue()=='En')
            Partners addresses
               <ul>
                   <li>International Finance Corporation</li>
                   <li>United Nations Development Program
                    <p>Mr. Luc Grégoire, Resident Representative in Guinea</p></li>
                   <li>Dubai Chamber of Commerce and Industry
<p>Mr. Omar Khan, Director of International Offices</p></li>
               </ul>
               @elseif(langue()=='Fr')
                  Mots des partenaires
               <ul>
                   <li>International Finance Corporation</li>
                   <li>Programme des Nations Unies pour le Développement
                    <p>M. Luc Grégoire, Représentant Résident en Guinée</p></li>
                   <li>Chambre de Commerce et d’Industrie de Dubaï
<p>M. Omar Khan, Directeur des Bureaux internationaux</p></li>
               @endif
        </td>
    </tr>
     <tr class="">
        <td>10:50 – 11:05</td>
        <td>
            @if(langue()=='En')
               <p> Opening remarks</p>

Mr. Mohamed Béavogui, Prime Minister and Head of Government, Guinea
               @elseif(langue()=='Fr')
              <p> Discours d’ouverture</p>
M. Mohamed Béavogui, Premier Ministre et Chef du Gouvernement, Guinée
               @endif
        </td>
    </tr>
    <tr class="danger">
        <td>11:05 – 11:10</td>
        <td>
            @if(langue()=='En')
               Family photo
               @elseif(langue()=='Fr')
               Photo de famille
               @endif
        </td>
    </tr>
    <tr class="">
        <td>11:10 – 11:40</td>
        <td>
             @if(langue()=='En')
              <p>Why invest in Guinea? Perspectives on the business climate</p>
              <p><u>Moderated by :</u></p>
              <p>
                  Mrs. Fatoumata Condé, Communications Manager, Guinea Expo 2020

              </p>
             <u> Speakers :</u>
              <ul>
                  <li>Mr. Namory Camara, Commissioner General, Guinea Expo 2020</li>
                  <li>Mr. Diawadou Bah, Managing Director of Ecobank Guinea, Representative of the
Guinean Professional Association of Banks</li>
                  <li>Mr. Eric Benjamin Colle, Directeur Général Adjoint, Topaz multi-industri</li>
                  <li>Guinea Alumina Corporation</li>
              </ul>

               @elseif(langue()=='Fr')
               <p>Pourquoi investir en Guinée ? présentation du climat des affaires</p>
              <p><u>Modératrice :</u></p>
              <p>
                  Mme Fatoumata Condé, Responsable communication, Guinée Expo 2020

              </p>
             <u> Intervenants :</u>
              <ul>
                  <li>M. Namory Camara, Commissaire Général, Guinée Expo 2020</li>
                  <li>M. Diawadou Bah, Directeur Général Ecobank Guinée, Représentant de l’Association
Professionnelle des Banques en Guinée</li>
                  <li>M. Eric Benjamin Colle, Directeur Général Adjoint, Topaz multi-industrie</li>
                  <li>Guinea Alumina Corporation</li>
              </ul>

               @endif
        </td>
    </tr>
    <tr class="active">
        <td>11:40 – 12:40</td>
        <td>
           @if(langue()=='En')
              <p>PANEL: How to develop agricultural value chains to become a lever of economic
transformation in Guinea? </p>
              <p><u>Moderated by :</u></p>
              <p>
                  Mr. Mohamed Sacko, Expert, Guinea Integrated Agricultural Development Project
(PDAIG)


              </p>
             <u> Speakers :</u>
              <ul>
                  <li>Mr. Mamoudou Nagnalen Barry, Minister of Agriculture and husbandry</li>
                  <li>Dr. Vincent Martin, United Nations Resident Coordinator, and Representative of the
Secretary General in Guinea</li>
                  <li>Dr. Sidi Ould Tah, Managing Director, Arab Bank for Economic Development in Africa
(BADEA)</li>
                  <li>Mr. Sidiki Youla, Co-Founder and CEO, La Petite Damba</li>
              </ul>

               @elseif(langue()=='Fr')
               <p>PANEL : Comment développer les chaînes de valeur agricoles pour faire du secteur un
moteur de transformation économique en Guinée ?</p>
              <p><u>Modérateur :</u></p>
              <p>
                  M. Mohamed Sacko, Expert, Projet de Développement Agricole Intégré de Guinée
(PDAIG)

              </p>
             <u> Intervenants :</u>
              <ul>
                  <li>M. Mamoudou Nagnalen Barry, Ministre de l’agriculture et de l’élevage, Guinée</li>
                  <li>Dr. Vincent Martin, Coordonnateur Résident des Nations Unies et Représentant du
Secrétaire Général en République de Guinée
</li>
                  <li>Dr. Sidi Ould Tah, Directeur Général, Banque Arabe pour le Développement
Economique en Afrique (BADEA)
</li>
                  <li>M. Sidiki Youla, Co-fondateur et CEO, La Petite Damba</li>
              </ul>

               @endif
           </td>
    </tr>
    <tr class="">
        <td>12:40 – 13:45</td>
        <td>
            @if(langue()=='En')
               Lunch break - stand up lunch
               @elseif(langue()=='Fr')
                Pause Déjeuner - stand up lunch
               @else
                Pause Déjeuner - stand up lunch
               @endif
        </td>
    </tr>
    <tr class="success">
        <td>13:45 – 14:05 </td>
        <td>
            @if(langue()=='En')
              Ballet Djoliba cultural performance

               @elseif(langue()=='Fr')
               Prestation artistique du Ballet Djoliba
               @endif
        </td>
    </tr>
    <tr class="warning">
        <td>14:05 – 14:20 </td>
        <td>
            @if(langue()=='En')
              Screening of sponsors' promotional films

               @elseif(langue()=='Fr')
               Projection des films promotionnels des sponsors
               @endif
        </td>
    </tr>
    <tr class="">
        <td>14:20 – 15:20</td>
        <td>
              @if(langue()=='En')
              <p>PANEL: From exploitation to processing, how can the mining sector be further
developed in Guinea? </p>
              <p><u>Moderated by :</u></p>
              <p>
                  Mr. Mohamed Sidiki Sylla, Partner, Sylla & Partners


              </p>
             <u> Speakers :</u>
              <ul>
                  <li>Mr. Moussa Magassouba, Minister of Mining and geology</li>
                  <li>Mr. Ismael Diakite, President of the Chamber of Mines and High representative of
the Consortium SMB Winning
</li>
                  <li>Mr. Souleymane Traore, Managing Director of Compagnie des bauxites de Guinée
(CBG)</li>
                  <li>Mrs. Namrata Thapar, Senior manager for mining, International Finance Corporation
(IFC)
</li>
              </ul>

               @elseif(langue()=='Fr')
               <p>PANEL : De l’exploitation à la transformation, comment développer davantage le
secteur minier en Guinée ?
</p>
              <p><u>Modérateur :</u></p>
              <p>
                  M. Mohamed Sidiki Sylla, Partner, Sylla & Partners

              </p>
             <u> Intervenants :</u>
              <ul>
                  <li>M. Moussa Magassouba, Ministre des Mines et de la Géologie
</li>
                  <li>M. Ismaël Diakité, Président de la Chambre des Mines et Haut représentant du
Consortium SMB Winning
</li>
                  <li>M. Souleymane Traoré, Directeur Général, Compagnie des Bauxites de Guinée (CBG)
</li>
                  <li>Mme Namrata Thapar, Directrice Mines, International Finance Corporation (IFC)</li>
              </ul>

               @endif
       </td>
    </tr>
    <tr class="warning">
        <td>15:20 – 15:30</td>
        <td>
        @if(langue()=='En')
              Mot de clôture de la première journée
               @elseif(langue()=='Fr')
                Closing remarks for the first day
               @endif
           </td>
    </tr>
   
  </tbody>
</table>
                    
                </div>
                <!-- train section -->
                <div class="bhoechie-tab-content">
                   <p><h3><b style="color: #c1a23f;">
                    @if(langue()=='En')
              DAY 2: SUNDAY 13TH FEBRUARY 2022
               @elseif(langue()=='Fr')
                JOUR 2 : DIMANCHE 13 FÉVRIER 2022
               @endif
                   </b></h3></p>
                    <table class="table table-bordered">
  <thead>
   <tr style="background: #c3a545;
    color: #fff;">
      <th colspan="2">
        @if(langue()=='En')
               BUSINESS CONNECT CENTER ABU DHABI HALL (6ème floor)
               @elseif(langue()=='Fr')
                BUSINESS CONNECT CENTER ABU DHABI HALL (6th étage)
               @endif
      </th>
    </tr>
  </thead>
  <tbody>
    <tr class="">
        <td>11:00 – 11:15 </td>
        <td>
             @if(langue()=='En')
               Registration
               @elseif(langue()=='Fr')
                 Enregistrement
               @endif
        </td>
    </tr>
     <tr class="success">
        <td>11:15 – 11:35 </td>
        <td>
             @if(langue()=='En')
               <b><u>Presentation session :</u></b> the advantages of the Guinean Investment Code
Mr. Ansoumane Condé, Deputy Director Investment Promotion, Private
Investment Promotion Agency (APIP)

               @elseif(langue()=='Fr')
                 <b><u>Présentation :</u></b> les avantages du Code des Investissements guinéen
M. Ansoumane Condé, Directeur Adjoint de la Promotion des Investissements,
Agence de Promotion des Investissements Privés (APIP)

               @endif
        </td>
    </tr>
     <tr class="">
        <td>11:35 – 12:40</td>
        <td>
            @if(langue()=='En')
               <p>Presentation session: focus on tourism</p>
               <ul>
                   <li>Mr. Mamadou Aliou Barry, Senior Advisor to the Minister, Ministry of
Culture, Tourism and Handicrafts</li>
                   <li>Mr. Mamadou Cellou Bah, Founder, Fouta Trekking</li>
                   <li>Mrs. Naima Pages, Team Leader - Economic Transformation and
Sustainable Development, United Nations Development Program</li>
               </ul>
               @elseif(langue()=='Fr')
                  <p>Session de présentation : focus sur le tourisme</p>
               <ul>
                   <li>M. Mamadou Aliou Barry, Conseiller Principal du Ministre, Ministère de la
Culture, du Tourisme et de l’Artisanat, Guinée
</li>
                   <li>M. Mamadou Cellou Bah, Fondateur, Fouta Trekking</li>
                   <li>Mme Naima Pages, Chef d'équipe - Transformation économique et
développement durable, Programme des Nations Unies pour le
Développement</li>
               </ul>
               @endif
        </td>
    </tr>
     <tr class="active">
        <td>12:40 – 13:00</td>
        <td>
            @if(langue()=='En')
               Presentation on investment in hydrocarbons, National Petroleum Company
               @elseif(langue()=='Fr')
                Présentation sur les investissements dans les hydrocarbures, Société
Nationale de Pétroles
               @endif
        </td>
    </tr>
     <tr class="">
        <td>13:00 – 13:15 </td>
        <td>
             @if(langue()=='En')
              <p>Presentation on the banking sector in Guinea</p>
Mr. Sidy Mohamed Cherif, Representative of the Guinean Professional
Association of Banks and Insurers
               @elseif(langue()=='Fr')
                <p> Présentation sur le secteur bancaire en Guinée</p>
M. Sidy Mohamed CHERIF, Représentant de l’Association Professionnelle des
Banques en Guinée

               @endif
        </td>
        <td></td>
    </tr>
     <tr class="warning">
        <td>12:45-13:30</td>
        <td>
            @if(langue()=='En')
               <p>Project presentation by the Ministry of information and communication</p>
Mr. N'Fa Ousmane Camara, National Director of Broadcasting Services
               @elseif(langue()=='Fr')
                <p>Présentation de projet par le Ministère de l’Information et de la
Communication</p>
M. N'Fa Ousmane Camara, Directeur National des services de diffusion
               @endif
        </td>
    </tr>
    <tr class="">
        <td>13:30 – 13:45</td>
        <td>
             @if(langue()=='En')
               <p>Project presentation by the Ministry of posts, telecommunications and digital
economy</p>
Mr. Lamine Samoura, Project Coordinator
               @elseif(langue()=='Fr')
              <p> Présentation de projet par le Ministère des Postes, Télécommunications et
de l’Economie numérique</p>
M. Lamine Samoura, Coordinateur du projet
               @endif
        </td>
    </tr>
    <tr class="active">
        <td>13:45 – 14:00</td>
        <td>
            @if(langue()=='En')
               Project presentation by the private sector: Banki Truck by Banki Technologie
               @elseif(langue()=='Fr')
                Présentation de projet privé : le projet Banki Truck par Banki Technologie
               @endif
        </td>
    </tr>
    <tr class="">
        <td>14:00 – 14:15</td>
        <td>
         @if(langue()=='En')
               Project presentation by the private sector: Agriyat par DT Atlas
               @elseif(langue()=='Fr')
                Présentation de projet privé : le projet Agriyat par DT Atlas
               @endif
           </td>
    </tr>
    <tr class="success">
        <td>14:15 – 15:00</td>
        <td>
            @if(langue()=='En')
               Lunch and refreshments
               @elseif(langue()=='Fr')
                Déjeuner et rafraîchissements
               @endif
        </td>
    </tr>
    <tr class="">
        <td>11:00 – 15:00</td>
        <td>
            @if(langue()=='En')
               Parallel B2B and B2G sessions
               @elseif(langue()=='Fr')
                Sessions B2B et B2G parallèles
               @endif
        </td>
    </tr>
    <tr class="warning">
        <td>15:00</td>
        <td>
            @if(langue()=='En')
               End of day 2
               @elseif(langue()=='Fr')
                Fin du jour 2
               @endif
        </td>
    </tr>
    
   
  </tbody>
</table>
                </div>
    
                <!-- hotel search -->
                <div class="bhoechie-tab-content">
                     <p><h3><b style="color: #c1a23f;">
                     @if(langue()=='En')
               
DAY 3: MONDAY 14
TH FEBRUARY 2022

               @elseif(langue()=='Fr')
                JOUR 3 : LUNDI 14 FÉVRIER 2022
               @endif
           </b></h3></p>
                    <table class="table table-bordered">
  <thead>
    <tr style="background: #c3a545;
    color: #fff;">
      <th colspan="2">
        @if(langue()=='En')
               BUSINESS CONNECT CENTER ABU DHABI HALL (6th floor)
               @elseif(langue()=='Fr')
                 BUSINESS CONNECT CENTER ABU DHABI HALL (6ème étage)
               @endif
      </th>
    </tr>
  </thead>
  <tbody>
    <tr class="">
        <td>10:00 – 10:15 </td>
        <td>
            @if(langue()=='En')
              Registration
               @elseif(langue()=='Fr')
                 Enregistrement
               @endif
        </td>
    </tr>
     <tr class="success">
        <td>10:15 – 11:15 </td>
        <td>
            @if(langue()=='En')
               <p>Presentation session: focus on energy</p>
                 <ul>
                     <li>Representative Ministry of Energy, hydraulics and hydrocarbons</li>
                     <li>Mrs. Naima Pages, Team Leader - Economic Transformation and
Sustainable Development, United Nations Development Program
                     </li>
                 </ul>
               @elseif(langue()=='Fr')
                 <p>Session de présentation : focus sur l’énergie</p>
                 <ul>
                     <li>Représentant, Ministère de l’Energie, de l’Hydraulique et des
Hydrocarbures</li>
                     <li>
                         Mme Naima Pages, Chef d'équipe - Transformation économique et
développement durable, Programme des Nations Unies pour le
Développement
                     </li>
                 </ul>
               @endif
        </td>
    </tr>
     <tr class="">
        <td>11:15 – 12:15</td>
        <td>
              @if(langue()=='En')
               Presentation session: focus infrastructures and transport
               <p>Mr. Saa Yolande Camara, National Director of Road Maintenance, Ministry
of Infrastructure and Transport
</p>
               @elseif(langue()=='Fr')
                 Session de présentation : focus sur les infrastructures et les transports
<p>M. Saa Yolande Camara, Directeur National de l’entretien routier, Ministère
des infrastructures et des transports </p>
               @endif
        </td>
    </tr>
     <tr class="warning">
        <td>12:15 – 12:30</td>
        <td>
             @if(langue()=='En')
               Project presentation by the Ministry of Commerce, Industry and SMEs
Mr. Dianka Koevogui, Director of the Industrial Parks Management Agency
(Agence de Gestion des Parcs Industriels/AGESPI)

               @elseif(langue()=='Fr')
                 Présentation de projet par le Ministère du Commerce, de l’Industrie et des
PME, M. Dianka Koevogui, Directeur de l’Agence de Gestion des Parcs
Industriels (AGESPI)

               @endif
        </td>
    </tr>
     <tr class="">
        <td>12:30 – 12:45 </td>
        <td>

             @if(langue()=='En')
               Project presentation by the Ministry of Environment and Sustainable
development
<ul>
    <li>Mr. Karim Samoura, Chief of staff of the Ministry</li>
    <li>Mr. Mohamed Condé, Managing Director of RC Groupe SARL</li>
</ul>


               @elseif(langue()=='Fr')
                 Présentation de projet par le Ministère de l’Environnement et du
Développement Durable

<ul>
    <li>M. Karim Samoura, Chef de Cabinet du Ministère</li>
    <li>Mohamed Condé, Directeur Général de RC Groupe SARL
</li>
</ul>
               @endif
         </td>
    </tr>
     <tr class="active">
        <td>12:45 – 13:00</td>
        <td>
             @if(langue()=='En')
               Project presentation by the private sector: poultry farm by ELCETO
               @elseif(langue()=='Fr')
                Présentation de projet privé : le projet de ferme avicole par ELCETO
               @endif
        </td>
    </tr>
    <tr class="">
        <td>13:00 – 13:15</td>
        <td>
            @if(langue()=='En')
            <p><b> Closing remarks</b></p>
              
Mrs. Diana Kouyaté, Deputy Managing Director of the Private investment
Promotion Agency
               @elseif(langue()=='Fr')
                <p><b>Discours de clôture</b></p>
Mme Diana Kouyaté, Directrice Générale Adjointe de l’Agence de Promotion
des Investissements Privés (APIP)
               @endif
        </td>
    </tr>
     <tr class="success">
        <td>13:15 – 14:00</td>
        <td>
            @if(langue()=='En')
               Lunch and refreshments
               @elseif(langue()=='Fr')
                Déjeuner et rafraîchissements
               @endif
        </td>
    </tr>
     <tr class="">
        <td>10:00 – 14:00</td>
        <td>
            @if(langue()=='En')
               Parallel B2B and B2G sessions
               @elseif(langue()=='Fr')
                Sessions B2B et B2G parallèles

               @endif
        </td>
    </tr>
     <tr class="warning">
        <td>14:00</td>
        <td>
            @if(langue()=='En')
               End of the GUIF 2
               @elseif(langue()=='Fr')
                Fin du Guinea Investment Forum

               @endif
        </td>
    </tr>
    
    
   
  </tbody>
</table>
                </div>
             
              
            </div>
        </div>
  </div>

<br>
  <!-- intervennants -->
  <div class="row clearfix" id="intervenant">
    <center><h1><b style="color: #c1a23f;">
         @if(langue()=='En')
               Speakers
               @elseif(langue()=='Fr')
               Intervenants
               @else
                Intervenants
               @endif
    </b></h1></center>
          <!-- temporaire à enlever -->
          <div class="col-md-12" style="display: none;"> 
            <p style="color: #000;font-weight: bold;text-align: center;font-size: 25px;">
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
        <div class="owl-carousel owl-theme ss_carousel our_team_slider" id="slider5"  style="">

          @foreach ($intervenant as $intervenants)
           <div class="item">
              <div class="team-block col-md-12 col-sm-12 col-xs-12" >
              <div class="inner-box" style="border: 1px solid #c1a23f;background: #c1a23f3b;">
                <div class="image"> <img src="{{ asset('images/portrait/'.$intervenants->image.'')}}" class="attachment-globalindustry_265x400 size-globalindustry_265x400 wp-post-image" style="height: 380px;">
                  <ul class="social-icon-one">
                    <li><a href="{{route('detailsIntervenant',$intervenants->id)}}" class="know_more" style="background: #cb913d !important;">
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
                <div class="lower-box" style="height: 130px;background-color: #e7d8b2 !important;">
                   <h3><a href="#" style="color: #c1a23f;font-weight: bold;">{{$intervenants->nom}}</a></h3>
                  <div class="designation" style="color: #000;">
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
  <!-- fin -->
        
      </div>
     

   

  </div>
  </section>
  <!-- /about end -->

  <script type="text/javascript">
   $(document).ready(function() {
    $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
    });
});
  </script>

  
   @stop