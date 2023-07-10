@extends('templates/default',['title'=>'GUIF | DEVENIR-PARTENAIRE'])
        

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
  </style>
   <div class="carousel-item active" style="background-image:url(images/Guif2/triangle.png); background-size:contain; min-height:350px; width:100%;background-repeat: no-repeat;background-position-x:left;">
    <div class="slideInRight2" style="right: 10px;width: 60%;position: absolute;padding-top: 20px;">
      <h1 style="color: #c1a23f;"><b>
          @if(langue()=='En')
               Sponsorship Opportunities
               @elseif(langue()=='Fr')
                OPPORTUNITÉS DE SPONSORING
                @else
                OPPORTUNITÉS DE SPONSORING
               @endif


</b></h1>
<p class="hidephone" style="color: #c1a23f;">
 @if(langue()=='En')
              By becoming a sponsor of
Guinea Investment Forum (GUIF) you will
benefit from: 

               @elseif(langue()=='Fr')
             En devenant sponsor du "Guinea Investment Forum" (GUIF), vous bénéficierez de:
                @else
             En devenant sponsor du "Guinea Investment Forum" (GUIF), vous bénéficierez de:
               @endif

               </p>

                @if(langue()=='En')
                   <ul class="hidephone">
                <li>Expanding your portfolio through
                prestigious clients: domestic and foreign
                investors</li>
                <li>Being a key player in investment in the
                 Republic of Guinea</li>
                <li>Enjoy international visibility</li>
                <li>Promote your products and services at ahigh-end event</li>
                <li>Contribute to Guinea's socio-economic development through a privileged partnership with the Private Investment Promotion Agency</li>
               </ul>
               @elseif(langue()=='Fr')
              <ul class="hidephone">
                <li>Accroitre votre portefeuille à travers des clients prestiges : investisseurs nationaux et étrangers</li>
                <li>Être un acteur clé de l’investissement en République de Guinée</li>
                <li>Bénéficier d’une visibilité internationale</li>
                <li>Faire la promotion de ses produits et services lors d’un évènement de haut standing</li>
                <li>Contribuer au développent socio-économique de la Guinée à travers un partenariat privilégié avec l’Agence de Promotion des Investissements Privés </li>
               </ul>
               <br><br>
                @else
              <ul class="hidephone">
                <li>Accroitre votre portefeuille à travers des clients prestiges : investisseurs nationaux et étrangers</li>
                <li>Être un acteur clé de l’investissement en République de Guinée</li>
                <li>Bénéficier d’une visibilité internationale</li>
                <li>Faire la promotion de ses produits et services lors d’un évènement de haut standing</li>
                <li>Contribuer au développent socio-économique de la Guinée à travers un partenariat privilégié avec l’Agence de Promotion des Investissements Privés </li>
               </ul><br><br>
               @endif

              




    
    </div>
  </div>
  <!--/page_banner end--> 
 
 <div class="row" style="width: 100%;margin: 0px;">
         
          
           
           
           <div class="col-lg-12" id="sponsor" style="padding: 0px;background: #000;padding: 0px; ">
            
              <p style="margin-left: 15px;font-size: 22px;color: #d5ab1c;font-weight: bold;">
              @if(langue()=='En')
               SPONSORSHIP PACKAGES
               @elseif(langue()=='Fr')
                OFFRES DE SPONSORING
                @else
                OFFRES DE SPONSORING
               @endif
             </p>
             <br>
            <div class="row">
              <div class="col-md-6">
                 @if(langue()=='En')
                  <p style="margin-left: 15px;color: #d5ab1c;text-align: center;">PROMOTION</p>
                <ul style="color: #fff;">
                  <li>Dedicated Email to database</li>
                  <li>Advert in official event brochure</li>
                  <li>Announcement of your company as a sponsor</li>
                  <li>Mention in press releases</li>
                  <li>Corporate video played during event</li>
                  <li>Communication materials in delegate bags</li>
                </ul>
               @elseif(langue()=='Fr')
                <p style="margin-left: 15px;color: #d5ab1c;text-align: center;">PROMOTION</p>
                <ul style="color: #fff;">
                  <li>Email dédié à la base de données</li>
                  <li>Annonce dans la brochure officielle de l'événement</li>
                  <li>Annonce de votre entreprise en tant que sponsor</li>
                  <li>Mention dans les communiqués de presse</li>
                  <li>Vidéo d'entreprise diffusée pendant l'événement</li>
                  <li>Matériels de communication dans les sacs des
