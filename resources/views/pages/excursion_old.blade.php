@extends('templates/default',['title'=>'GUIF | FORUM'])
        

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
        <div class="row" style="">
          <div class="col-lg-8" style="padding: 0px;">
              @if(langue()=='Fr')
               <p>Une expo des partenaires et des sponsors sera organisée dans le cadre du forum.</p><p>
L’expo GUIF sera une grande occasion pour montrer le savoir-faire et progrès économique, scientifique, écologique et culturel.</p><p>
Les exposants présenteront des services et produits de pointe dans les domaines de l’agriculture, de l’énergie, des infrastructures, des mines, des TIC ainsi que d’autres secteurs prometteurs en termes d’investissements et d’échanges commerciaux entre la Guinée et les pays étrangers.
</p>
               @elseif(langue()=='En')






                <p> An exhibition of partners and sponsors will be organized within the framework of the forum.</p><p>The GUIF Expo will be a great opportunity to show know-how and economic, scientific, ecological and cultural progress.</p>
                <p>The exhibitors will present cutting-edge services and products in the fields of agriculture, energy, infrastructure, mining, ICT as well as other promising sectors in terms of investments and trade between Guinea and foreign countries.
</p>
                @else
                <p>Une expo des partenaires et des sponsors sera organisée dans le cadre du forum.</p><p>
L’expo GUIF sera une grande occasion pour montrer le savoir-faire et progrès économique, scientifique, écologique et culturel.</p><p>
Les exposants présenteront des services et produits de pointe dans les domaines de l’agriculture, de l’énergie, des infrastructures, des mines, des TIC ainsi que d’autres secteurs prometteurs en termes d’investissements et d’échanges commerciaux entre la Guinée et les pays étrangers.
</p>
               @endif
              
          
          </div>
          <div class="col-lg-4">
               <img src="images/stand.jpg" style="width: 100%;height: 200px;border: 1px solid grey;margin: 0 auto;position: relative;">
          </div>
    </div>
    <br>
     <div class="row" style="">
          <!-- <div class="col-lg-5" style="">
           <a href="#" class="get_started reserve" style="top: 40%;position: absolute;height: 60px;text-align: center;font-size: 20px;">Réserver votre stand</a>
          
          </div> -->
          <div class="col-lg-4" style="">
           <img src="images/carte.png" style="width: 100%;height: 250px;">
           <br><br>
           <a href="#"><i class="fa fa-download"></i>
             @if(langue()=='En')
               Download the exhibition diagram
               @elseif(langue()=='Fr')
                Télécharger le schéma de l'exposition
                @else
                Télécharger le schéma de l'exposition
               @endif
             </a>
          
          </div>
        
    </div>

<br>
<!-- <br>
<h2>Exposants</h2><br>
     <div class="row" style="">
      
          <div class="col-lg-12" style="">
           <div class="row">
             <div class="col-md-2">
               <img src="images/gac.png" style="width: 100%;height: 100px;">
             </div>
             <div class="col-md-6" style="text-align: left;padding-top: 5%;">
               <h5>Guinea Alumina Corporation (GAC)</h5>
             </div>
           </div>
           <div class="col-md-12">
             <P>Guinea Alumina Corporation (GAC) produit et exporte de la bauxite de qualité métallurgique, le minerai dont provient l’aluminium. Nous exploitons une concession minière de 690 km2 située dans le nord-ouest de la République de Guinée, en Afrique de l’Ouest. Nos activités génèrent quelque 1 000 emplois directs et des retombées économiques d’environ 700 millions de dollars américains par an pour l’économie guinéenne. GAC est une filiale à part entière de Emirates Global Aluminium.</P>
           </div>
           
           
          
          </div>
           <div class="col-lg-12" style="">
           <div class="row">
             <div class="col-md-2">
               <img src="images/sonoco.png" style="width: 100%;height: 100px;">
             </div>
             <div class="col-md-6" style="text-align: left;padding-top: 5%;">
               <h5>SONOCO SA</h5>
             </div>
           </div>
           <div class="col-md-12">
             <P>SONOCO, groupe spécialisé dans les services de proximité pour le bien-être des populations, déploie ses activités sur l’ensemble de la Guinée, dans des secteurs aussi variés que l’industrie, la construction, l’immobilier, le transport, la logistique, le transit et la finance.</P>
           </div>
           
           
          
          </div>
          
    </div>

    <br>
     <div class="row" style="">
          <div class="col-lg-4" style="margin: 0 auto">
           <a href="#" class="get_started reserve" style="top: 40%;position: absolute;height: 60px;text-align: center;font-size: 20px;">Réserver votre stand</a>
          
          </div>
         
        
    </div>
<br> -->
      
  </div>
  </section>
  <!-- /about end -->

   @stop