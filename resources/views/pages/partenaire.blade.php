@extends('templates/default',['title'=>'GUIF | INVESTISSEURS'])
        

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
    font-size: 30px;
    font-weight: bold;
}
#tabs .nav-tabs .nav-link {
    border: 1px solid transparent;
    border-top-left-radius: .25rem;
    border-top-right-radius: .25rem;
    
    font-size: 30px;
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
  <div class="" style="background-image:url(images/Guif2/triangle.png); background-size:contain; min-height:300px; width:100%;background-repeat: no-repeat;background-position-x:left;">
    <div class="slideInRight2 hidephone" style="right: 100px;width: 70%;position: absolute;padding-top: 20px;">
      <h2 style="color: #c1a23f;"><b>
          @if(langue()=='En')
               One-to-one meetings with project owners
               @elseif(langue()=='Fr')
                Rencontres individuelles avec les porteurs de projets
                @else
                Rencontres individuelles avec les porteurs de projets
               @endif

</b></h2>
 @if(langue()=='En')
              <p>
                 As an investor you will be able to preview all available projects open for investment. </p>
                 <p style="margin-top: 5px;"> Details of the project including timescale, investment required and proposed plans will be disclosed. 
              </p>
              <p style="margin-top: 5px;">
                You will be able to select your top 10-15 projects in preference order that you are interested in. </p>
                <p style="margin-top: 5px;">
                 Using our secure meeting platform you will be able to speak directly to the project owners and find out more details.  
              </p>

               @elseif(langue()=='Fr')
               <p >
                 En tant qu'investisseur, vous pourrez avoir accès aux différents projets soumissionner. 
               </p> 
               <p >
                 Les détails
du projet, y compris le calendrier, les investissements requis et les plans proposés seront
divulgués.
               </p>
               <p >
                 Vous pourrez sélectionner de 10 à 15 meilleurs projets selon
votre intérêt. 
               </p>
               <p >
                 En utilisant notre plateforme de réunion sécurisée, vous pourrez parler directement
aux porteurs de projet enfin  d'obtenir plus de détails.
               </p>
                @else
               <p>
                 En tant qu'investisseur, vous pourrez avoir accès aux différents projets soumissionner. Les détails
du projet, y compris le calendrier, les investissements requis et les plans proposés seront
divulgués.
               </p> 
               <p>
                 Vous pourrez sélectionner de 10 à 15 meilleurs projets selon
votre intérêt. En utilisant notre plateforme de réunion sécurisée, vous pourrez parler directement
aux porteurs de projet enfin  d'obtenir plus de détails.
               </p>
               @endif




    
    </div>

    <div class="slideInRight2 hidepc" style="right: 10px;background: #ffffff59;font-weight: bold;">
      <h1 style="color: #c1a23f;"><b>
          @if(langue()=='En')
               One-to-one meetings with project owners
               @elseif(langue()=='Fr')
                Rencontres individuelles avec les porteurs de projets
                @else
                Rencontres individuelles avec les porteurs de projets
               @endif

</b></h1>
 @if(langue()=='En')
               As an investor you will be able to preview all available projects open for investment.  Details of the project including timescale, investment required and proposed plans will be disclosed.  

You will be able to select your top 10-15 projects in preference order that you are interested in.  Using our secure meeting platform you will be able to speak directly to the project owners and find out more details.  

               @elseif(langue()=='Fr')
               En tant qu'investisseur, vous pourrez avoir accès aux différents projets soumissionner. Les détails
du projet, y compris le calendrier, les investissements requis et les plans proposés seront
divulgués. Vous pourrez sélectionner de 10 à 15 meilleurs projets selon
votre intérêt. En utilisant notre plateforme de réunion sécurisée, vous pourrez parler directement
aux porteurs de projet enfin  d'obtenir plus de détails.
                @else
              En tant qu'investisseur, vous pourrez avoir accès aux différents projets soumissionner. Les détails