délégués</li>
                  
                </ul>
                @else
                    <p style="margin-left: 15px;color: #d5ab1c;text-align: center;">PROMOTION</p>
                <ul style="color: #fff;">
                  <li>Email dédié à la base de données</li>
                  <li>Annonce dans la brochure officielle de l'événement</li>
                  <li>Annonce de votre entreprise en tant que sponsor</li>
                  <li>Mention dans les communiqués de presse</li>
                  <li>Vidéo d'entreprise diffusée pendant l'événement</li>
                  <li>Matériels de communication dans les sacs des
délégués</li>
                  
                </ul>
               @endif
                
              </div>
                <div class="col-md-2" style="border-left: 2px solid white;">
                  @if(langue()=='En')
                <p style="margin-left: 15px;color: #d5ab1c;text-align: center;">ELITE</p>
                <ul style="color: #fff;list-style: none;">
                  <li><i class="fa fa-check"></i></li>
                  <li>Double Page</li>
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                  <li>At the start</li>
                  <li><i class="fa fa-check"></i></li>
                </ul>
               @elseif(langue()=='Fr')
                 <p style="margin-left: 15px;color: #d5ab1c;text-align: center;">ELITE</p>
                 <ul style="color: #fff;list-style: none;">
                  <li><i class="fa fa-check"></i></li>
                  <li>Double Page</li>
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                  <li>A l’ouverture</li>
                  <li><i class="fa fa-check"></i></li>
                </ul>
                @else
                <p style="margin-left: 15px;color: #d5ab1c;text-align: center;">ELITE</p>
                 <ul style="color: #fff;list-style: none;">
                  <li><i class="fa fa-check"></i></li>
                  <li>Double Page</li>
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                  <li>A l’ouverture</li>
                  <li><i class="fa fa-check"></i></li>
                </ul>
               @endif
               
              </div>
               <div class="col-md-2" style="border-left: 2px solid white;">
                @if(langue()=='En')
               <p style="margin-left: 15px;color: #d5ab1c;text-align: center;">PLATINUM</p>
                <ul style="color: #fff;list-style: none;">
                  <li><i class="fa fa-check"></i></li>
                  <li>One Page</li>
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                  <li>In sessions</li>
                </ul>
               @elseif(langue()=='Fr')
                <p style="margin-left: 15px;color: #d5ab1c;text-align: center;">PLATINUM</p>
                <ul style="color: #fff;list-style: none;">
                  <li><i class="fa fa-check"></i></li>
                  <li>Une Page</li>
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                  <li>En sessions</li>
                </ul>
                @else
               <p style="margin-left: 15px;color: #d5ab1c;text-align: center;">PLATINUM</p>
                <ul style="color: #fff;list-style: none;">
                  <li><i class="fa fa-check"></i></li>
                  <li>Une Page</li>
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                  <li>En sessions</li>
                </ul>
               @endif
                
              </div>
                <div class="col-md-2" style="border-left: 2px solid white;">
                  @if(langue()=='En')
               <p style="margin-left: 15px;color: #d5ab1c;text-align: center;">GOLD</p>
                <ul style="color: #fff;list-style: none;">
                  <li>-</li>
                  <li>1⁄2 Page</li>
                  <li><i class="fa fa-check"></i></li>
                  <li>-</li>
                  <li>-</li>
                  <li>-</li>
                </ul>
               @elseif(langue()=='Fr')
                <p style="margin-left: 15px;color: #d5ab1c;text-align: center;">GOLD</p>
                <ul style="color: #fff;list-style: none;">
                 <li>-</li>
                  <li>1⁄2 Page</li>
                  <li><i class="fa fa-check"></i></li>
                  <li>-</li>
                  <li>-</li>
                  <li>-</li>
                </ul>
                @else
               <p style="margin-left: 15px;color: #d5ab1c;text-align: center;">GOLD</p>
                <ul style="color: #fff;list-style: none;">
                  <li>-</li>
                  <li>1⁄2 Page</li>
                  <li><i class="fa fa-check"></i></li>
                  <li>-</li>
                  <li>-</li>
                  <li>-</li>
                </ul>
               @endif
                
              </div>
            </div>
          
          </div>

          <div class="col-lg-12" id="video" style="padding: 0px;background: #000;padding: 30px; ">
             
            
            <div class="row">
              <div class="col-md-6">
                @if(langue()=='En')
                <p style="margin-left: 15px;color: #d5ab1c;text-align: center;">LOGO PRESENCE</p>
                <ul style="color: #fff;">
                  <li>Official poster of GUIF 2022</li>
                  <li>Newsletter</li>
                  <li>On the GUIF 2022 stage</li>
                  <li>Promotion on event website</li>
                  <li>Logo included in promotional videos of GUIF 2022</li>
                  <li>Social Media publications</li>
                </ul>
               @elseif(langue()=='Fr')
                 <p style="margin-left: 15px;color: #d5ab1c;text-align: center;">PRESENCE LOGO</p>
                <ul style="color: #fff;">
                  <li>Affiche officielle de GUIF 2022</li>
                  <li>Newsletter</li>
                  <li>Sur la scène du GUIF 2022</li>
                  <li>Promotion sur le site web de l'événement</li>
                  <li>Logo inclus dans les vidéos promotionnelles de GUIF
