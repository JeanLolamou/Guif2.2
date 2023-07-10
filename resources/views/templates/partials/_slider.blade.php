<!-- /carousel start -->
<style type="text/css">
  .apipanimate {

  width: 50%;

  height: 50%;

  animation: mymove 20s ease-in-out infinite;

  z-index: -1;

}



@keyframes mymove {

0% {clip-path: circle(25% at 40% 20%);}

25%{ clip-path: circle(25% at 10% 10%);}

50%{clip-path: circle(25% at 80% 20%); }

75%{ clip-path: circle(25% at 90% 80%)}

to{ clip-path: circle(25% at 40% 20%)

}

}
</style>

 

  <div id="home">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active fadeIn2" style="background-image: url(images/Guif2/cover1.jpg); background-repeat: no-repeat;background-position: left; height:570px; width:100%;background-color: #ffffffba;background-size:cover;">
          <div class="carousel-caption ">
            <div class="container">
              <div style="background: #00000050;position: absolute;left: -180px;width: 750px;padding: 10px;top: 150px;" class="text_slide hidephone" id="text_slider">
<h1 style="color: #c1a23f;font-weight: bold;">GUINEA INVESTMENT FORUM</h1>
 @if(langue()=='En')
       
                <h3 style="color: #fff;font-weight: bold;text-align: left;margin-left: 30px;">Edition 2-Expo Dubai 2020</h3>
               <h3 style="color: #fff;font-weight: bold;text-align: left;margin-left: 30px;">February 12-14, 2022</h3>
               <h3 style="color: #fff;font-weight: bold;text-align: left;margin-left: 30px;">Format Hybrid</h3>
                
               @elseif(langue()=='Fr')
               <h3 style="color: #fff;font-weight: bold;text-align: left;margin-left: 30px;">Edition 2-Expo Dubaï 2020</h3>
               <h3 style="color: #fff;font-weight: bold;text-align: left;margin-left: 30px;">12-14 Février 2022</h3>
               <h3 style="color: #fff;font-weight: bold;text-align: left;margin-left: 30px;">Format Hybride</h3>
                
               @else
                 <h3 style="color: #fff;font-weight: bold;text-align: left;margin-left: 30px;">Edition 2-Expo Dubaï 2020</h3>
               <h3 style="color: #fff;font-weight: bold;text-align: left;margin-left: 30px;">12-14 Février 2022</h3>
               <h3 style="color: #fff;font-weight: bold;text-align: left;margin-left: 30px;">Format Hybride</h3>
               @endif



                <br>
  <div class="row">
              <div class="col-md-5" style="">
            <a href="#" class="btn btn-default" style="border-radius: 20px;
    color: #fff;background: #193c7d;">
     @if(langue()=='En')
                Become a GUIF 2022 Partner
                
               @elseif(langue()=='Fr')
                 Devenir partenaire du GUIF 2022
               @else
               Devenir partenaire du GUIF 2022
               @endif

  </a>
          </div>
          <div class="col-md-5" style="">
            <a target="_blank" href="https://bsplan.guineainvestmentforum.com/Inscription-sur-la-plateforme" class="btn btn-default" style="border-radius: 20px;
    background: #c2a23f;color: #fff;">
     @if(langue()=='En')
                Participate in GUIF 2022
                
               @elseif(langue()=='Fr')
                 Participer au GUIF 2022
               @else
               Participer au GUIF 2022
               @endif
     </a>
          </div>
         
           </div>
               
              </div>

               <div style="background: #00000050;padding: 10px;top: 150px;" class=" hidepc" id="">
<h1 style="color: #c1a23f;font-weight: bold;">GUINEA INVESTMENT FORUM</h1>
<p style="color: #fff;"> Edition 2-Expo Dubai 2020</p>
<a target="_blank" href="https://bsplan.guineainvestmentforum.com/" class="btn submit2" type="submit">
           @if(langue()=='En')
                Submit your project
                
               @elseif(langue()=='Fr')
                 Soumettre votre projet
               @else
                Soumettre votre projet
               @endif
               </a>


                
               
              </div>
                  
                </div>
              
            </div>
          </div>
        </div>

         <div class="carousel-item" style="background-image: url(images/slider/slider1.jpg); background-size:cover; height:570px; width:100%;">
          <div class="carousel-caption d-none d-md-block">
            <div class="container">
              <div class="row">
                <div class="col-lg-12" style="margin-top: 25%;margin-left: 15%;">
                 
                  <div class="slider_btn"> <a href="contact.html" class="get_started" >Inscription</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item" style="background-image: url(images/slider/slider2.jpg); background-size:cover; height:570px; width:100%;">
          <div class="carousel-caption d-none d-md-block">
            <div class="container">
              <div class="row">
                <div class="col-lg-12" style="margin-top: 25%;margin-left: 15%;">
                 
                  <div class="slider_btn"> <a href="contact.html" class="get_started" >Inscription</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
         
        
     
       
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"> <i class="fa fa-angle-left" aria-hidden="true"></i> <span class="sr-only">Previous</span> </a><a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"> <i class="fa fa-angle-right" aria-hidden="true"></i> <span class="sr-only">Next</span> </a> </div>
  </div>
  <!-- /carousel end --> 