du projet, y compris le calendrier, les investissements requis et les plans proposés seront
divulgués. Vous pourrez sélectionner de 10 à 15 meilleurs projets selon
votre intérêt. En utilisant notre plateforme de réunion sécurisée, vous pourrez parler directement
aux porteurs de projet enfin  d'obtenir plus de détails.
               @endif




    
    </div>
  </div>
  <!--/page_banner end--> 

   <section class="clients" class="bounce-in-top" style="background: #c1a23f;">
    <div class="container">
      <div class="row">
       
        <div class="col-md-12 slideInLeft2" style="padding: 10px;">
         <center> <h1 style="color: #fff;font-weight: bold;">
           @if(langue()=='En')
               Why invest in Guinea
               @elseif(langue()=='Fr')
                Pourquoi investir en Guinée
                @else
                Pourquoi investir en Guinée
               @endif
             </h1></center>
         
        </div>
      </div>
    </div>
  </section>
  <!-- /clients end --> 
  <section  style="background-image: url('images/Guif2/back.jpg');background-repeat: no-repeat;background-size: cover;" class="" id="video">
    
    
       <div class="container" style="padding: 10px;">
        <div class="row" style="background: #000000c9;">
          <div class="col-md-3" style="margin-bottom: 10px;">
          
             <p style="color: #c1a23f;font-weight: bold;font-size: 30px;">

              @if(langue()=='En')
               $10bn
               @elseif(langue()=='Fr')
               $10 milliards
                
               @endif
             </p> 
             <p style="color: #fff;">
              @if(langue()=='En')
               raised for mining projects since 2011
               @elseif(langue()=='Fr')
               investis dans les projets miniers depuis 2011
                @else
                investis dans les projets miniers depuis 2011
               @endif
               

             </p>

           </div>
            <div class="col-md-3" style="margin-bottom: 10px;">
             <p style="color: #c1a23f;font-weight: bold;font-size: 30px;">
             @if(langue()=='En')
               2nd
               @elseif(langue()=='Fr')
               2ème
                @else
                2ème
               @endif
             </p> 
             <p style="color: #fff;">
               @if(langue()=='En')
               World Bauxite exporter 
               @elseif(langue()=='Fr')
               exportateur mondial de bauxite
                @else
                exportateur mondial de bauxite 
               @endif


             </p>

           </div>
            <div class="col-md-3" style="margin-bottom: 10px;">
             <p style="color: #c1a23f;font-weight: bold;font-size: 30px;">
             @if(langue()=='En')
               $2.2bn 
               @elseif(langue()=='Fr')
               $2.2 milliards
                @else
                $2.2 milliards
               @endif
              </p> 
             <p style="color: #fff;">
               @if(langue()=='En')
               invested in the development of road infrastructure since 2011
               @elseif(langue()=='Fr')
               investis dans le développement des
infrastructures routières depuis 2011
                @else
                investis dans le développement des
infrastructures routières depuis 2011
               @endif


             </p>

           </div>
            <div class="col-md-3" style="margin-bottom: 10px;">
             <p style="color: #c1a23f;font-weight: bold;font-size: 30px;">
              @if(langue()=='En')
               213,835tons
               @elseif(langue()=='Fr')
               213 835 tonnes
                @else
                213 835 tonnes
               @endif
              </p> 
             <p style="color: #fff;">
              
              @if(langue()=='En')
               of subsidized fertiliser 
               @elseif(langue()=='Fr')
               d’engrais subventionnés depuis 2010 
                @else
                d’engrais subventionnés depuis 2010
               @endif
              </p>

           </div>

            <div class="col-md-3" style="margin-bottom: 10px;">
             <p style="color: #c1a23f;font-weight: bold;font-size: 30px;">
              @if(langue()=='En')
               13mil
               @elseif(langue()=='Fr')
               13 millions 
                @else
                13 millions 
               @endif
             </p> 
             <p style="color: #fff;">
              @if(langue()=='En')
               hectares of arable land
               @elseif(langue()=='Fr')
               d’hectares de terres arables
                @else
                d’hectares de terres arables
               @endif
              </p>

           </div>
            <div class="col-md-3" style="margin-bottom: 10px;">
             <p style="color: #c1a23f;font-weight: bold;font-size: 30px;">
             @if(langue()=='En')
               $2.1bn
               @elseif(langue()=='Fr')
               $2.1 milliards
                @else
                $2.1 milliards
               @endif
              </p> 
             <p style="color: #fff;">
              @if(langue()=='En')
               invested in the construction of     hydroelectric dams (Kaleta and Souapiti)
               @elseif(langue()=='Fr')
               investis dans la réalisation des barrages
hydroélectriques (Kaleta et Souapiti)
                @else
                investis dans la réalisation des barrages