2022</li>
                  <li>Publications sur les réseaux sociaux</li>
                </ul>
                @else
                 <p style="margin-left: 15px;color: #d5ab1c;text-align: center;">PRESENCE LOGO</p>
                <ul style="color: #fff;">
                  <li>Affiche officielle de GUIF 2022</li>
                  <li>Newsletter</li>
                  <li>Sur la scène du GUIF 2022</li>
                  <li>Promotion sur le site web de l'événement</li>
                  <li>Logo inclus dans les vidéos promotionnelles de GUIF
2022</li>
                  <li>Publications sur les réseaux sociaux</li>
                </ul>
               @endif
               
              </div>
                <div class="col-md-2" style="border-left: 2px solid white;">
                  @if(langue()=='En')
                <p style="margin-left: 15px;color: #d5ab1c;text-align: center;">ELITE</p>
                 <ul style="color: #fff;list-style: none;">
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                </ul>
               @elseif(langue()=='Fr')
                 <p style="margin-left: 15px;color: #d5ab1c;text-align: center;">ELITE</p>
                 <ul style="color: #fff;list-style: none;">
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                </ul>
                @else
                 <p style="margin-left: 15px;color: #d5ab1c;text-align: center;">ELITE</p>
                 <ul style="color: #fff;list-style: none;">
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                </ul>
               @endif
               
              </div>
               <div class="col-md-2" style="border-left: 2px solid white;">
                @if(langue()=='En')
                <p style="margin-left: 15px;color: #d5ab1c;text-align: center;">PLATINUM</p>
                <ul style="color: #fff;list-style: none;">
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                  <li>-</li>
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                </ul>
               @elseif(langue()=='Fr')
                 <p style="margin-left: 15px;color: #d5ab1c;text-align: center;">PLATINUM</p>
                <ul style="color: #fff;list-style: none;">
                 <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                  <li>-</li>
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                </ul>
                @else
                <p style="margin-left: 15px;color: #d5ab1c;text-align: center;">PLATINUM</p>
                <ul style="color: #fff;list-style: none;">
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                  <li>-</li>
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                </ul>
               @endif
               
              </div>
                <div class="col-md-2" style="border-left: 2px solid white;">
                  @if(langue()=='En')
                <p style="margin-left: 15px;color: #d5ab1c;text-align: center;">GOLD</p>
               <ul style="color: #fff;list-style: none;">
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                  <li>-</li>
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                </ul>
               @elseif(langue()=='Fr')
                 <p style="margin-left: 15px;color: #d5ab1c;text-align: center;">GOLD</p>
               <ul style="color: #fff;list-style: none;">
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                  <li>-</li>
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                </ul>
                @else
                <p style="margin-left: 15px;color: #d5ab1c;text-align: center;">GOLD</p>
               <ul style="color: #fff;list-style: none;">
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                  <li>-</li>
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                </ul>
               @endif
               
              </div>
            </div>
          
          </div>


           <div class="col-lg-12" id="video" style="padding: 0px;background: #000;padding: 30px; ">
             
            
            <div class="row">
              <div class="col-md-6">
                @if(langue()=='En')
                <p style="margin-left: 15px;color: #d5ab1c;text-align: center;">PUBLIC INTERVENTION</p>
                <ul style="color: #fff;">
                  <li>Recorded interview on a topic related to your company</li>
                  <li>Intervention of the GUIF 2022 link investors video</li>
                </ul>
               @elseif(langue()=='Fr')
                  <p style="margin-left: 15px;color: #d5ab1c;text-align: center;"> INTERVENTION</p>
                <ul style="color: #fff;">
                  <li>Recorded interview on a topic related to your company</li>
                  <li>Intervention of the GUIF 2022 link investors video</li>
                </ul>
                @else
                <p style="margin-left: 15px;color: #d5ab1c;text-align: center;"> INTERVENTION</p>
                <ul style="color: #fff;">
                  <li>Recorded interview on a topic related to your company</li>
                  <li>Intervention of the GUIF 2022 link investors video</li>
                </ul>
               @endif
               
              </div>
                <div class="col-md-2" style="border-left: 2px solid white;">
                  @if(langue()=='En')
                <p style="margin-left: 15px;color: #d5ab1c;text-align: center;">ELITE</p>
                 <ul style="color: #fff;list-style: none;">
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                </ul>
               @elseif(langue()=='Fr')
                 <p style="margin-left: 15px;color: #d5ab1c;text-align: center;">ELITE</p>
                 <ul style="color: #fff;list-style: none;">
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                </ul>
                @else
                 <p style="margin-left: 15px;color: #d5ab1c;text-align: center;">ELITE</p>
                 <ul style="color: #fff;list-style: none;">
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                </ul>
               @endif
               
              </div>
               <div class="col-md-2" style="border-left: 2px solid white;">
                @if(langue()=='En')
                <p style="margin-left: 15px;color: #d5ab1c;text-align: center;">PLATINUM</p>
                <ul style="color: #fff;list-style: none;">
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                </ul>
               @elseif(langue()=='Fr')
                 <p style="margin-left: 15px;color: #d5ab1c;text-align: center;">PLATINUM</p>
                <ul style="color: #fff;list-style: none;">
                 <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                </ul>
                @else
                <p style="margin-left: 15px;color: #d5ab1c;text-align: center;">PLATINUM</p>
                <ul style="color: #fff;list-style: none;">
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                </ul>
               @endif
               
              </div>
                <div class="col-md-2" style="border-left: 2px solid white;">
                  @if(langue()=='En')
                <p style="margin-left: 15px;color: #d5ab1c;text-align: center;">GOLD</p>
               <ul style="color: #fff;list-style: none;">
                  <li>-</li>
                  <li><i class="fa fa-check"></i></li>
                </ul>
               @elseif(langue()=='Fr')
                 <p style="margin-left: 15px;color: #d5ab1c;text-align: center;">GOLD</p>
               <ul style="color: #fff;list-style: none;">
                  <li>-</li>
                  <li><i class="fa fa-check"></i></li>
                </ul>
                @else
                <p style="margin-left: 15px;color: #d5ab1c;text-align: center;">GOLD</p>
               <ul style="color: #fff;list-style: none;">
                  <li>-</li>
                  <li><i class="fa fa-check"></i></li>
                </ul>
               @endif
               
              </div>
            </div>
          
          </div>


           <div class="col-lg-12" id="video" style="padding: 0px;background: #000;padding: 30px; ">
             
            
            <div class="row">
              <div class="col-md-6">
                @if(langue()=='En')
                <p style="margin-left: 15px;color: #d5ab1c;text-align: center;">EXHIBITION SPACE</p>
                <ul style="color: #fff;">
                  <li>Branded booth at event in Dubaï</li>
                  <li>Passes for your team to attend the Guinea Investment
