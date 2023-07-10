@extends('templates/default',['title'=>'GUIF | COVID'])
        

    @section('contenu')
    <style type="text/css">
     .card-header .title {
    font-size: 17px;
    color: #c1a23f !important;
}
.card-header .accicon {
  float: right;
  font-size: 20px;  
  width: 1.2em;
}
.card-header{
  cursor: pointer;
  border-bottom: none;
  
  background-color: #fff8e1 !important;
  border-color: #f9f2dd !important;
  box-shadow: 0 5px 11px 0 rgb(0 0 0 / 18%);
}
.card{
  border: 1px solid #ddd;
  margin: 15px;
}
.card-body{
  border-top: 1px solid #ddd;
}
.card-header:not(.collapsed) .rotate-icon {
  transform: rotate(180deg);
}
    </style>
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/a91a27e46f.js" crossorigin="anonymous"></script>
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
                Practical information
               @elseif(langue()=='Fr')
                 Infos Pratiques
               @else
                Infos Pratiques
               @endif
        </h1></center>
        </div>
       
       
      </div>

       <div class="row" >

       
             <div class="accordion" id="accordionExample" style="width: 100%;">
              <div class="card">
            <div class="card-header" data-toggle="collapse" data-target="#collapseVisa" aria-expanded="true"  style="">     
                <span class="title">
                  <b>
                     @if(langue()=='En')
               Visa 
               @elseif(langue()=='Fr')
                 Visa 
               @endif
                  </b>
                 </span>
                <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
            </div>
            <div id="collapseVisa" class="collapse show" data-parent="#accordionExample">
                <div class="card-body">
                     <b>
            <p style="color: #28a745;">
              @if(langue()=='En')
               Guinean nationals must obtain a visa before entering the territory of the United Arab Emirates. 
               @elseif(langue()=='Fr')
                  Les ressortissants guinéens doivent se munir d’un visa avant l’entrée sur le territoire des Emirats Arabes Unis.  
               @endif
        
        </p>
        <p>
           
                @if(langue()=='En')
               Here are the different types of short- and long-term visas available, whether single or multiple entry. They are valid for 30 to 90 days. 
               @elseif(langue()=='Fr')
                 Voici les différents types de visas à court ou long terme disponibles, qu'ils soient à entrée(s) simple ou multiples. Ils sont valables de 30 à 90 jours. 
               @endif
          
        </p>
         </b>
         <p style="">
          
               @if(langue()=='En')
               The following types of visas are available:
            <ul>
              <li>Tourist visa - valid for 30 days and single or multiple entry (s)</li>
              <li>Long-term tourist visa - valid for 90 days and single entry</li>
              <li>Long-term stay visa - valid for 90 days and multiple entries</li>
              <li>Service visa - valid for 14 days and single entry</li>
            </ul> 
               @elseif(langue()=='Fr')
                 Les types de visas suivants sont disponibles :
            <ul>
              <li>Visa touristique - valable 30 jours et à entrée(s) simple ou multiples</li>
              <li>Visa touristique à long terme - valable 90 jours et entrée simple</li>
              <li>Visa de séjour à long terme - valable 90 jours et entrées multiples</li>
              <li>Visa de service - valable 14 jours et entrée simple</li>
            </ul> 
               @endif

               @if(langue()=='En')
               Please note that visas are only valid for 60 days from the date of issue. 
               @elseif(langue()=='Fr')
                 Veuillez noter que les visas ne sont valables que pendant 60 jours à compter de la date d'émission. 
               @endif
            



          </p>
          <p>
           <b style="color: #28a745;">
            @if(langue()=='En')
               Who can apply for a visa on your behalf?
               @elseif(langue()=='Fr')
                 Qui peut faire la demande d'un visa en votre nom ? 
               @endif
           </b>
          </p>

          <p>
             @if(langue()=='En')
              <ul>
              <li>Airlines like Emirates, Flydubai, Etihad Airways and Air Arabia</li>
              <li>Three-, four- or five-star hotels where you have booked a stay</li>
              <li>Authorized travel or excursion agencies with which you have arranged a visit. Please ensure their authenticity before sharing your contact details or any official documents.</li>
              <li></li>
            </ul>
               @elseif(langue()=='Fr')
                 <ul>
              <li>Des compagnies aériennes comme Emirates, FlyDubai, Etihad Airways et Air Arabia</li>
              <li>Des hôtels trois, quatre ou cinq étoiles où vous avez réservé un séjour</li>
              <li>Des agences de voyage ou d'excursions agréées auprès desquelles vous avez organisé une visite. Veuillez vous assurer de leur authenticité avant de partager vos coordonnées ou tout document officiel.</li>
              <li></li>
            </ul>
               @endif
            


          </p>
          <p>
            <b style="color: #28a745;">
              @if(langue()=='En')
               Asked documents:
               @elseif(langue()=='Fr')
                 Documents demandés :
               @endif
            </b>
          </p>
         
          <p>
            @if(langue()=='En')
                <ul>
              <li>A passport still valid six months after your date of arrival in Dubai. Passports presented must be digital, written passports will not be accepted.</li>
              <li>Color photos</li>
              <li>A confirmed flight reservation</li>
              <li>An application form or other documents depending on the type of visa requested</li>
            </ul>
               @elseif(langue()=='Fr')
                 <ul>
              <li>Un passeport encore valable six mois après votre date d'arrivée à Dubai. Les passeports présentés doivent être numériques, les passeports écrits ne seront pas acceptés.</li>
              <li>Des photos en couleur</li>
              <li>Une réservation de vol confirmée</li>
              <li>Un formulaire de demande ou d'autres documents selon le type de visa demandé</li>
            </ul>
               @endif
           

          </p>

          <p>
             @if(langue()=='En')
               More information available online 
               @elseif(langue()=='Fr')
                 Plus d’informations disponible en ligne
               @endif
           
           <a target="_blank" href="https://www.visitdubai.com/fr/plan-your-trip/visa-information">https://www.visitdubai.com/fr/plan-your-trip/visa-information</a>
           @if(langue()=='En')
               or at
               @elseif(langue()=='Fr')
                 ou à
               @endif
           
           
           <b>
            @if(langue()=='En')
               <p>Embassy of the United Arab Emirates in Guinea</p>