hydroélectriques (Kaleta et Souapiti)
               @endif
              </p>

           </div>
           <div class="col-md-3" style="margin-bottom: 10px;">
             <p style="color: #c1a23f;font-weight: bold;font-size: 30px;">
              @if(langue()=='En')
               51,796
               @elseif(langue()=='Fr')
               51,796
                @else
                51,796
               @endif
             </p> 
             <p style="color: #fff;">
               @if(langue()=='En')
               Companies created since 2015
               @elseif(langue()=='Fr')
               entreprises créées depuis 2015
                @else
                entreprises créées depuis 2015
               @endif</p>

           </div>
            <div class="col-md-3" style="margin-bottom: 10px;">
             <p style="color: #c1a23f;font-weight: bold;font-size: 30px;">
             @if(langue()=='En')
               4,000km
               @elseif(langue()=='Fr')
               4,000km
                @else
                4,000km
               @endif
             </p> 
             <p style="color: #fff;">
               @if(langue()=='En')
               of submarine cable (ACE) deployed
               @elseif(langue()=='Fr')
               kilomètres de câble sous-marin (ACE)
déployés
                @else
                kilomètres de câble sous-marin (ACE)
déployés
               @endif
             </p>

           </div>
        </div>
         <div class="row" style="">
          
           

            <div class="col-md-6" style="margin: 0 auto;padding: 30px">
       <iframe class="bounce-in-top" width="100%" height="400" src="https://www.youtube.com/embed/LjBM1ebgjXQ?loop=1&playlist=LjBM1ebgjXQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>




        </div>
         </div>
       
       
      </div>
  </section>

  <section class="clients" class="bounce-in-top" style="background: #fff;">
    <div class="container">
      <div class="row">
       
        <div class="col-md-12" style="padding: 10px;">
         <center> <h1 style="color: #c1a23f;font-weight: bold;">
            @if(langue()=='En')
               Priority investment sectors 
               @elseif(langue()=='Fr')
                Secteurs d'investissement prioritaires
                @else
                Secteurs d'investissement prioritaires
               @endif

