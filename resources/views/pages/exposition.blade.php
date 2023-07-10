@extends('templates/default',['title'=>'GUIF | EXPOSITION'])
        

    @section('contenu')
  <!--/page_bannner start-->
  <style type="text/css">
     @keyframes glowing {
      0% { background-color: #106fb3; box-shadow: 0 0 5px #106fb3; }
      50% { background-color: #479fde; box-shadow: 0 0 20px #106fb3; }
      100% { background-color: #71bff7; box-shadow: 0 0 5px #106fb3; }
      }
      .reserve {
      animation: glowing 1300ms infinite;
      }

      p{
        color: #000;
        font-weight: normal;
        text-align: justify;
      }
      li{
        color: #000;
        font-weight: normal;
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

  <div class="row">
    <div class="col-md-12" style="margin: 10px;">
      <h1 style="color: #c1a23f;"><b>
          @if(langue()=='En')
               Sponsorship Opportunities
               @elseif(langue()=='Fr')
                OPPORTUNITÉS DE SPONSORING
                @else
                OPPORTUNITÉS DE SPONSORING
               @endif


</b></h1>
<p class="" style="color: #28a745; font-weight: bold;">
 @if(langue()=='En')
              By becoming a sponsor of the inaugural
Guinea Investment Forum (GUIF) you will
benefit from: 

               @elseif(langue()=='Fr')
             En devenant sponsor de la deuxième édition du "Guinea Investment Forum" (GUIF), vous bénéficierez de:
                @else
              En devenant sponsor de la deuxième édition du "Guinea Investment Forum" (GUIF), vous bénéficierez de:
               @endif

               </p>

                @if(langue()=='En')
                   <ul class="hidephone" style="list-style: none;">
                <li><i class="fa fa-check"></i> Expanding your portfolio through
                prestigious clients: domestic and foreign
                investors</li>
                <li><i class="fa fa-check"></i> Being a key player in investment in the
                 Republic of Guinea</li>
                <li><i class="fa fa-check"></i> Enjoy international visibility</li>
                <li><i class="fa fa-check"></i> Promote your products and services at ahigh-end event</li>
                <li><i class="fa fa-check"></i> Contribute to Guinea's socio-economic development through a privileged partnership with the Private Investment Promotion Agency</li>
               </ul>
               @elseif(langue()=='Fr')
              <ul class="hidephone" style="list-style: none;">
                <li><i class="fa fa-check"></i> Accroitre votre portefeuille à travers des clients prestiges : investisseurs nationaux et étrangers</li>
                <li><i class="fa fa-check"></i> Être un acteur clé de l’investissement en République de Guinée</li>
                <li><i class="fa fa-check"></i> Bénéficier d’une visibilité internationale</li>
                <li><i class="fa fa-check"></i> Faire la promotion de ses produits et services lors d’un évènement de haut standing</li>
                <li><i class="fa fa-check"></i> Contribuer au développent socio-économique de la Guinée à travers un partenariat privilégié avec l’Agence de Promotion des Investissements Privés </li>
               </ul>
               <br><br>
                @else
              <ul class="hidephone" style="list-style: none;">
                <li><i class="fa fa-check"></i> Accroitre votre portefeuille à travers des clients prestiges : investisseurs nationaux et étrangers</li>
                <li><i class="fa fa-check"></i> Être un acteur clé de l’investissement en République de Guinée</li>
                <li><i class="fa fa-check"></i> Bénéficier d’une visibilité internationale</li>
                <li><i class="fa fa-check"></i> Faire la promotion de ses produits et services lors d’un évènement de haut standing</li>
                <li><i class="fa fa-check"></i> Contribuer au développent socio-économique de la Guinée à travers un partenariat privilégié avec l’Agence de Promotion des Investissements Privés </li>
               </ul><br><br>
               @endif
    </div>
  </div>
 
 <div class="row" style="width: 100%;margin: 0px;">
          <div class="col-lg-12" class="sponsor_slide" id="sponsor_slide_mover"  style="background: #c1a23f;padding: 2px;text-align: center;color: #fff;font-weight: bold; ">
             @if(langue()=='En')
               <h1><b>Hosted by</b></h1>
               @elseif(langue()=='Fr')
                  <h1><b>Organisé par</b></h1>
                @else
                <h1><b>Organisé par</b></h1>
               @endif
            
          
          </div>
            <div class="col-lg-12" class="sponsor_slide" id="sponsor_slide_mover"  style="padding: 2px;background: #fff;text-align: center;color: #fff;font-weight: bold; ">
             <div class="row">
                        <div class="col-md-6">
                       <center> <img src="{{asset('images/armoirie.png')}}" style="width: 120px;height: 150px;"></center>
                      </div>
                       <div class="col-md-6">
                        <center><img src="{{asset('images/apip.png')}}" style="width: 150px;height: 150px;"></center>
                      </div>
                      
                      
                     
                    </div>
            
          
          </div>
          
            <div class="col-lg-12" class="sponsor_slide" id="sponsor_slide_mover"  style="padding: 2px;background: #c1a23f;text-align: center;color: #fff;font-weight: bold; ">
             @if(langue()=='En')
               <h1><b>Co-organizers</b></h1>
               @elseif(langue()=='Fr')
                  <h1><b>Co- organisateurs </b></h1>
                @else
                <h1><b>Co- organisateurs </b></h1>
               @endif
            
          
          </div>
           <div class="col-lg-12" class="sponsor_slide" id="sponsor_slide_mover"  style="padding: 2px;background: #fff;text-align: center;color: #fff;font-weight: bold; ">
             <div class="row">
                        <div class="col-md-6">
                       <center> <img src="{{asset('images/partenaire/bad.jpg')}}" style="height: 150px;"></center>
                      </div>
                       <div class="col-md-6">
                        <center><img src="{{asset('images/partenaire/IFC2.jpg')}}" style="width: 300px; height: 80px;margin-top: 40px;"></center>
                      </div>
                                       
                      
                     
                    </div>
            
          
          </div>
             <div class="col-lg-12" class="sponsor_slide" id="sponsor_slide_mover"  style="padding: 2px;background: #c1a23f;text-align: center;color: #fff;font-weight: bold; ">
             @if(langue()=='En')
               <h1><b>Institutional Partners</b></h1>
               @elseif(langue()=='Fr')
                  <h1><b>Partenaires Institutionnels</b></h1>
                @else
                <h1><b>Partenaires Institutionnels</b></h1>
               @endif
            
          
          </div>
           <div class="col-lg-12" class="sponsor_slide" id="sponsor_slide_mover"  style="padding: 2px;background: #fff;text-align: center;color: #fff;font-weight: bold; ">
             <div class="row">
                        <div class="col-md-6">
                       <center> <img src="{{asset('images/partenaire/enabel.png')}}" style="height: 150px;"></center>
                      </div>
                       
                       <div class="col-md-6">
                        <center><img src="{{asset('images/partenaire/pnud.png')}}" style="height: 150px;"></center>
                      </div>
                      
                      </div>
            
          
          </div>
            <div class="col-lg-12" class="sponsor_slide" id="sponsor_slide_mover"  style="padding: 2px;background: #c1a23f;text-align: center;color: #fff;font-weight: bold; ">
             @if(langue()=='En')
               <h1><b>Elite Partners</b></h1>
               @elseif(langue()=='Fr')
                  <h1><b>Partenaires Elite </b></h1>
                @else
                <h1><b>Partenaires Elite </b></h1>
               @endif

            
          
          </div>
           <div class="col-lg-12" class="sponsor_slide" id="sponsor_slide_mover"  style="padding: 2px;background: #fff;text-align: center;color: #fff;font-weight: bold; ">
             <div class="row">
                       
                       <div class="col-md-6">
                        <center><img src="{{asset('images/partenaire/gac.jpg')}}" style="width: 150px;height: 150px;"></center>
                      </div>
                      <div class="col-md-6">
                        <center><img src="{{asset('images/partenaire/sonap.png')}}" style="width: 150px;height: 150px;"></center>
                      </div>
                      
                      
             </div>
            
          
          </div>
            <div class="col-lg-12" class="sponsor_slide" id="sponsor_slide_mover"  style="padding: 2px;background: #c1a23f;text-align: center;color: #fff;font-weight: bold; ">
             @if(langue()=='En')
               <h1><b>Platinium Partners</b></h1>
               @elseif(langue()=='Fr')
                  <h1><b>Partenaires Platinium</b></h1>
                @else
                <h1><b>Partenaires Platinium</b></h1>
               @endif
            
          
          </div>
           <div class="col-lg-12" class="sponsor_slide" id="sponsor_slide_mover"  style="padding: 2px;background: #fff;text-align: center;color: #fff;font-weight: bold; ">
             <div class="row">
                        <div class="col-md-3">
                       <center> <img src="{{asset('images/partenaire/guicopres.png')}}" style="height: 150px;width: 300px;"></center>
                      </div>
                        <div class="col-md-3">
                       <center> <img src="{{asset('images/partenaire/cbg.png')}}" style="height: 150px;width: 300px;"></center>
                      </div>
                       <div class="col-md-3">
                       <center> <img src="{{asset('images/partenaire/gpc.png')}}" style="height: 150px;width: 300px;"></center>
                      </div>
                       <div class="col-md-3">
                       <center> <img src="{{asset('images/partenaire/saar.png')}}" style="height: 150px;width: 300px;"></center>
                      </div>
                       <div class="col-md-3">
                       <center> <img src="{{asset('images/partenaire/soguibec.jpg')}}" style="height: 150px;width: 300px;"></center>
                      </div>
                     

            </div>
            
          
          </div>

           <div class="col-lg-12" class="sponsor_slide" id="sponsor_slide_mover"  style="padding: 2px;background: #c1a23f;text-align: center;color: #fff;font-weight: bold; ">
             @if(langue()=='En')
               <h1><b>Gold Partners</b></h1>
               @elseif(langue()=='Fr')
                  <h1><b>Partenaires Or</b></h1>
                @else
                <h1><b>Partenaires Or</b></h1>
               @endif
            
          
          </div>
          
           <div class="col-md-12">
                <div class="row">
                   <div class="col-md-3">
                        <center><img src="{{asset('images/partenaire/globetrans.jpg')}}" style="height: 150px;"></center>
                    </div>
                     <div class="col-md-3">
                        <center><img src="{{asset('images/partenaire/apb.png')}}" style="height: 150px;"></center>
                    </div>
                     <div class="col-md-3">
                        <center><img src="{{asset('images/partenaire/maf.jpg')}}" style="height: 150px;"></center>
                    </div>
                     <div class="col-md-3">
                        <center><img src="{{asset('images/partenaire/lb.png')}}" style="height: 150px;"></center>
                    </div>
                     <div class="col-md-3">
                        <center><img src="{{asset('images/partenaire/topaz.jpg')}}" style="width: 200px;height: 150px;"></center>
                      </div>
                      
                      
                      
                </div>
            </div>
           <div class="col-lg-12" class="sponsor_slide" id="sponsor_slide_mover"  style="padding: 2px;background: #c1a23f;text-align: center;color: #fff;font-weight: bold; ">
             @if(langue()=='En')
               <h1><b>Organizing partners</b></h1>
               @elseif(langue()=='Fr')
                  <h1><b>Partenaires Techniques </b></h1>
                @else
                <h1><b>Partenaires Techniques </b></h1>
               @endif
            
          
          </div>
           <div class="col-lg-12" class="sponsor_slide" id="sponsor_slide_mover"  style="padding: 2px;background: #fff;text-align: center;color: #fff;font-weight: bold; ">
             <div class="row">
                        <div class="col-md-6">
                       <center> <img src="{{asset('images/partenaire/fiduxis.jpg')}}" style="height: 180px;"></center>
                      </div>
                       <div class="col-md-6">
                        <center><img src="{{asset('images/partenaire/monarque.png')}}" style="height: 200px;"></center>
                      </div>
                      
                                       
                      
                     
                    </div>
            
          
          </div>

            <div class="col-lg-12" class="sponsor_slide" id="sponsor_slide_mover"  style="padding: 2px;background: #c1a23f;text-align: center;color: #fff;font-weight: bold; ">
             @if(langue()=='En')
               <h1><b>Media Partners</b></h1>
               @elseif(langue()=='Fr')
                  <h1><b>Partenaires Medias </b></h1>
                @else
                <h1><b>Partenaires Medias </b></h1>
               @endif
            
          
          </div>
           <div class="col-lg-12" class="sponsor_slide" id="sponsor_slide_mover"  style="padding: 2px;background: #fff;text-align: center;color: #fff;font-weight: bold; ">
             <div class="row">
                        <div class="col-md-6">
                       <center> <img src="{{asset('images/partenaire/djoma.png')}}" style="height: 200px;"></center>
                      </div>
                       <div class="col-md-6">
                       <center> <img src="{{asset('images/partenaire/rtg.jpg')}}" style="height: 200px;"></center>
                      </div>
                      
                                       
                      
                     
                    </div>
            
          
          </div>
           <div class="col-lg-12" class="sponsor_slide" id="sponsor_slide_mover"  style="padding: 2px;background: #c1a23f;text-align: center;color: #fff;font-weight: bold; ">
             @if(langue()=='En')
               <h1><b>Partners</b></h1>
               @elseif(langue()=='Fr')
                  <h1><b>Partenaires</b></h1>
                @else
                <h1><b>Partenaires</b></h1>
               @endif
            
          
          </div>
           <div class="col-lg-12" class="sponsor_slide" id="sponsor_slide_mover"  style="padding: 2px;background: #fff;text-align: center;color: #fff;font-weight: bold; ">
             <div class="row">
                       <!--  <div class="col-md-4">
                       <center> <img src="{{asset('images/partenaire/oxford.jpg')}}" style="height: 200px;"></center>
                      </div> -->
                       
                      
                                       
                      
                     
                    </div>
            
          
          </div>

          <!-- description -->
         <!--  <div class="col-lg-12" class="sponsor_slide" id="sponsor_slide_mover"  style="padding: 2px;background: #c1a23f;text-align: center;color: #fff;font-weight: bold; ">
             @if(langue()=='En')
               <h1><b>Description</b></h1>
               @elseif(langue()=='Fr')
                  <h1><b>Description</b></h1>
                @else
                <h1><b>Description</b></h1>
               @endif
            
          
          </div>
           <div class="col-lg-12" class="sponsor_slide" id="sponsor_slide_mover"  style="padding: 2px;background: #fff;text-align: center;color: #fff;font-weight: bold; ">
             <div class="row">
                        <div class="col-md-4">
                       <center> <img src="{{asset('images/partenaire/oxford.jpg')}}" style="height: 200px;"></center>
                      </div>
                       <div class="col-md-8">
                      <p>
                        @if(langue()=='En')
              <p><b>About Oxford Business Group</b></p>
              <p>Oxford Business Group (OBG) is a global research and advisory company with a presence in over 30 countries, spanning the Middle East, Africa, Asia and the Americas. It is recognised internationally as a distinctive and respected provider of on-the-ground intelligence on world’s fastest-growing markets, termed The Yellow Slice, in reference to OBG’s corporate colour. </p>
              <p>
                Through its range of products - Economic News and Views; OBG CEO Surveys; OBG Events and Conferences; Global Platform, which hosts exclusive video interviews; and The Report publications – as well as its Advisory division, OBG offers comprehensive and accurate analysis of macroeconomic and sector-level developments for sound investment opportunities and business decisions. 
              </p>
              <p>
                OBG provides business intelligence to its subscribers through multiple platforms, including its direct 6 million verified subscribers, Dow Jones Factiva subscribers, the Bloomberg Professional Services subscribers, Refinitiv’s (previously Thomson Reuters) Eikon subscribers and more.
                 <a target="_blank" href="https://oxfordbusinessgroup.com/">www.oxfordbusinessgroup.com</a>
              </p>

               @elseif(langue()=='Fr')
                   <p>Oxford Business Group</p>
              <p>Oxford Business Group (OBG) est une société mondiale de recherche et de conseil présente dans plus de 30 pays, au Moyen-Orient, en Afrique, en Asie et en Amérique. Elle est reconnue au niveau international comme un fournisseur de renseignements sur le terrain distinctif et respecté sur les marchés à plus forte croissance du monde, appelé The Yellow Slice, en référence à la couleur de l'entreprise OBG.</p>
              <p>
                Grâce à sa gamme de produits - Economic News and Views, OBG CEO Surveys, OBG Events and Conferences, Global Platform, qui propose des entretiens vidéo exclusifs, et les publications The Report - ainsi qu'à sa division Advisory, OBG offre une analyse complète et précise des évolutions macroéconomiques et sectorielles pour des opportunités d'investissement et des décisions commerciales judicieuses. 
              </p>
              <p>
                L'OBG fournit des informations commerciales à ses abonnés par le biais de plusieurs plateformes, notamment ses 6 millions d'abonnés directs vérifiés, les abonnés de Dow Jones Factiva, les abonnés de Bloomberg Professional Services, les abonnés d'Eikon de Refinitiv (anciennement Thomson Reuters) et bien d'autres encore. 
                 <a target="_blank" href="https://oxfordbusinessgroup.com/">www.oxfordbusinessgroup.com</a>
              </p>
                @else
                 <p>Oxford Business Group</p>
              <p>Oxford Business Group (OBG) is a global research and advisory company with a presence in over 30 countries, spanning the Middle East, Africa, Asia and the Americas. It is recognised internationally as a distinctive and respected provider of on-the-ground intelligence on world’s fastest-growing markets, termed The Yellow Slice, in reference to OBG’s corporate colour. </p>
              <p>
                Through its range of products - Economic News and Views; OBG CEO Surveys; OBG Events and Conferences; Global Platform, which hosts exclusive video interviews; and The Report publications – as well as its Advisory division, OBG offers comprehensive and accurate analysis of macroeconomic and sector-level developments for sound investment opportunities and business decisions. 
              </p>
              <p>
                OBG provides business intelligence to its subscribers through multiple platforms, including its direct 6 million verified subscribers, Dow Jones Factiva subscribers, the Bloomberg Professional Services subscribers, Refinitiv’s (previously Thomson Reuters) Eikon subscribers and more.
                <a target="_blank" href="https://oxfordbusinessgroup.com/">www.oxfordbusinessgroup.com</a>
              </p>
               @endif
                      </p>
                      </div>
                      
                                       
                      
                     
                    </div>
            
          
          </div>
          <hr>
          <div class="col-lg-12" class="sponsor_slide" id="sponsor_slide_mover"  style="padding: 2px;background: #fff;text-align: center;color: #fff;font-weight: bold; ">
             <div class="row">
                        <div class="col-md-4">
                       <center> <img src="{{asset('images/partenaire/pnud.png')}}" style="height: 250px;"></center>
                      </div>
                       <div class="col-md-8">
                      <p>
                        @if(langue()=='En')
              <p>Our mission is to help reduce poverty while protecting the planet. It translates into the support of states or countries to develop policies, develop leadership skills and partnership skills, build their institutional capacities and share solutions to issues of sustainable   development, democratic governance, climate and adaptation, gender equality, crisis response and development impact.</p>
              <p>
                As the main Un Development Agency, UNDP is supporting the Government of Guinea in the implementation of the SDG Sustainable Development Goals.

              </p>
              <p>
                The UNDP Country Programme Document (CPD) aims to help Guinea create the conditions for equitable and sustainable growth by establishing strong public institutions with responsible trust in civil society.
The UNDP Country Programme Document (CPD) aims to help Guinea create the conditions for equitable and sustainable growth by establishing strong public institutions with responsible trust in civil society. 
              </p>

               @elseif(langue()=='Fr')
                   
              <p>Notre mission est de contribuer à réduire la pauvreté tout en protégeant la planète. Elle se traduit par l’appui des Etats ou pays à élaborer des politiques, à développer des compétences en leadership et des aptitudes en matière de partenariat, à renforcer leurs capacités institutionnelles et à partager des solutions aux problèmes touchant aux questions de Développement durable, de Gouvernance démocratique, de Climat et d’adaptation, de l’égalité des sexes, de Réponse aux crises et d’Impact du développement.

</p>
              <p>
                En tant qu’Agence principale des Nations Unies pour le Développement, le PNUD appuie le Gouvernement Guinéen dans la mise en œuvre des Objectifs pour le Développement Durable ODD. 

              </p>
              <p>
                Le Document de Programme Pays du PNUD (CPD), vise à aider la Guinée à mettre en place les conditions d’une croissance équitable et durable en établissant des institutions publiques solides et de confiance responsable de la société civile. 
              </p>
                @else
                  <p>Notre mission est de contribuer à réduire la pauvreté tout en protégeant la planète. Elle se traduit par l’appui des Etats ou pays à élaborer des politiques, à développer des compétences en leadership et des aptitudes en matière de partenariat, à renforcer leurs capacités institutionnelles et à partager des solutions aux problèmes touchant aux questions de Développement durable, de Gouvernance démocratique, de Climat et d’adaptation, de l’égalité des sexes, de Réponse aux crises et d’Impact du développement.

</p>
              <p>
                En tant qu’Agence principale des Nations Unies pour le Développement, le PNUD appuie le Gouvernement Guinéen dans la mise en œuvre des Objectifs pour le Développement Durable ODD. 

              </p>
              <p>
                Le Document de Programme Pays du PNUD (CPD), vise à aider la Guinée à mettre en place les conditions d’une croissance équitable et durable en établissant des institutions publiques solides et de confiance responsable de la société civile. 
              </p>
               @endif
                      </p>
                      </div>
                      
                                       
                      
                     
                    </div>
            
          
          </div>
             <hr>
          <div class="col-lg-12" class="sponsor_slide" id="sponsor_slide_mover"  style="padding: 2px;background: #fff;text-align: center;color: #fff;font-weight: bold; ">
             <div class="row">
                        <div class="col-md-4">
                       <center> <img src="{{asset('images/partenaire/guicopres.png')}}" style="height: 150px;width: 300px;"></center>
                      </div>
                       <div class="col-md-8">
                      <p>
                        @if(langue()=='En')
              <p>A private company under Guinean law founded in 1998 by businessman Kerfalla CAMARA - KPC who has surrounded itself with young talents, the GUICOPRES GROUP has quickly become a key Guinean player in the construction, real estate, transit and commercial sectors; this through its four subsidiaries: GUICOPRES-BTP, KAKANDE-IMMO, NALOU-TRANSIT and GUICO MULTISERVICES INTERNATIONAL.</p>
              <p>
                With a positioning at the forefront of innovation and driven by the solid long-term vision of its President, the GUICOPRES GROUP quickly managed to diversify its activities into complementary areas with strong synergy. The Group is now extending its geographical reach far beyond Guinea's borders: Senegal, Mali, Sierra Leone, Gambia, Guinea-Bissau, Côte d'Ivoire and Liberia in terms of neighbouring countries; but also, to other countries on the African continent such as Morocco and DR-Congo, where GUICOPRES has opened representative offices


              </p>
             

               @elseif(langue()=='Fr')
                   
               <p>Entreprise privée de droit Guinéen créée en 1998 par l’homme d’affaires Kerfalla CAMARA – KPC qui a su s’entourer de jeunes talents, le GROUPE GUICOPRES est rapidement devenu un acteur Guinéen incontournable des secteurs de la construction, de l’immobilier, du transit et du commerce ; ceci à travers les quatre filiales qui le composent :  GUICOPRES-BTP, KAKANDE-IMMO, NALOU-TRANSIT et GUICO MULTISERVICES INTERNATIONAL.
 

</p>
              <p>
                Avec un positionnement à la pointe de l’innovation et porté par la solide vision de long-terme de son Président, le GROUPE GUICOPRES est très vite parvenu à diversifier ses activités dans des domaines complémentaires à forte synergie. Le Groupe étend ainsi aujourd’hui son rayonnement géographique bien au-delà des frontières de la Guinée : Sénégal, Mali, Sierra-Leone, Gambie, Guinée-Bissau, Côte d’Ivoire et Liberia pour ce qui est des pays avoisinants ; mais aussi à d’autres pays du continent Africain tels que le Maroc et la RD-Congo, où GUICOPRES a ouvert des bureaux de représentation. 

              </p>
                @else
                   <p>Entreprise privée de droit Guinéen créée en 1998 par l’homme d’affaires Kerfalla CAMARA – KPC qui a su s’entourer de jeunes talents, le GROUPE GUICOPRES est rapidement devenu un acteur Guinéen incontournable des secteurs de la construction, de l’immobilier, du transit et du commerce ; ceci à travers les quatre filiales qui le composent :  GUICOPRES-BTP, KAKANDE-IMMO, NALOU-TRANSIT et GUICO MULTISERVICES INTERNATIONAL.
 

</p>
              <p>
                Avec un positionnement à la pointe de l’innovation et porté par la solide vision de long-terme de son Président, le GROUPE GUICOPRES est très vite parvenu à diversifier ses activités dans des domaines complémentaires à forte synergie. Le Groupe étend ainsi aujourd’hui son rayonnement géographique bien au-delà des frontières de la Guinée : Sénégal, Mali, Sierra-Leone, Gambie, Guinée-Bissau, Côte d’Ivoire et Liberia pour ce qui est des pays avoisinants ; mais aussi à d’autres pays du continent Africain tels que le Maroc et la RD-Congo, où GUICOPRES a ouvert des bureaux de représentation. 

              </p>
               @endif
                      </p>
                      </div>
                      
                                       
                      
                     
                    </div>
            
          
          </div>
          <hr>
          <div class="col-lg-12" class="sponsor_slide" id="sponsor_slide_mover"  style="padding: 2px;background: #fff;text-align: center;color: #fff;font-weight: bold; ">
             <div class="row">
                        <div class="col-md-4">
                       <center> <img src="{{asset('images/partenaire/riotinto.png')}}" style="height: 100px;width: 300px;"></center>
                      </div>
                       <div class="col-md-8">
                      <p>
                        @if(langue()=='En')
              <p>Every idea, every innovation, every little thing the world calls ‘progress’ begins with a first step, and someone willing to take it: explorers, inventors, entrepreneurs. Pioneers. For nearly 150 years, Rio Tinto has been a company of pioneers – generations of people spanning the globe, all with the grit and vision to produce materials essential to human progress. </p>
              <p>
                Our iron ore has shaped skylines from Shanghai to Sydney. Our aluminium – the world’s first to be certified “responsible” – helps planes fly and makes cars lighter. Our copper helps wind turbines power cities and our boron helps feed the world, and explore the universe.
              </p>
              <p>
                Our diamonds help us celebrate the best parts of life.</p> 
 <p>In Guinea, Rio Tinto holds a 45.05% interest in the Simandou Iron Ore project (blocks 3 & 4), together with Chinalco (39.95%) and the Government of Guinea (15%). The Simandou concession straddles the Simandou mountain range, home to undeveloped high-grade iron ore deposits.  Rio Tinto also owns 22.95% of the non-managed Sangaredi Bauxite Mine operated by Compagnie des Bauxites de Guinea (CBG) via a stake in Halco which holds 51% of the mine’s shares. The remaining 49% belongs to the Government of Guinea
              </p>
             

               @elseif(langue()=='Fr')
                   
               <p>À l’origine de chaque idée, de chaque innovation, de chaque petite chose qu’on appelle « progrès », il y a une personne : un explorateur, un inventeur, un entrepreneur. Un pionnier. 
Depuis près de 150 ans, Rio Tinto est une entreprise de pionniers – des générations d’employés audacieux partout dans le monde qui ont en commun la vision de produire des matières essentielles au progrès humain. 
Notre minerai de fer façonne la silhouette des villes, de Shanghai à Sydney. Notre aluminium – premier métal certifié « responsable » au monde – allège les avions et les voitures. Notre cuivre aide les éoliennes à produire de l’énergie. Notre bore contribue à nourrir le monde et permet d’explorer l’univers. Nos diamants célèbrent les plus beaux moments de la vie. 
 


</p>
              <p>En Guinée, Rio Tinto détient une participation de 45,05 % dans le projet de minerai de fer de Simandou (blocs 3 et 4), avec Chinalco (39,95 %) et le gouvernement guinéen (15 %). La concession de Simandou chevauche la chaîne de montagnes de Simandou, qui abrite des gisements de minerai de fer à haute teneur non encore exploités.  Rio Tinto possède également 22,95 % de la mine de bauxite Sangaredi, non gérée, exploitée par la Compagnie des Bauxites de Guinée (CBG) via une participation dans Halco qui détient 51 % des actions de la mine. Les 49 % restants appartiennent au gouvernement de Guinée


              </p>
                @else
                    <p>À l’origine de chaque idée, de chaque innovation, de chaque petite chose qu’on appelle « progrès », il y a une personne : un explorateur, un inventeur, un entrepreneur. Un pionnier. 
Depuis près de 150 ans, Rio Tinto est une entreprise de pionniers – des générations d’employés audacieux partout dans le monde qui ont en commun la vision de produire des matières essentielles au progrès humain. 
Notre minerai de fer façonne la silhouette des villes, de Shanghai à Sydney. Notre aluminium – premier métal certifié « responsable » au monde – allège les avions et les voitures. Notre cuivre aide les éoliennes à produire de l’énergie. Notre bore contribue à nourrir le monde et permet d’explorer l’univers. Nos diamants célèbrent les plus beaux moments de la vie. 
 


</p>
              <p>En Guinée, Rio Tinto détient une participation de 45,05 % dans le projet de minerai de fer de Simandou (blocs 3 et 4), avec Chinalco (39,95 %) et le gouvernement guinéen (15 %). La concession de Simandou chevauche la chaîne de montagnes de Simandou, qui abrite des gisements de minerai de fer à haute teneur non encore exploités.  Rio Tinto possède également 22,95 % de la mine de bauxite Sangaredi, non gérée, exploitée par la Compagnie des Bauxites de Guinée (CBG) via une participation dans Halco qui détient 51 % des actions de la mine. Les 49 % restants appartiennent au gouvernement de Guinée


              </p>
               @endif
                      </p>
                      </div>
                      
                                       
                      
                     
                    </div>
            
          
          </div>
          <hr>
          <div class="col-lg-12" class="sponsor_slide" id="sponsor_slide_mover"  style="padding: 2px;background: #fff;text-align: center;color: #fff;font-weight: bold; ">
             <div class="row">
                        <div class="col-md-4">
                       <center> <img src="{{asset('images/partenaire/ecobank.jpg')}}" style="height: 150px;width: 300px;"></center>
                      </div>
                       <div class="col-md-8">
                      <p>
                        @if(langue()=='En')
              <p>
                Founded in Lomé (Togo) in 1988, Ecobank Transnational Incorporated ('ETI') is the parent company of the Ecobank Group, the leading pan-African independent banking group. The Ecobank Group employs over 15,000 people and has approximately 20 million personal, commercial and corporate banking customers in 33 African countries. Ecobank is a universal bank that provides wholesale, retail, investment and transaction banking services and products to governments, financial institutions, multinational corporations, international organizations, medium, small and micro enterprises and individuals. The Group has a banking licence in France and representative offices in Addis Ababa, Ethiopia, Johannesburg, South Africa, Beijing, China, London, United Kingdom and Dubai, United Arab Emirates. The Group offers a full range of banking products, services and solutions: bank and deposit accounts, loans, cash management, advisory services, business development services, securities, asset and wealth management, among others. ETI is listed on the Nigerian Stock Exchange in Lagos, the Ghana Stock Exchange in Accra and the Regional Stock Exchange in Abidjan. For more information, please visit <a target="_blank" href="www.ecobank.com">www.ecobank.com</a>
              </p>
             

               @elseif(langue()=='Fr')
                   
               <p>Fondée à Lomé (Togo) en 1988, Ecobank Transnational Incorporated (‘ETI’) est la maison mère du Groupe Ecobank, le principal groupe bancaire indépendant panafricain. Le Groupe Ecobank emploie plus de 15 000 personnes et compte environ 20 millions de clients de la Banque des Particuliers, Commerciale et de Grande entreprise dans 33 pays africains. Ecobank, C’est une banque universelle qui fournit des services et des produits bancaires de gros, de détail, en investissements et en transactions, aux gouvernements, aux institutions financières, aux multinationales, aux organisations internationales, aux moyennes, petites et microentreprises et aux particuliers. Le Groupe dispose d’un agrément bancaire en France et possède des bureaux de représentation à Addis Abeba en Éthiopie, à Johannesburg en Afrique du Sud, à Pékin en Chine, à Londres au Royaume-Uni et à Dubaï aux Émirats arabes unis. Le Groupe propose une gamme complète de produits, services et solutions bancaires : comptes bancaires et de dépôt, crédits, gestion de trésorerie, services de conseil, services de développement commercial, titres, gestion d’actifs et de patrimoine, entre autres. ETI est cotée à la Bourse nigériane à Lagos, à la Bourse du Ghana à Accra et à la Bourse régionale des valeurs mobilières à Abidjan. Pour plus d’informations, veuillez consulter  <a target="_blank" href="www.ecobank.com">www.ecobank.com</a>
               </p>
             
                @else
                     <p>Fondée à Lomé (Togo) en 1988, Ecobank Transnational Incorporated (‘ETI’) est la maison mère du Groupe Ecobank, le principal groupe bancaire indépendant panafricain. Le Groupe Ecobank emploie plus de 15 000 personnes et compte environ 20 millions de clients de la Banque des Particuliers, Commerciale et de Grande entreprise dans 33 pays africains. Ecobank, C’est une banque universelle qui fournit des services et des produits bancaires de gros, de détail, en investissements et en transactions, aux gouvernements, aux institutions financières, aux multinationales, aux organisations internationales, aux moyennes, petites et microentreprises et aux particuliers. Le Groupe dispose d’un agrément bancaire en France et possède des bureaux de représentation à Addis Abeba en Éthiopie, à Johannesburg en Afrique du Sud, à Pékin en Chine, à Londres au Royaume-Uni et à Dubaï aux Émirats arabes unis. Le Groupe propose une gamme complète de produits, services et solutions bancaires : comptes bancaires et de dépôt, crédits, gestion de trésorerie, services de conseil, services de développement commercial, titres, gestion d’actifs et de patrimoine, entre autres. ETI est cotée à la Bourse nigériane à Lagos, à la Bourse du Ghana à Accra et à la Bourse régionale des valeurs mobilières à Abidjan. Pour plus d’informations, veuillez consulter  <a target="_blank" href="www.ecobank.com">www.ecobank.com</a>
               </p>
               @endif
                      </p>
                      </div>
                      
                                       
                      
                     
                    </div>
            
          
          </div>
          <hr>
          <div class="col-lg-12" class="sponsor_slide" id="sponsor_slide_mover"  style="padding: 2px;background: #fff;text-align: center;color: #fff;font-weight: bold; ">
             <div class="row">
                        <div class="col-md-4">
                       <center> <img src="{{asset('images/partenaire/vista.jpg')}}" style="height: 150px;width: 300px;"></center>
                      </div>
                       <div class="col-md-8">
                      <p>
                        @if(langue()=='En')
              <p>
               Vista Bank Guinea was born after Lilium Capital took over FiB Group Limited in 2016.
The capital is held by Vista Group Ltd as majority shareholder and private Guinean ns.
Despite the stiff competition in a highly coveted environment, the bank was able to make its mark by winning the market to occupy 5th place out of 16 in terms of resource collection and total balance sheet.
Through its extensive network of branches, the bank is able to reach more customers in its target market such as mining, general trade, construction and agriculture and individuals. 
The opening of branches in these very important localities is part of a strategy that allows  the bank to enter new markets in order to improve its performance while addressing the needs of customers in this area.  
These points of service, in  all  types of operations, have been able to develop remarkably performance in terms of resource mobilization and have contributed greatly to the profitability of the bank.
In addition, the bank has made a significant contribution to financing the economy by assisting companies in the construction of public and privately-controlled infrastructure.

              </p>
             

               @elseif(langue()=='Fr')
                   
               <p>Vista Bank Guinée est née suite à la reprise par Lilium Capital de FiB Group Limited en 2016.
Le capital est détenu par Vista Group Ltd comme actionnaire majoritaire et des privés guinéens.
Malgré la rude concurrence dans un environnement largement convoité, la banque a pu tirer son épingle du jeu en s’imposant sur le marché jusqu’à occuper la 5ème place sur 16 en termes de collecte de ressources et de total bilan.
Grâce à son large réseau d’agences, la banque est capable de toucher plus de clients de son marché cible que sont les mines, le commerce général, les BTP et l’agriculture et les particuliers 
L’ouverture des agences dans ces localités très importantes, s’inscrit dans une stratégie qui permet à la banque de pénétrer les marchés nouveaux afin d’améliorer ses performances tout en adressant les besoins des clients dans ces zones. 
Ces points de service, en effectuant tous types d'opérations, ont pu développer remarquablement des performances en termes de mobilisation de ressources et ont contribué grandement à la profitabilité de la banque.
Par ailleurs, la banque a contribué grandement au financement de l’économie en accompagnant les entreprises dans la réalisation des infrastructures sous commande publique et privée.

               </p>
             
                @else
                    Vista Bank Guinée est née suite à la reprise par Lilium Capital de FiB Group Limited en 2016.
Le capital est détenu par Vista Group Ltd comme actionnaire majoritaire et des privés guinéens.
Malgré la rude concurrence dans un environnement largement convoité, la banque a pu tirer son épingle du jeu en s’imposant sur le marché jusqu’à occuper la 5ème place sur 16 en termes de collecte de ressources et de total bilan.
Grâce à son large réseau d’agences, la banque est capable de toucher plus de clients de son marché cible que sont les mines, le commerce général, les BTP et l’agriculture et les particuliers 
L’ouverture des agences dans ces localités très importantes, s’inscrit dans une stratégie qui permet à la banque de pénétrer les marchés nouveaux afin d’améliorer ses performances tout en adressant les besoins des clients dans ces zones. 
Ces points de service, en effectuant tous types d'opérations, ont pu développer remarquablement des performances en termes de mobilisation de ressources et ont contribué grandement à la profitabilité de la banque.
Par ailleurs, la banque a contribué grandement au financement de l’économie en accompagnant les entreprises dans la réalisation des infrastructures sous commande publique et privée.

               </p>
               @endif
                      </p>
                      </div>
                      
                                       
                      
                     
                    </div>
            
          
          </div>
          <hr>
          <div class="col-lg-12" class="sponsor_slide" id="sponsor_slide_mover"  style="padding: 2px;background: #fff;text-align: center;color: #fff;font-weight: bold; ">
             <div class="row">
                        <div class="col-md-4">
                       <center> <img src="{{asset('images/partenaire/saar.png')}}" style="height: 200px;width: 300px;"></center>
                      </div>
                       <div class="col-md-8">
                      <p>
                        @if(langue()=='En')
              <p>
              Saar Insurance Guinea is a subsidiary of the SAAR Group, a world-class pan-African insurance group. The Group has been present for 30 years in Benin, Cameroon, Côte d'Ivoire, Equatorial Guinea, Liberia, Sao Tome and Principe, Senegal, Chad and the Republic of Guinea.
 
In a world of uncertainty and many vagaries, our special feature lies in our ongoing commitment to provide our policyholders with "tailored" insurance coverage in order to ensure the best possible coverage at the lowest costs. Notre offers a wide range of insurance products for individuals, institutions, professionals and businesses in all sectors.
 
In Guinea, a team of highly qualified young professionals devote themselves every day to respond quickly to the security needs of our policyholders.


              </p>
             

               @elseif(langue()=='Fr')
                   
               <p>Saar Assurances Guinée est une filiale du Groupe SAAR, un Groupe panafricain d’assurance de classe mondiale. Le Groupe est présent depuis 30 ans dans les pays suivants : Bénin, Cameroun, Côte d'Ivoire, Guinée Equatoriale, Libéria, Sao Tome et Principe, Sénégal, Tchad et en République de Guinée. 
 
Dans un monde jalonné d’incertitudes et de multiples aléas, notre particularité réside dans notre engagement permanent à fournir à nos assurés des couvertures d’assurance « sur mesure », de façon à garantir la meilleure couverture possible aux coûts les plus bas. Notre offre comporte une vaste gamme de produits d’assurance destinés aux particuliers, aux institutions, aux professionnels et aux entreprises de tous les secteurs.
 
En Guinée, une équipe de jeunes professionnels hautement qualifiés se dévouent chaque jour pour répondre avec célérité aux besoins de sécurité de nos assurés.


               </p>
             
                @else
                   Saar Assurances Guinée est une filiale du Groupe SAAR, un Groupe panafricain d’assurance de classe mondiale. Le Groupe est présent depuis 30 ans dans les pays suivants : Bénin, Cameroun, Côte d'Ivoire, Guinée Equatoriale, Libéria, Sao Tome et Principe, Sénégal, Tchad et en République de Guinée. 
 
Dans un monde jalonné d’incertitudes et de multiples aléas, notre particularité réside dans notre engagement permanent à fournir à nos assurés des couvertures d’assurance « sur mesure », de façon à garantir la meilleure couverture possible aux coûts les plus bas. Notre offre comporte une vaste gamme de produits d’assurance destinés aux particuliers, aux institutions, aux professionnels et aux entreprises de tous les secteurs.
 
En Guinée, une équipe de jeunes professionnels hautement qualifiés se dévouent chaque jour pour répondre avec célérité aux besoins de sécurité de nos assurés.


               </p>
               @endif
                      </p>
                      </div>
                      
                                       
                      
                     
                    </div>
            
          
          </div>
          <hr>
          <div class="col-lg-12" class="sponsor_slide" id="sponsor_slide_mover"  style="padding: 2px;background: #fff;text-align: center;color: #fff;font-weight: bold; ">
             <div class="row">
                        <div class="col-md-4">
                       <center> <img src="{{asset('images/partenaire/indigo.PNG')}}" style="height: 100px;width: 300px;"></center>
                      </div>
                       <div class="col-md-8">
                      <p>
                        @if(langue()=='En')
              <p>
             Communicating is first and foremost a story, of meeting and exchange. Come and meet us, we'll talk about your projects!
Since 2007, the INDIGO GUINEA team has been happy to help companies promote themselves throughout Guinea and the sub-region. 
 
Fields of activity: Advice & Strategy, Graphic Design, Print, Visual Communication, Event, Advertising Management, Audio-visual
</p>
 <p>
The Agency In numbers
<ul>
  <li>40 employees  </li>
  <li>teams of nearly 80 people in the sub-region through our networks SN INDIGO in Ivory Coast and INDIGO Burkina Faso.</li>
  <li> More than a hundred partner clients in key sectors of the economy and public life (automotive, banking, insurance, business services, IT services, construction and property development, professional federations, etc.).</li>
  <li>An average of 25 communication campaigns per year.</li>
  <li>2000 m² production area</li>
</ul>

             

               @elseif(langue()=='Fr')
                   
               <p>
             Communiquer, c’est d’abord une histoire, de rencontre et d’échanges. Venez nous rencontrer, on parlera de vos projets !
Depuis 2007, l’équipe d’INDIGO GUINEE est heureuse d’aider les entreprises à faire leur promotion partout en Guinée et dans la sous-région. 
Domaines D’activités : Conseil & Stratégie, Création Graphique, Impression, Communication Visuelle, Évènement, Régie Publicitaire and Audiovisuel</p>
 <p>
L’AGENCE EN CHIFFRE
<ul>
  <li>40 collaborateurs </li>
  <li>Des équipes de près de 80 personnes dans la sous-région via nos réseaux SN INDIGO en Côte D’Ivoire et INDIGO Burkina Faso</li>
  <li> Plus d’une centaine de clients partenaires dans les secteurs clés de l’économie et la vie publique (automobile, banque, assurance, services aux entreprises, services informatiques, construction et promotion immobilière, fédérations professionnelles, etc.).</li>
  <li>En moyenne 25 campagnes de communication par an… </li>
  <li>2000 m² d’atelier de production
12ans qu ‘on marque</li>
</ul>
<p>INDIGO GUINEE, BP 339 Conakry, Rep. De Guinée Camayenne Corniche Nord, Dixinn, Tel:  666 91 31 79 / 622 35 15 00, E mail : info@indigopubguinee.com
Web : www.indigopublicite.com  </p>
             
                @else
                  <p>
             Communiquer, c’est d’abord une histoire, de rencontre et d’échanges. Venez nous rencontrer, on parlera de vos projets !
Depuis 2007, l’équipe d’INDIGO GUINEE est heureuse d’aider les entreprises à faire leur promotion partout en Guinée et dans la sous-région. 
Domaines D’activités : Conseil & Stratégie, Création Graphique, Impression, Communication Visuelle, Évènement, Régie Publicitaire and Audiovisuel</p>
 <p>
L’AGENCE EN CHIFFRE
<ul>
  <li>40 collaborateurs </li>
  <li>Des équipes de près de 80 personnes dans la sous-région via nos réseaux SN INDIGO en Côte D’Ivoire et INDIGO Burkina Faso</li>
  <li> Plus d’une centaine de clients partenaires dans les secteurs clés de l’économie et la vie publique (automobile, banque, assurance, services aux entreprises, services informatiques, construction et promotion immobilière, fédérations professionnelles, etc.).</li>
  <li>En moyenne 25 campagnes de communication par an… </li>
  <li>2000 m² d’atelier de production
12ans qu ‘on marque</li>
</ul>
<p>INDIGO GUINEE, BP 339 Conakry, Rep. De Guinée Camayenne Corniche Nord, Dixinn, Tel:  666 91 31 79 / 622 35 15 00, E mail : info@indigopubguinee.com
Web : www.indigopublicite.com  </p>
               @endif
                      </p>
                      </div>
                      
                                       
                      
                     
                    </div>
            
          
          </div>
          <hr>
          <div class="col-lg-12" class="sponsor_slide" id="sponsor_slide_mover"  style="padding: 2px;background: #fff;text-align: center;color: #fff;font-weight: bold; ">
             <div class="row">
                        <div class="col-md-4">
                       <center> <img src="{{asset('images/partenaire/gac.jpg')}}" style="height: 200px;width: 300px;"></center>
                      </div>
                       <div class="col-md-8">
                      <p>
                        @if(langue()=='En')
              <p>Guinea Alumina Corporation S.A. (GAC) mines and exports metallurgical-grade bauxite. A wholly owned subsidiary of Emirates Global Aluminium (EGA), based in the United Arab Emirates, the company operates a mining concession located in the northwest of the Republic of Guinea, in West Africa. Once mined, the ore is sent by rail to the company’s port facilities at Kamsar, on the country’s Atlantic coast, and then shipped by sea to world markets. GAC employs 1,000 people and once the ramp-up is complete, the company is expected to produce approximately 12 million tons of bauxite per year. Its current mining plan provides for operations up to 2040. For more information, please visit <a target="_blank" href="www.gacguinee.com">www.gacguinee.com</a> </p>

             

               @elseif(langue()=='Fr')
                   
               <p>Guinea Alumina Corporation S.A. (GAC) est une société minière œuvrant dans les domaines de l’extraction et de l’exportation de bauxite métallurgique. Filiale à part entière d’Emirates Global Aluminium (EGA) établie aux Émirats arabes unis, la société exploite une concession minière située au nord-ouest de la République de Guinée, en Afrique de l’Ouest. Une fois extrait, le minerai est transporté par chemin de fer vers les installations portuaires de la compagnie situées à Kamsar, sur la côte Atlantique du pays, pour ensuite être expédié sur les marchés mondiaux par voie maritime. GAC compte 1 000 employés, et une fois la montée en puissance réalisée, l'entreprise devrait produire environ 12 millions de tonnes de bauxite par an. Son plan minier actuel prévoit une exploitation jusqu’en 2040. Pour plus de renseignements, visitez :  <a target="_blank" href="www.gacguinee.com">www.gacguinee.com</a> </p>
             
                @else
                   <p>Guinea Alumina Corporation S.A. (GAC) est une société minière œuvrant dans les domaines de l’extraction et de l’exportation de bauxite métallurgique. Filiale à part entière d’Emirates Global Aluminium (EGA) établie aux Émirats arabes unis, la société exploite une concession minière située au nord-ouest de la République de Guinée, en Afrique de l’Ouest. Une fois extrait, le minerai est transporté par chemin de fer vers les installations portuaires de la compagnie situées à Kamsar, sur la côte Atlantique du pays, pour ensuite être expédié sur les marchés mondiaux par voie maritime. GAC compte 1 000 employés, et une fois la montée en puissance réalisée, l'entreprise devrait produire environ 12 millions de tonnes de bauxite par an. Son plan minier actuel prévoit une exploitation jusqu’en 2040. Pour plus de renseignements, visitez :  <a target="_blank" href="www.gacguinee.com">www.gacguinee.com</a> </p>
               @endif
                      </p>
                      </div>
                      
                                       
                      
                     
                    </div>
            
          
          </div>
          <hr>
          <div class="col-lg-12" class="sponsor_slide" id="sponsor_slide_mover"  style="padding: 2px;background: #fff;text-align: center;color: #fff;font-weight: bold; ">
             <div class="row">
                        <div class="col-md-4">
                       <center> <img src="{{asset('images/partenaire/bench.png')}}" style="height: 150px;width: 300px;"></center>
                      </div>
                       <div class="col-md-8">
                      <p>
                        @if(langue()=='En')
              <p>Capacités de livraison d'événements de bout en bout à 360 ° En étroite collaboration avec les principales parties prenantes de nos clients, nous gérons, exécutons et rendons compte de leurs objectifs clés. La portée des travaux comprend :</p>
              <ul>
                <li>Gestion de projet</li>
                <li>Opérations d'événement virtuel ou non virtuel</li>
                <li>Programmation de la conférence </li>
                <li>Le marketing numérique </li>
                <li>Assistance client / participant</li>
                <li>Enquêtes / rapports post-événement</li>
                <li>PR et positionnement global</li>
              </ul> 

             

               @elseif(langue()=='Fr')
                   
                <p>360° end to end event delivery capabilities.  Working closely with our client's key stakeholders, we manage, execute and report on their key objectives. Scope of work includes:</p>
              <ul>
                <li>Project Management</li>
                <li>Virtual or non-virtual event operations</li>
                <li>Hybrid event on-ground integration</li>
                <li>Conference programming</li>
                <li>Digital marketing</li>
                <li>Customer/attendee support</li>
                <li>Post-event Surveys/Reports</li>
                <li>PR and global positioning</li>
              </ul> 
             
                @else
                   <p>360° end to end event delivery capabilities.  Working closely with our client's key stakeholders, we manage, execute and report on their key objectives. Scope of work includes:</p>
              <ul>
                <li>Project Management</li>
                <li>Virtual or non-virtual event operations</li>
                <li>Hybrid event on-ground integration</li>
                <li>Conference programming</li>
                <li>Digital marketing</li>
                <li>Customer/attendee support</li>
                <li>Post-event Surveys/Reports</li>
                <li>PR and global positioning</li>
              </ul> 
               @endif
                      </p>
                      </div>
                      
                                       
                      
                     
                    </div>
            
          
          </div>
          <hr>
          <div class="col-lg-12" class="sponsor_slide" id="sponsor_slide_mover"  style="padding: 2px;background: #fff;text-align: center;color: #fff;font-weight: bold; ">
             <div class="row">
                        <div class="col-md-4">
                       <center> <img src="{{asset('images/partenaire/monarque.png')}}" style="height: 200px;width: 300px;"></center>
                      </div>
                       <div class="col-md-8">
                      <p>
                        @if(langue()=='En')
              <p>Monarch is a communication agency based in Conakry, Guinea.  Since 2015, the agency offers a 360° communication approach to make your brand grow wherever its audience evolves in African markets.</p>
              <p>
                Monarch Conakry assists you in promoting your products and services and enhancing your brand image.  Through our brands CREATIVE and NO LIMIT, the agency creates for you, the most relevant communication vectors that fit into your development strategies.
              </p>

             

               @elseif(langue()=='Fr')
                   
                 <p>Monarch est une agence de communication basée à Conakry en Guinée. Depuis 2015, l’agence propose une approche de communication 360° pour faire grandir votre marque partout où son public évolue sur les marchés africains.</p>
              <p>
                Monarch Conakry vous accompagne dans la promotion de vos produits et services et la valorisation de votre image de marque.  A travers nos marques CREATIVE et NO LIMIT, l’agence créée pour vous, les vecteurs de communication les plus pertinents qui s’inscrivent dans vos stratégies de développement.
              </p>
             
                @else
                   <p>Monarch est une agence de communication basée à Conakry en Guinée. Depuis 2015, l’agence propose une approche de communication 360° pour faire grandir votre marque partout où son public évolue sur les marchés africains.</p>
              <p>
                Monarch Conakry vous accompagne dans la promotion de vos produits et services et la valorisation de votre image de marque.  A travers nos marques CREATIVE et NO LIMIT, l’agence créée pour vous, les vecteurs de communication les plus pertinents qui s’inscrivent dans vos stratégies de développement.
              </p>
               @endif
                      </p>
                      </div>
                      
                                       
                      
                     
                    </div>
            
          
          </div>
          <hr>
          <div class="col-lg-12" class="sponsor_slide" id="sponsor_slide_mover"  style="padding: 2px;background: #fff;text-align: center;color: #fff;font-weight: bold; ">
             <div class="row">
                        <div class="col-md-4">
                       <center> <img src="{{asset('images/partenaire/djoma.png')}}" style="height: 200px;width: 300px;"></center>
                      </div>
                       <div class="col-md-8">
                      <p>
                        @if(langue()=='En')
              <p>DJOMA MEDIA is a Guinean radio and television broadcasting company, launched in December 2019. This young media, born from the meeting between a dream and a desire to participate in the development of Guinea and Africa in general, offers its services and benefits to prospects and customers who wish to communicate about their companies and projects.</p>
              <p>
                DJOMA MEDIA wants to be the media close to the people. A media that is close to them, that values them, respects them and gives them the opportunity to express their opinion. It is divided into two media entities, DJOMA TV and DJOMA FM.
              </p>

             

               @elseif(langue()=='Fr')
                   
                 <p>DJOMA MEDIA est une société de radiodiffusion et de télévision guinéenne, lancée en décembre 2019. Ce jeune média, né de la rencontre entre un rêve et une envie de participer au développement de la Guinée et de l’Afrique en général, propose ses services et prestations aux prospects et clients qui souhaitent communiquer sur leurs entreprises et projets.</p>
              <p>
                DJOMA MEDIA veut être le média proche du peuple. Un média qui se rapproche de lui, qui le valorise, le respecte et lui donne l’opportunité d’exprimer son opinion. Il se décline en deux entités médiatiques, DJOMA TV et DJOMA FM.
              </p>
             
                @else
                   <p>DJOMA MEDIA est une société de radiodiffusion et de télévision guinéenne, lancée en décembre 2019. Ce jeune média, né de la rencontre entre un rêve et une envie de participer au développement de la Guinée et de l’Afrique en général, propose ses services et prestations aux prospects et clients qui souhaitent communiquer sur leurs entreprises et projets.</p>
              <p>
                DJOMA MEDIA veut être le média proche du peuple. Un média qui se rapproche de lui, qui le valorise, le respecte et lui donne l’opportunité d’exprimer son opinion. Il se décline en deux entités médiatiques, DJOMA TV et DJOMA FM.
              </p>
               @endif
                      </p>
                      </div>
                      
                                       
                      
                     
                    </div>
            
          
          </div>
          <hr>
          <div class="col-lg-12" class="sponsor_slide" id="sponsor_slide_mover"  style="padding: 2px;background: #fff;text-align: center;color: #fff;font-weight: bold; ">
             <div class="row">
                        <div class="col-md-4">
                       <center> <img src="{{asset('images/partenaire/globetrans.png')}}" style="height: 100px;width: 300px;"></center>
                      </div>
                       <div class="col-md-8">
                      <p>
                        @if(langue()=='En')
              <p>Efficient and competitive in their areas of expertise GLOBETRANS S.A. provides logistics solutions at controllable costs, which allows you to focus entirely on your main activity. To better assist our customers in their needs, we  establish business partnerships with some of our privileged relationships. Our business is focused on the following sectors: logistics, transit, transport, drilling, national and international relocations </p>
             

             

               @elseif(langue()=='Fr')
                   
                 <p>Performantes et compétitives dans ses domaines d’expertises GLOBETRANS S.A. apporte les solutions logistiques, à des coûts contrôlables, qui vous permettent de vous consacrer entièrement à votre activité principale. Pour de meilleures disponibilités et attention aux préoccupations de nos clients, nous établissons des partenariats d’affaires avec quelques-unes de nos relations privilégiées. Nous évoluons dans les secteurs suivants : la logistique, le transit, le transport, forage, déménagement   national et international 
              </p>
             
                @else
                   <p>Performantes et compétitives dans ses domaines d’expertises GLOBETRANS S.A. apporte les solutions logistiques, à des coûts contrôlables, qui vous permettent de vous consacrer entièrement à votre activité principale. Pour de meilleures disponibilités et attention aux préoccupations de nos clients, nous établissons des partenariats d’affaires avec quelques-unes de nos relations privilégiées. Nous évoluons dans les secteurs suivants : la logistique, le transit, le transport, forage, déménagement   national et international 
              </p>
               @endif
                      </p>
                      </div>
                      
                                       
                      
                     
                    </div>
            
          
          </div> -->
          <!-- fin description -->
                    
          </div>

         
    </div>
   <!-- /about start -->
  
      
 
  <!-- /about end -->

   @stop