@extends('templates/default',['title'=>'GUIF | EXCURSION'])
        

    @section('contenu')

    <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
<link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">

<script src="jquery.min.js"></script>
<script src="owlcarousel/owl.carousel.min.js"></script>

  <!--/page_bannner start-->
  <div class="carousel-item active slideInLeft" style="background-image:url(images/plage.png); background-size:cover; height:200px; width:100%;">
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

    <!-- /pricing start -->
  <section class="pricing" id="pricing" style="background: white;padding-top: 10px;padding-bottom: 30px">
    <div class="container">
      
        <h2>
        @if(langue()=='En')
               Tourism
               @elseif(langue()=='Fr')
                Tourisme balnéaire
                @else
                Tourisme balnéaire
               @endif
              </h2><br>
      <div class="row" style="margin-top: 2px;">
         <div class="col-md-5 slideInRight" style="">
        <!-- slider -->
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" style="background-image: url('images/Tayaki/5.jpg'); background-size:cover; height:250px; width:100%;">
          <div class="carousel-caption d-none d-md-block">
            <div class="container">
              <div class="row">
                <div class="col-lg-12" style="height: 250px;">
                 
                  
                </div>
              </div>
            </div>
          </div>
          </div>
       

          <div class="carousel-item" style="background-image: url('images/Tayaki/8.jpg'); background-size:cover; height:250px; width:100%;">
          <div class="carousel-caption d-none d-md-block">
            <div class="container">
              <div class="row">
                <div class="col-lg-12" style="height: 250px;">
                 
                  
                </div>
              </div>
            </div>
          </div>
        </div>

         <div class="carousel-item" style="background-image: url('images/Tayaki/19.jpg'); background-size:cover; height:250px; width:100%;">
          <div class="carousel-caption d-none d-md-block">
            <div class="container">
              <div class="row">
                <div class="col-lg-12" style="height: 250px;">
                 
                  
                </div>
              </div>
            </div>
          </div>
        </div>

         <div class="carousel-item" style="background-image: url('images/Tayaki/14.jpg'); background-size:cover; height:250px; width:100%;">
          <div class="carousel-caption d-none d-md-block">
            <div class="container">
              <div class="row">
                <div class="col-lg-12" style="height: 250px;">
                 
                  
                </div>
              </div>
            </div>
          </div>
        </div>

       <a  href="#carouselExampleIndicators" role="button" data-slide="prev" style=""> 
        <i class="fa fa-angle-left" aria-hidden="true" style="border: none;"></i> 
        <span class="sr-only">Previous</span>
       </a>
      <a href="#carouselExampleIndicators" role="button" data-slide="next"> <i class="fa fa-angle-right" aria-hidden="true" style="border: none;"></i> <span class="sr-only">Next</span>
       </a> 
         
        
        
      </div>
     

      </div>
      <!-- fin slider -->

         
        </div>

         <div class="col-md-7 slideInRight2" style="">
          <h3>
           @if(langue()=='En')
               TAIYAKI Beach
               @elseif(langue()=='Fr')
                Plage de TAIYAKI
                @else
                Plage de TAIYAKI
               @endif
             </h3>
         <p>
          @if(langue()=='En')
               Located about 4 km from Kobaya in the commune of Ratoma, the access to this beach is only by foot and it takes about 1h30 of walking in the middle of rice fields and marshes to reach the sand and the village of the same name. A great place for a day trip and to take a big breath of sea air at the gates of the capital.
               @elseif(langue()=='Fr')
               Située à environ 4 km de Kobaya dans la commune de Ratoma, l'accès à cette plage se fait uniquement à pied et il faut compter environ 1h30 de marche au milieu des rizières et des marais pour atteindre le sable et le village du même nom, idéal pour une excursion d'une journée et prendre un grand bol d'air marin aux portes de la capitale.
                @else
                Située à environ 4 km de Kobaya dans la commune de Ratoma, l'accès à cette plage se fait uniquement à pied et il faut compter environ 1h30 de marche au milieu des rizières et des marais pour atteindre le sable et le village du même nom, idéal pour une excursion d'une journée et prendre un grand bol d'air marin aux portes de la capitale.
               @endif

           
         </p><br> 
         <a href="https://docs.google.com/forms/d/e/1FAIpQLSeH00hrGbbecPiqaCQ8a0lQoUvwUvHlt4yUyMrqEsIh7n886Q/viewform" class="get_started" target="_blank">
         @if(langue()=='En')
               Join the excursion
               @elseif(langue()=='Fr')
                Participer à l'excursion
                @else
                Participer à l'excursion
               @endif
             </a>
         
        </div>

      

      
      </div>
        <hr>
      <div class="row" style="margin-top: 2px;">
         <div class="col-md-5 slideInRight" style="">

            <!-- slider -->
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" style="background-image: url('images/rome/b.jpg'); background-size:cover; height:250px; width:100%;">
          <div class="carousel-caption d-none d-md-block">
            <div class="container">
              <div class="row">
                <div class="col-lg-12" style="height: 250px;">
                 
                  
                </div>
              </div>
            </div>
          </div>
          </div>
       

          <div class="carousel-item" style="background-image: url('images/rome/2.jpg'); background-size:cover; height:250px; width:100%;">
          <div class="carousel-caption d-none d-md-block">
            <div class="container">
              <div class="row">
                <div class="col-lg-12" style="height: 250px;">
                 
                  
                </div>
              </div>
            </div>
          </div>
        </div>

         <div class="carousel-item" style="background-image: url('images/rome/64.jpg'); background-size:cover; height:250px; width:100%;">
          <div class="carousel-caption d-none d-md-block">
            <div class="container">
              <div class="row">
                <div class="col-lg-12" style="height: 250px;">
                 
                  
                </div>
              </div>
            </div>
          </div>
        </div>

         <div class="carousel-item" style="background-image: url('images/rome/3.jpg'); background-size:cover; height:250px; width:100%;">
          <div class="carousel-caption d-none d-md-block">
            <div class="container">
              <div class="row">
                <div class="col-lg-12" style="height: 250px;">
                 
                  
                </div>
              </div>
            </div>
          </div>
        </div>

       <a  href="#carouselExampleIndicators" role="button" data-slide="prev" style=""> 
        <i class="fa fa-angle-left" aria-hidden="true" style="border: none;"></i> 
        <span class="sr-only">Previous</span>
       </a>
      <a href="#carouselExampleIndicators" role="button" data-slide="next"> <i class="fa fa-angle-right" aria-hidden="true" style="border: none;"></i> <span class="sr-only">Next</span>
       </a> 
         
        
        
      </div>
     

      </div>
      <!-- fin slider -->
         
        </div>

         <div class="col-md-7 slideInRight2" style="">
          <h3>
           @if(langue()=='En')
               Roume Island
               @elseif(langue()=='Fr')
                L'île de Roume
                @else
                L'île de Roume
               @endif
             </h3>
         <p>
          @if(langue()=='En')
               One of the three main islands of the Loos Archipelago in Guinea. Of a rare beauty,   Roume Island has clean sands accompanied by a preserved nature. It is the ideal destination for those who love tropical nature and relax away from the stress of everyday life. You will enjoy various water sports while spending a memorable and an extraordinary moments.
               @elseif(langue()=='Fr')
               Elle est l'une des trois principales îles de l'archipel de Loos en Guinée. D'une rare beauté, elle possède du sable fin accompagné d'une nature préservée. C'est la destination idéale pour ceux qui aiment la nature tropicale et se détendent loin du stress de la vie quotidienne. Vous profiterez de divers sports nautiques tout en passant des moments mémorables et extraordinaires.
                @else
                Elle est l'une des trois principales îles de l'archipel de Loos en Guinée. D'une rare beauté, elle possède du sable fin accompagné d'une nature préservée. C'est la destination idéale pour ceux qui aiment la nature tropicale et se détendent loin du stress de la vie quotidienne. Vous profiterez de divers sports nautiques tout en passant des moments mémorables et extraordinaires.
               @endif

           
         </p><br> 
         <a href="https://docs.google.com/forms/d/e/1FAIpQLSeH00hrGbbecPiqaCQ8a0lQoUvwUvHlt4yUyMrqEsIh7n886Q/viewform" class="get_started" target="_blank">
         @if(langue()=='En')
               Join the excursion
               @elseif(langue()=='Fr')
                Participer à l'excursion
                @else
                Participer à l'excursion
               @endif
             </a>
         
        </div>

      

      
      </div>
    </div>
  </section>
  <!-- /pricing end --> 

  <script type="text/javascript">
    $(document).ready(function(){
  $(".owl-carousel").owlCarousel();
});
  </script>

   @stop