</h1></center>
         
        </div>
      </div>
       <div class="row" style="margin-top: 10px;">
        <div class="col-md-2" style="padding: 10px;">
         <center> <span style="font-size: 65px;color: #000;">
           <b>1</b>
         </span></center>
         
        </div>
        <div class="col-md-10" style="padding: 10px;">
        <p style="color: #c1a23f;font-weight: bold;font-size: 25px;">
          @if(langue()=='En')
               AGRICULTURE
               @elseif(langue()=='Fr')
                AGRICULTURE
                @else
                AGRICULTURE
               @endif
             </p>
       <p>
         @if(langue()=='En')
               Guinea has a huge agricultural potential with 13 million hectares of arable land, 364,000 hectares of irrigated land, 70,000 km² of pasture (27% of the total land). 75% of the cultivable area remains to be developed.
               @elseif(langue()=='Fr')
                La Guinée a un énorme potentiel agricole avec 13 millions d'hectares de terres arables, 364 000 hectares de terres irriguées, 70 000 km² de pâturages (27% du total des terres). 75% de la surface cultivable reste à développer.
                @else
                La Guinée a un énorme potentiel agricole avec 13 millions d'hectares de terres arables, 364 000 hectares de terres irriguées, 70 000 km² de pâturages (27% du total des terres). 75% de la surface cultivable reste à développer.
               @endif

         
       </p>

         
        </div>
        <div class="col-md-2" style="padding: 10px;">
         <center> <span style="font-size: 65px;color: #000;">
           <b>2</b>
         </span></center>
         
        </div>
        <div class="col-md-10" style="padding: 10px;">
        <p style="color: #c1a23f;font-weight: bold;font-size: 25px;">
         @if(langue()=='En')
               ENERGY
               @elseif(langue()=='Fr')
                ENERGIE
                @else
                ENERGIE
               @endif
             </p>
       <p>
        @if(langue()=='En')
               Recognized as "The Water Castle Of West Africa", Guinea has a dense river network of 6,250 km divided into 1,165 rivers. Its hydroelectric production potential of 6,100 MW makes Guinea the future regional energy hub.
               @elseif(langue()=='Fr')
                Reconnue comme "Le Château d'Eau de l'Afrique de l'Ouest", la Guinée possède un réseau fluvial dense de 6 250 km divisé en 1 165 rivières. Son potentiel de production hydroélectrique de 6 100 MW fait de la Guinée le futur hub énergétique régional.
                @else
                Reconnue comme "Le Château d'Eau de l'Afrique de l'Ouest", la Guinée possède un réseau fluvial dense de 6 250 km divisé en 1 165 rivières. Son potentiel de production hydroélectrique de 6 100 MW fait de la Guinée le futur hub énergétique régional.
               @endif

         

       </p>

         
        </div>
        <div class="col-md-2" style="padding: 10px;">
         <center> <span style="font-size: 65px;color: #000;">
           <b>3</b>
         </span></center>
         
        </div>
        <div class="col-md-10" style="padding: 10px;">
        <p style="color: #c1a23f;font-weight: bold;font-size: 25px;">
        INFRASTRUCTURE</p>
       <p>
          @if(langue()=='En')
               Since 2010, Guinea has embarked on vast infrastructure construction and renovation projects: housing construction, transformation of the road network, development of port and railway infrastructures, improvement of telecommunications infrastructures, etc.
               @elseif(langue()=='Fr')
                Depuis 2010, la Guinée s'est lancée dans de vastes projets de construction et de rénovation d'infrastructures: construction de logements, transformation du réseau routier, développement des infrastructures portuaires et ferroviaires, amélioration des infrastructures de télécommunications, etc.
                @else
                Depuis 2010, la Guinée s'est lancée dans de vastes projets de construction et de rénovation d'infrastructures: construction de logements, transformation du réseau routier, développement des infrastructures portuaires et ferroviaires, amélioration des infrastructures de télécommunications, etc.
               @endif

        
       </p>

         
        </div>
         <div class="col-md-2" style="padding: 10px;">
         <center> <span style="font-size: 65px;color: #000;">
           <b>4</b>
         </span></center>
         
        </div>
        <div class="col-md-10" style="padding: 10px;">
        <p style="color: #c1a23f;font-weight: bold;font-size: 25px;">
          @if(langue()=='En')
               MINES
               @elseif(langue()=='Fr')
                MINES
                @else
                MINES
               @endif
             </p>
       <p>
         @if(langue()=='En')
               A veritable geological scandal, Guinea has two thirds of the world's bauxite reserves (the largest and highest-grade deposits in the world), in addition to significant reserves of gold, diamonds, iron, oil, etc.
               @elseif(langue()=='Fr')
                Véritable scandale géologique, la Guinée possède les deux tiers des réserves mondiales de bauxite (les plus grands et les plus riches au monde), en plus d'importantes réserves d'or, de diamants, de fer, de pétrole, etc.
                @else
                Véritable scandale géologique, la Guinée possède les deux tiers des réserves mondiales de bauxite (les plus grands et les plus riches au monde), en plus d'importantes réserves d'or, de diamants, de fer, de pétrole, etc.
               @endif

        

       </p>

         
        </div>
        <div class="col-md-2" style="padding: 10px;">
         <center> <span style="font-size: 65px;color: #000;">
           <b>5</b>
         </span></center>
         
        </div>
        <div class="col-md-10" style="padding: 10px;">
        <p style="color: #c1a23f;font-weight: bold;font-size: 25px;">
        @if(langue()=='En')
               ICT
               @elseif(langue()=='Fr')
                TIC
                @else
                TIC
               @endif
             </p>
       <p>
        @if(langue()=='En')
                As part of modernisation reforms, the Guinean government wants to implement projects to digitise administrative services, improve connectivity through fibre optics, set up a national data centre and develop the digital economy.
               @elseif(langue()=='Fr')
                Dans le cadre des réformes de modernisation, le gouvernement guinéen souhaite mettre en œuvre des projets de numérisation des services administratifs, améliorer la connectivité grâce à la fibre optique, mettre en place un centre de données national et développer l'économie numérique.
                @else
                Dans le cadre des réformes de modernisation, le gouvernement guinéen souhaite mettre en œuvre des projets de numérisation des services administratifs, améliorer la connectivité grâce à la fibre optique, mettre en place un centre de données national et développer l'économie numérique.
               @endif
       


       </p>

         
        </div>
        <div class="col-md-2" style="padding: 10px;">
         <center> <span style="font-size: 65px;color: #000;">
           <b>6</b>
         </span></center>
         
        </div>
        <div class="col-md-10" style="padding: 10px;">
        <p style="color: #c1a23f;font-weight: bold;font-size: 25px;">
        @if(langue()=='En')
               OTHERS
               @elseif(langue()=='Fr')
                AUTRES
                @else
                AUTRES
               @endif
             </p>
       <p>
        @if(langue()=='En')
               Tourism, Health, Education
               @elseif(langue()=='Fr')
                Tourisme, Santé, Education
                @else
                Tourisme, Santé, Education
               @endif
       


       </p>

         
        </div>
      </div>
    </div>
  </section>

   @stop