<p>Taouyah, Corniche Nord, Cité Villa N ° Guissé 4. Municipality of Ratoma Conakry Guinea</p>
<p>+224 622 890 466</p>
               @elseif(langue()=='Fr')
                <p>Ambassade des Emirats Arabes Unis en Guinée</p>
<p>Taouyah, Corniche Nord, Cité Villa N ° Guissé 4. Commune de Ratoma Conakry Guinée</p>
<p>+224 622 890 466</p>
               @endif
             

           </b>
          </p>
          
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" data-toggle="collapse" data-target="#collapseTrans" aria-expanded="true"  style="">     
                <span class="title">
                  <b>
                     @if(langue()=='En')
               Transportation and Accommodation
               @elseif(langue()=='Fr')
                 Transport et Hébergement  
               @endif
                  </b>
                 </span>
                <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
            </div>
            <div id="collapseTrans" class="collapse" data-parent="#accordionExample">
                <div class="card-body">
                     <b>
        <p style="color: #28a745;">
         <b>
          @if(langue()=='En')
               Airports:
               @elseif(langue()=='Fr')
                 Aéroports :
               @endif
         </b>
        </p>
        <p>
          <ul>
            <li>Dubai international (DXB) </li>
            <li>Dubai World Central (DWC)</li>
          </ul>
        </p>
         </b>
         <p style="">
            Suggestions d’hôtels :
            <table class="table table-bordered">
              <thead>
    <tr style="background: #c3a545;
    color: #fff;">
      <th>5*</th>
      <th>4*</th>
      <th>3*</th>
      <th>2*</th>
    </tr>
  </thead>
  <tbody>
     <tr class="active">
        <td>
          <b>Oaks Ibn Battuta Gate Dubai</b>
          <p>
            Adjacent To Ibn Battuta Mall -Jebel Ali, Jebel Ali, Dubai, United Arab Emirates 
          </p>
        </td>
        <td>
          <b>Maisan Hotel </b>
          <p>
            Dubai Investment Park, Centre industriel de Dubaï, Dubaï, Émirats arabes unis  
          </p>
        </td>
        <td>
          <b>Premier Inn Dubai Investments Park</b>
          <p>
            Dubai Investment Park, Centre industriel de Dubaï, Dubaï, Émirats arabes unis 
          </p>
        </td>
        <td>
          <b>Ibis World Trade Centre</b>
          <p>
            Sheikh Zayed Road, Trade Centre, Dubai, United Arab Emirates 
          </p>
        </td>
    </tr>
    <tr class="success">
        <td>
          <b>Radisson Blu Hotel, Dubai Deira Creek</b>
          <p>
            Baniyas Road, Dubai, United Arab Emirates 
          </p>
        </td>
        <td>
          <b>Fortune Park Hotel  </b>
          <p>
            1 Dubai Investment Park, Centre industriel de Dubaï, Dubaï, Émirats arabes unis 
          </p>
        </td>
        <td>
          <b>Home Away Dubai Apartments - Tamcon - DIP</b>
          <p>
            Tamcon - DIP behind ritaj , Centre industriel de Dubaï, Dubaï, Émirats arabes unis 
          </p>
        </td>
        <td>
          
        </td>
    </tr>
    <tr class="warning">
        <td>
          
        </td>
        <td>
          <b>Courtyard by Marriott Dubai, Green Community </b>
          <p>
            