Forum</li>
                </ul>
               @elseif(langue()=='Fr')
                  <p style="margin-left: 15px;color: #d5ab1c;text-align: center;"> ESPACE D’EXPOSITION</p>
                <ul style="color: #fff;">
                  <li>Stand d’exposition à l'événement à Dubaï</li>
                  <li>Passes pour votre équipe pour assister au Forum
d'investissement en Guinée</li>
                </ul>
                @else
                <p style="margin-left: 15px;color: #d5ab1c;text-align: center;"> ESPACE D’EXPOSITION</p>
                <ul style="color: #fff;">
                  <li>Stand d’exposition à l'événement à Dubaï</li>
                  <li>Passes pour votre équipe pour assister au Forum
d'investissement en Guinée</li>
                </ul>
               @endif
               
              </div>
                <div class="col-md-2" style="border-left: 2px solid white;">
                  @if(langue()=='En')
                <p style="margin-left: 15px;color: #d5ab1c;text-align: center;">ELITE</p>
                 <ul style="color: #fff;list-style: none;">
                  <li>3x3</li>
                  <li>10</li>
                </ul>
               @elseif(langue()=='Fr')
                 <p style="margin-left: 15px;color: #d5ab1c;text-align: center;">ELITE</p>
                 <ul style="color: #fff;list-style: none;">
                  <li>3x3</li>
                  <li>10</li>
                </ul>
                @else
                 <p style="margin-left: 15px;color: #d5ab1c;text-align: center;">ELITE</p>
                 <ul style="color: #fff;list-style: none;">
                  <li>3x3</li>
                  <li>10</li>
                </ul>
               @endif
               
              </div>
               <div class="col-md-2" style="border-left: 2px solid white;">
                @if(langue()=='En')
                <p style="margin-left: 15px;color: #d5ab1c;text-align: center;">PLATINUM</p>
                <ul style="color: #fff;list-style: none;">
                  <li>3x2</li>
                  <li>6</li>
                </ul>
               @elseif(langue()=='Fr')
                 <p style="margin-left: 15px;color: #d5ab1c;text-align: center;">PLATINUM</p>
                <ul style="color: #fff;list-style: none;">
                  <li>3x2</li>
                  <li>6</li>
                </ul>
                @else
                <p style="margin-left: 15px;color: #d5ab1c;text-align: center;">PLATINUM</p>
                <ul style="color: #fff;list-style: none;">
                   <li>3x2</li>
                  <li>6</li>
                </ul>
               @endif
               
              </div>
                <div class="col-md-2" style="border-left: 2px solid white;">
                  @if(langue()=='En')
                <p style="margin-left: 15px;color: #d5ab1c;text-align: center;">GOLD</p>
               <ul style="color: #fff;list-style: none;">
                   <li>2x2</li>
                  <li>4</li>
                </ul>
               @elseif(langue()=='Fr')
                 <p style="margin-left: 15px;color: #d5ab1c;text-align: center;">GOLD</p>
               <ul style="color: #fff;list-style: none;">
                 <li>2x2</li>
                  <li>4</li>
                </ul>
                @else
                <p style="margin-left: 15px;color: #d5ab1c;text-align: center;">GOLD</p>
               <ul style="color: #fff;list-style: none;">
                  <li>2x2</li>
                  <li>4</li>
                </ul>
               @endif
               
              </div>
            </div>
          
          </div>

           <div class="col-lg-12" id="video" style="padding: 0px;background: #000;padding: 30px; ">
             
            
            <div class="row">
              <div class="col-md-6">
                @if(langue()=='En')
                <p style="margin-left: 15px;color: #d5ab1c;text-align: center;">PROJECTS AND PRIVATE MEETINGS</p>
                <ul style="color: #fff;">
                  <li>Pre-arranged meetings with potential credited project