Green Community, Centre industriel de Dubaï, Dubaï, Émirats arabes unis

          </p>
        </td>
        <td>
          <b>Rove hotel </b>
          <p>
            Al Wasl Plaza, Expo 2020 Site - Dubai - Émirats arabes unis
          </p>
        </td>
        <td>
          
        </td>
    </tr>
     <tr class="warning">
        <td>
          
        </td>
        <td>
          <b>The Manor by JA </b>
          <p>
            
Al Furjan Jebel Ali 1, Dubaï, Émirats arabes unis

          </p>
        </td>
        <td>
          
        </td>
        <td>
          
        </td>
    </tr>
  </tbody>
              
            </table>



          </p>
          <p>
           <b style="color: #28a745;">Metro :</b>
          </p>
          <p>
            @if(langue()=='En')
               The Dubai Metro Red Line connects Dubai International Airport to the Route 2020 line, which takes you to Expo 2020 Dubai. Connection is at Nakheel Harbor & Tower station.
               @elseif(langue()=='Fr')
                  La ligne rouge du métro de Dubaï relie l’aéroport international de Dubaï à la ligne Route 2020, qui vous emmène à l’Expo 2020 Dubaï. La correspondance se fait à la station Nakheel Harbour & Tower.
               @endif
           
          </p>
          <p>
           <b style="color: #28a745;">Bus Expo Rider :</b>
          </p>
          <p>
             @if(langue()=='En')
               Access and depart Expo 2020 via a dedicated public bus service. This free service for Expo 2020 visitors is available from various locations in Dubai and other Emirates. You just must remember the stop where you get off, because you will have to make the return trip from this same stop.
               @elseif(langue()=='Fr')
                  Accédez à l’Expo 2020 et repartez-en via un service de bus public dédié. Ce service gratuit pour les visiteurs de l’Expo 2020 est disponible à partir de différents endroits à Dubaï et d’autres Émirats. Vous devez juste vous souvenir de l’arrêt où vous descendez, car vous devrez effectuer le voyage retour à partir de ce même arrêt.
               @endif
            
          </p>
          <p>
           <b style="color: #28a745;">Taxi :</b>
          </p>
          <p>
             @if(langue()=='En')
               Dubai has a plethora of taxis and car rental agencies. Taxis can be booked over the phone, but the easiest way is to download the Careem or Uber app.
               @elseif(langue()=='Fr')
                  Dubaï dispose d’une multitude de taxis et d’agences de location de voiture. Les taxis peuvent être réservés par téléphone, mais le moyen le plus simple est de télécharger l’application Careem ou Uber. 
               @endif
            
          </p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"  style="">     
                <span class="title">
                  <b>
                     @if(langue()=='En')
               COVID-19 safety measures
               @elseif(langue()=='Fr')
                 Mesures de sécurité COVID-19
               @endif
                  </b>
                 </span>
                <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
            </div>
            <div id="collapseOne" class="collapse" data-parent="#accordionExample">
                <div class="card-body">
                     <b>
            <p style="color: #28a745;">
          @if(langue()=='En')
                  Conditions for all passengers traveling to Dubai
               @elseif(langue()=='Fr')
                    Conditions pour tous les passagers se rendant à Dubai
               @endif
        </p>
         </b>
         <p style="">
            @if(langue()=='En')
             All passengers traveling to Dubai, regardless of their origin (GCC countries included), must be in possession of a negative COVID-19 PCR test certificate carried out less than 72 hours before departure, except for passengers from Afghanistan, Bangladesh, India, Indonesia, Pakistan and Sri Lanka.
               @elseif(langue()=='Fr')
                  Tous les passagers se rendant à Dubai, quelle que soit leur provenance (pays du CCG inclus), doivent être en possession d’un certificat de <b>test PCR COVID‑19 négatif effectué moins de 72 heures avant le départ</b>, à l’exception des passagers en provenance d’Afghanistan, du Bangladesh, d’Inde, d’Indonésie, du Pakistan et du Sri Lanka. 
               @endif
          </p>
          <p>
             @if(langue()=='En')
            The certificate must be for PCR (polymerase chain reaction) screening. Other test certificates including antibody tests and home screening kits are not accepted in Dubai. Travelers must present an official certificate in paper format written in English or Arabic upon check-in, text messages and digital certificates are not accepted. PCR certificates issued in other languages may be accepted if they have been validated at the point of origin.
               @elseif(langue()=='Fr')
                  Le certificat doit être pour un dépistage PCR (amplification en chaîne par polymérase). Les autres certificats de test, notamment les tests d’anticorps et les kits de dépistage à domicile ne sont pas acceptés à Dubai. Les voyageurs doivent présenter un certificat officiel au format papier rédigé en anglais ou en arabe lors de l'enregistrement, les SMS et certificats numériques ne sont pas acceptés.<b> Les certificats PCR délivrés dans d’autres langues peuvent être acceptés s’ils ont été validés au point d’origine</b>.
               @endif
           
          </p>
          <p>
             @if(langue()=='En')
             The certificate must be for PCR (polymerase chain reaction) screening. Other test certificates including antibody tests and home screening kits are not accepted in Dubai. Travelers must present an official certificate in paper format written in English or Arabic upon check-in, text messages and digital certificates are not accepted. PCR certificates issued in other languages may be accepted if they have been validated at the point of origin.            
               @elseif(langue()=='Fr')
                   Les certificats de test PCR COVID‑19 doivent avoir été délivrés par un établissement agréé dans le pays de départ du passager. Les certificats déjà présentés pour voyager vers une autre destination ne sont plus recevables, même s’ils n’ont pas expiré.
               @endif
           
          </p>
          <p>
            @if(langue()=='En')
             COVID-19 PCR test certificates must have been issued by an approved facility in the passenger's country of departure. Certificates already presented for travel to another destination are no longer admissible, even if they have not expired.   
             The COVID-19 PCR report must include a QR code corresponding to the original report for passengers from the following countries for verification. They will have to present the QR code at check-in, then to the Dubai Health Authority (DHA) agents upon arrival at Dubai airport: Bangladesh, India, Islamic Republic of Pakistan, Sudan, Sri Lanka, Lebanon and, as of May 9, 2021, Egypt, and Ethiopia.     
               @elseif(langue()=='Fr')
                   Le rapport PCR COVID‑19 doit inclure un code QR correspondant au rapport original pour les passagers en provenance des pays suivants à des fins de vérification. Ils devront présenter le code QR à l’enregistrement, puis aux agents des autorités sanitaires de Dubai (DHA) à l’arrivée à l’aéroport de Dubai : Bangladesh, Inde, République islamique du Pakistan, Soudan, Sri Lanka, Liban et, à compter du 9 mai 2021, Égypte et Éthiopie.
               @endif
            
          </p>
         
          <b>
          @if(langue()=='En')
          <p style="color: #28a745;">Screening on arrival</p>
               @elseif(langue()=='Fr')
                <p style="color: #28a745;">Dépistage à l’arrivée</p>
               @endif
          </b>

          <p>
             @if(langue()=='En')
          Passengers traveling to Dubai from the following countries will need to take a new COVID-19 PCR test upon arrival at Dubai International Airport:
               @elseif(langue()=='Fr')
                Les passagers se rendant à Dubai en provenance des pays suivants devront réaliser un nouveau test PCR COVID‑19 à leur arrivée à l’aéroport international de Dubai :
               @endif
           
           <p>
             @if(langue()=='En')
          Afghanistan, Angola, Argentina, Bahrain, Bangladesh, Bosnia and Herzegovina, Brazil, Cambodia, Chile, Cyprus, Côte d'Ivoire, Croatia, Djibouti, Egypt, Eritrea, Ethiopia, Georgia, Ghana, Guinea, Hungary, India, Indonesia, Iraq , Iran, Israel, Jordan, Kenya, Kyrgyzstan, Kuwait, Lebanon, Malta, Morocco, Moldova, Montenegro, Myanmar, Nepal, Oman, Uzbekistan, Pakistan, Poland, Philippines, Qatar, Russia, Rwanda, Senegal, Slovakia, Somalia, Somaliland , Sudan, South Sudan, Syria, Tajikistan, Tanzania, Tunisia, Turkmenistan, Turkey, Ukraine, Zimbabwe.
               @elseif(langue()=='Fr')
                 Afghanistan, Angola, Argentine, Bahreïn, Bangladesh, Bosnie‑Herzégovine, Brésil, Cambodge, Chili, Chypre, Côte d’Ivoire, Croatie, Djibouti, Égypte, Érythrée, Éthiopie, Géorgie, Ghana, <b>Guinée</b>, Hongrie, Inde, Indonésie, Irak, Iran, Israël, Jordanie, Kenya, Kirghizistan, Koweït, Liban, Malte, Maroc, Moldavie, Monténégro, Myanmar, Népal, Oman, Ouzbékistan, Pakistan, Pologne, Philippines, Qatar, Russie, Rwanda, Sénégal, Slovaquie, Somalie, Somaliland, Soudan, Soudan du Sud, Syrie, Tadjikistan, Tanzanie, Tunisie, Turkménistan, Turquie, Ukraine, Zimbabwe.
               @endif
            
           </p>
          </p>
          
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">     
                <span class="title">
                   <b>
                     @if(langue()=='En')
               Accessibility at Expo 2020 Dubai
               @elseif(langue()=='Fr')
                 Accessibilité à l’Expo 2020 Dubaï
               @endif
                   </b>
                </span>
                <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
            </div>
            <div id="collapseTwo" class="collapse" data-parent="#accordionExample">
                <div class="card-body">
                      <b>
            <p style="color: #28a745;">
          @if(langue()=='En')
               <h4 style="text-transform: uppercase;color: #c1a23f;">People of determination</h4>
                <p style="color: #28a745;">Did you know?</p>
               @elseif(langue()=='Fr')
                <h4 style="text-transform: uppercase;color: #c1a23f;">Personnes ayant des besoins spéciaux</h4>
                <p style="color: #28a745;">Le saviez-vous ?</p>
               @endif
        </p>
         </b>
         <p style="">
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
          </p>
          <b>
          @if(langue()=='En')
               <p style="color: #28a745;">Free tickets for people of determination</p>
               @elseif(langue()=='Fr')
                <p style="color: #28a745;">Billets gratuits pour les personnes ayant des besoins spéciaux</p>
               @endif
          </b>

          <p>
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
          </p>
          <p>
             <b>
          @if(langue()=='En')
               <p style="color: #28a745;">PODium App</p>
               @elseif(langue()=='Fr')
                <p style="color: #28a745;">Application PODium</p>
               @endif
          </b>
          </p>
          <p>
            @if(langue()=='En')
              This innovative app, designed specifically for people of determination visiting Expo 2020, will enable visitors to navigate around the Expo 2020 site and know what features of accessibility are available in each pavilion, and readily find accessible services. It will be available to download before Expo 2020 opens.
               @elseif(langue()=='Fr')
                Cette application innovante est spécialement conçue pour les personnes ayant des besoins spéciaux visitant l’Expo 2020. Elle permettra aux visiteurs de s’orienter sur le site de l’Expo 2020, de connaître les caractéristiques d’accessibilité de chaque pavillon et de trouver facilement des services accessibles. L’application pourra être téléchargée avant l’ouverture de l’Expo 2020.
               @endif
          </p>
          <p>
             <b>
          @if(langue()=='En')
               <p style="color: #28a745;">Visitors with additional requirements</p>
               @elseif(langue()=='Fr')
                <p style="color: #28a745;">Visiteurs ayant des besoins supplémentaires</p>
               @endif
          </b>
          </p>
          <p>
            @if(langue()=='En')
              Find specific information about accessibility features to assist those with visual or hearing impairments, autism or intellectual impairment, dementia, photosensitive epilepsy or reduced mobility.

               @elseif(langue()=='Fr')
               Trouvez des informations spécifiques sur les dispositifs d’accessibilité destinés à aider les personnes souffrant de troubles visuels ou auditifs, d’autisme ou de déficience intellectuelle, de démence, d’épilepsie photosensible ou de mobilité réduite.

               @endif
          </p>
          <p>
            <b>
          @if(langue()=='En')
               <p style="color: #28a745;">Transportation and parking</p>
               @elseif(langue()=='Fr')
                <p style="color: #28a745;">Transport et stationnement</p>
               @endif
          </b>
          </p>
          <p>
            @if(langue()=='En')
              This section provides accessibility information for Dubai’s airports, Dubai Metro, Expo Rider bus, taxis, parking at Expo 2020 and transportation from the carpark and within Expo 2020.

               @elseif(langue()=='Fr')
               Cette section fournit des informations sur l’accessibilité des aéroports de Dubaï, du métro de Dubaï, des bus Expo Rider, des taxis, du parking de l’Expo 2020 et du transport depuis le parking et au sein de l’Expo 2020.

               @endif
          </p>
          <p>
            <b>
          @if(langue()=='En')
               <p style="color: #28a745;">Facilities and services</p>
               @elseif(langue()=='Fr')
                <p style="color: #28a745;">Installations et services</p>
               @endif
          </b>
          </p>
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
        <div class="card">
            <div class="card-header collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false">
                <span class="title">
                   <b>
                     @if(langue()=='En')
               Forum location
               @elseif(langue()=='Fr')
                 Lieu du forum
               @endif
                   </b>
                </span>
                <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
            </div>
            <div id="collapseThree" class="collapse" data-parent="#accordionExample">
                <div class="card-body">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7234.33947690552!2d55.149682!3d24.960339!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f72d99893b4f9%3A0x53ca187a1bc8bfd5!2sDubai%20Expo%202020!5e0!3m2!1sfr!2sus!4v1629386394909!5m2!1sfr!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <p style="color: #28a745;">
         <b>
           @if(langue()=='En')
               CURRENCY
               @elseif(langue()=='Fr')
               MONNAIE
               @endif
         </b>
        </p>
         <p>
            <b>
              @if(langue()=='En')
               Change rate:
               @elseif(langue()=='Fr')
               Taux de change :
               @endif
             </b>
          </p>

            <p>
              <ul>
                <li>
                  @if(langue()=='En')
               1 Euro = 4.35 UAE dirhams
               @elseif(langue()=='Fr')
               1 Euro = 4,35 dirhams des Émirats arabes unis
               @endif
                </li>
                <li>
                   @if(langue()=='En')
               1 USD = 3.65 UAE dirhams
               @elseif(langue()=='Fr')
               1 USD = 3,65 dirhams des Émirats arabes unis
               @endif
                 </li>
              </ul>
               

            </p>

            <p style="color: #28a745;">
         <b>
           @if(langue()=='En')
               Access to the Expo site
               @elseif(langue()=='Fr')
               Accès au site de l’Expo
               @endif
          