holders / investors</li>
                </ul>
               @elseif(langue()=='Fr')
                  <p style="margin-left: 15px;color: #d5ab1c;text-align: center;"> ACCES AUX PROJETS ET RENDEZ-VOUS</p>
                <ul style="color: #fff;">
                  <li>Réunions organisées à l'avance avec des détenteurs
potentiels de projets crédités / investisseurs</li>
                </ul>
                @else
                 <p style="margin-left: 15px;color: #d5ab1c;text-align: center;"> ACCES AUX PROJETS ET RENDEZ-VOUS</p>
                <ul style="color: #fff;">
                  <li>Réunions organisées à l'avance avec des détenteurs
potentiels de projets crédités / investisseurs</li>
                </ul>
               @endif
               
              </div>
                <div class="col-md-2" style="border-left: 2px solid white;">
                  @if(langue()=='En')
                <p style="margin-left: 15px;color: #d5ab1c;text-align: center;">ELITE</p>
                 <ul style="color: #fff;list-style: none;">
                  <li>5</li>
                </ul>
               @elseif(langue()=='Fr')
                 <p style="margin-left: 15px;color: #d5ab1c;text-align: center;">ELITE</p>
                 <ul style="color: #fff;list-style: none;">
                  <li>5</li>
                </ul>
                @else
                 <p style="margin-left: 15px;color: #d5ab1c;text-align: center;">ELITE</p>
                 <ul style="color: #fff;list-style: none;">
                  <li>5</li>
                </ul>
               @endif
               
              </div>
               <div class="col-md-2" style="border-left: 2px solid white;">
                @if(langue()=='En')
                <p style="margin-left: 15px;color: #d5ab1c;text-align: center;">PLATINUM</p>
                <ul style="color: #fff;list-style: none;">
                  <li>3</li>
                </ul>
               @elseif(langue()=='Fr')
                 <p style="margin-left: 15px;color: #d5ab1c;text-align: center;">PLATINUM</p>
                <ul style="color: #fff;list-style: none;">
                  <li>3</li>
                </ul>
                @else
                <p style="margin-left: 15px;color: #d5ab1c;text-align: center;">PLATINUM</p>
                <ul style="color: #fff;list-style: none;">
                   <li>3</li>
                </ul>
               @endif
               
              </div>
                <div class="col-md-2" style="border-left: 2px solid white;">
                  @if(langue()=='En')
                <p style="margin-left: 15px;color: #d5ab1c;text-align: center;">GOLD</p>
               <ul style="color: #fff;list-style: none;">
                   <li>1</li>
                </ul>
               @elseif(langue()=='Fr')
                 <p style="margin-left: 15px;color: #d5ab1c;text-align: center;">GOLD</p>
               <ul style="color: #fff;list-style: none;">
                 <li>1</li>
                </ul>
                @else
                <p style="margin-left: 15px;color: #d5ab1c;text-align: center;">GOLD</p>
               <ul style="color: #fff;list-style: none;">
                  <li>1</li>
                </ul>
               @endif
               
              </div>
            </div>
          
          </div>


           <div class="col-lg-12" id="video" style="padding: 0px;background: #000;padding: 30px; ">
             
            
            <div class="row">
              <div class="col-md-6">
                @if(langue()=='En')
                <p style="margin-left: 15px;color: #d5ab1c;text-align: center;">VIP ACCESS & BENEFITS</p>
                <ul style="color: #fff;">
                  <li>Participation in the event launching ceremony in Guinea