</b>
        </p>
      
        <p>
          <p>
            <b>
                @if(langue()=='En')
               Entrance tickets:
               @elseif(langue()=='Fr')
               Tickets d’entrée :
               @endif
            </b> 
            <ul>
              <li>
                 @if(langue()=='En')
               1 day ticket = 28 USD (Dh95)
               @elseif(langue()=='Fr')
               Ticket 1 journée = 28 USD (Dh95)
               @endif
               </li>
              <li>
                 @if(langue()=='En')
               30-day ticket = 57 USD (Dh195)
               @elseif(langue()=='Fr')
               Ticket 30 jours = 57 USD (Dh195)
               @endif
              </li>
              <li>
                @if(langue()=='En')
               Ticket for the entire duration of the Expo (6 months) = 142 USD (Dh495)
               @elseif(langue()=='Fr')
               Ticket pour toute la durée de l’Expo (6 mois) = 142 USD (Dh495)
               @endif
              </li>
            </ul>
            <p>
              @if(langue()=='En')
               *Please note that children (6 to 17 years old), the elderly (over 60 years old), students and people with disabilities have free access
               @elseif(langue()=='Fr')
               *Prière de noter que les enfants (6 à 17 ans), les personnes âgées (+60 ans), les étudiants et les personnes vivant en situation de handicap ont un accès gratuit
               @endif
              
            </p>
            <p>
                @if(langue()=='En')
               All information on purchasing tickets available here: 
               @elseif(langue()=='Fr')
               Toutes les informations sur l’achat des tickets disponible ici :
               @endif
               
              <a target="_blank" href="https://www.expo2020dubai.com/en/tickets">https://www.expo2020dubai.com/en/tickets </a>
            </p>
          </p>
        </p>
    <p style="color: #28a745;">
       @if(langue()=='En')
               <b>Common languages:</b>
               @elseif(langue()=='Fr')
               <b>Langues courantes :</b>
               @endif
         
        </p>
        <p>
          <p>
            <b>
              @if(langue()=='En')
               English / Arabic / French
               @elseif(langue()=='Fr')
               Anglais/ Arabe/ Français
               @endif
             </b>
          </p>
      
    </div>

         
       
          
         
    


        </div>
        
      </div>
     

   

  </div>
  </section>
  <!-- /about end -->

  <script type="text/javascript">
    $(document).on('click', '.panel-heading span.clickable', function(e){
    var $this = $(this);
  if(!$this.hasClass('panel-collapsed')) {
    $this.parents('.panel').find('.panel-body').slideUp();
    $this.addClass('panel-collapsed');
    $this.find('i').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');    
    
  } else {
    $this.parents('.panel').find('.panel-body').slideDown();
    $this.removeClass('panel-collapsed');    
    $this.find('i').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
    
  }
})
  </script>

   @stop