with senior officials</li>
                  <li>Participation in the Global Business Forum Africa on
October 13-14, 2021 (Dubai)</li>
                  <li>Participation of the leader in the Official Guinea Day 13
February 2022 (Dubai)</li>
                  <li>Access to the forum registration list</li>
                </ul>
               @elseif(langue()=='Fr')
                 <p style="margin-left: 15px;color: #d5ab1c;text-align: center;">ACCES & AVANTAGES VIP</p>
                <ul style="color: #fff;">
                  <li>Participation à la cérémonie de lancement en Guinée
avec des officiels gouvernementaux</li>
                  <li>Participation au Global Business Forum Africa les 13-
14 octobre 2021 (Dubaï)</li>
                  <li>Participation du dirigeant à la Journée officielle de la
Guinée le 13 février 2022 (Dubaï)</li>
                  <li>Accès à la liste des inscrits au forum</li>
                </ul>
                @else
                 <p style="margin-left: 15px;color: #d5ab1c;text-align: center;">ACCES & AVANTAGES VIP</p>
                <ul style="color: #fff;">
                  <li>Participation à la cérémonie de lancement en Guinée
avec des officiels gouvernementaux</li>
                  <li>Participation au Global Business Forum Africa les 13-
14 octobre 2021 (Dubaï)</li>
                  <li>Participation du dirigeant à la Journée officielle de la
Guinée le 13 février 2022 (Dubaï)</li>
                  <li>Accès à la liste des inscrits au forum</li>
                </ul>
               @endif
               
              </div>
                <div class="col-md-2" style="border-left: 2px solid white;">
                  @if(langue()=='En')
                <p style="margin-left: 15px;color: #d5ab1c;text-align: center;">ELITE</p>
                 <ul style="color: #fff;list-style: none;">
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                </ul>
               @elseif(langue()=='Fr')
                 <p style="margin-left: 15px;color: #d5ab1c;text-align: center;">ELITE</p>
                 <ul style="color: #fff;list-style: none;">
                   <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                </ul>
                @else
                 <p style="margin-left: 15px;color: #d5ab1c;text-align: center;">ELITE</p>
                 <ul style="color: #fff;list-style: none;">
                   <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                </ul>
               @endif
               
              </div>
               <div class="col-md-2" style="border-left: 2px solid white;">
                @if(langue()=='En')
                <p style="margin-left: 15px;color: #d5ab1c;text-align: center;">PLATINUM</p>
                <ul style="color: #fff;list-style: none;">
                   <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                </ul>
               @elseif(langue()=='Fr')
                 <p style="margin-left: 15px;color: #d5ab1c;text-align: center;">PLATINUM</p>
                <ul style="color: #fff;list-style: none;">
                 <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                </ul>
                @else
                <p style="margin-left: 15px;color: #d5ab1c;text-align: center;">PLATINUM</p>
                <ul style="color: #fff;list-style: none;">
                   <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                </ul>
               @endif
               
              </div>
                <div class="col-md-2" style="border-left: 2px solid white;">
                  @if(langue()=='En')
                <p style="margin-left: 15px;color: #d5ab1c;text-align: center;">GOLD</p>
               <ul style="color: #fff;list-style: none;">
                   <li>-</li>
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                </ul>
               @elseif(langue()=='Fr')
                 <p style="margin-left: 15px;color: #d5ab1c;text-align: center;">GOLD</p>
               <ul style="color: #fff;list-style: none;">
                  <li>-</li>
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                </ul>
                @else
                <p style="margin-left: 15px;color: #d5ab1c;text-align: center;">GOLD</p>
               <ul style="color: #fff;list-style: none;">
                  <li>-</li>
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                  <li><i class="fa fa-check"></i></li>
                </ul>
               @endif
               
              </div>
            </div>
          
          </div>


           <div class="col-lg-12" id="video" style="padding: 0px;background: #000;padding: 30px; ">
             
            
            <div class="row">
              <div class="col-md-6">
               
               
              </div>
                <div class="col-md-2" style="border-left: 2px solid white;">
                 <p style="color: white;font-weight: bold;font-size: 25px;">800,000,000 GNF</p>
               
              </div>
               <div class="col-md-2" style="border-left: 2px solid white;">
               <p style="color: white;font-weight: bold;font-size: 25px;">500,000,000 GNF</p>
               
              </div>
                <div class="col-md-2" style="border-left: 2px solid white;">
                 <p style="color: white;font-weight: bold;font-size: 25px;">300,000,000 GNF</p>
               
              </div>
            </div>
          
          </div>

          
    </div>
   <!-- /about start -->
  
      
 
  <!-- /about end -->

   @stop