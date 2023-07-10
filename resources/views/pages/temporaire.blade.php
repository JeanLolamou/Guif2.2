@extends('templates/default',['title'=>'GUIF | ACCUEIL'])
 <!-- moda covid19 -->
             <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
          
               <script type="text/javascript">
    $(window).on('load',function(){
         $("#abutton").click(); 
    });
</script>
<a id="abutton" class="btn btn-lg btn-primary" type="button" data-toggle="modal" data-target="#myModal1" data-backdrop="static" style="display: none;"><span class="glyphicon glyphicon-hand-right"></span>a</a>

<div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <a href="{{route('accueil')}} " type="button" class="btn btn-default" style="border-radius: 6px;position: absolute;
    top: 0px;right: 0px;"><i class="fa fa-close"></i></a>
        <div class="content-block palette-2-bg" style="margin: 0px;padding-top: 30px;background: white;">
              @if(langue()=='En')
                <img src="{{asset('images/Communique2.jpg')}} " style="width: 800px;"> 
               @elseif(langue()=='Fr')
                 <img src="{{asset('images/Communique.jpg')}} " style="width: 800px;">
               @else
                <img src="{{asset('images/Communique.jpg')}} " style="width: 800px;">
               @endif
                
                  
               

               
                  </div>
      </div>
      
    </div>
  </div>
          
          <!-- Fin  -->
         @section('slider')

         @include('templates/partials/_slider')

        @stop

    @section('contenu')

   <style type="text/css">
  
  .owl-nav{
    display: none;
  }
  .owl-dots{
    display: none;
  }
</style>

   

     <!-- /services start -->
  <section class="services" id="servicesa" style="background: #c1a23f;">
    <div class="container">
      <div class="row hidepc" style="">
          <div class="col-md-12" style="margin: 0 auto;">
             
            <div class="row" style="margin-top: 10px;">
             <div class="col-md-6" style="margin: 0 auto;">
               <div class="row"  id="" >
                 <div class="col-md-3 col-xl-3 col-sm-3" style="margin: 0 auto;">
               <ul style="list-style: none;text-align: center;">
                 <li><span style="font-size: 40px;font-weight: 700;" id="daysmobile"></span></li>
                 <li style="font-size: 20px;font-weight: 500;">
                  @if(langue()=='En')
                Days 
               @elseif(langue()=='Fr')
                 Jours
               @else
                Jours
               @endif
             </li>
               </ul>
             </div>
              <div class="col-md-3 col-xl-3 col-sm-3" style="margin: 0 auto;">
               <ul style="list-style: none;text-align: center;">
                 <li><span style="font-size: 40px;font-weight: 700;" id="hoursmobile"></span></li>
                 <li style="font-size: 20px;font-weight: 500;">
                  @if(langue()=='En')
                Hours 
               @elseif(langue()=='Fr')
                 Heures
               @else
                Heures
               @endif
             </li>
               </ul>
             </div>
               <div class="col-md-3 col-xl-3 col-sm-3" style="margin: 0 auto;">
               <ul style="list-style: none;text-align: center;">
               <li><span style="font-size: 40px;font-weight: 700;" id="minutemobile"></span></li>
                 <li style="font-size: 20px;font-weight: 500;">Minutes</li>
               </ul>
             </div>
              <div class="col-md-3 col-xl-3 col-sm-3" style="margin: 0 auto;">
               <ul style="list-style: none;text-align: center;">
                 <li><span style="font-size: 40px;font-weight: 700;" id="secondmobile"></span></li>
                 <li style="font-size: 20px;font-weight: 500;">Seconds</li>
               </ul>
             </div>
               </div>
             </div>
             
           </div>
          </div>
        </div>

        <script>
// Set the date we're counting down to
var countDownDate = new Date("Feb 24, 2021 10:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  // document.getElementById("demo").innerHTML = days + " jours " + hours + "h "
  // + minutes + "mn " + seconds + "s ";

   document.getElementById("daysmobile").innerHTML = days;

  document.getElementById("hoursmobile").innerHTML = hours;

  document.getElementById("minutemobile").innerHTML = minutes;

  document.getElementById("secondmobile").innerHTML = seconds;
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>


        <div class="row hidephone" style="">
          <div class="col-md-12" style="margin: 0 auto;">
             
            <div class="row" style="margin-top: 10px;">
             <div class="col-md-6" style="margin: 0 auto;">
               <div class="row decompte"  id="decompte" >
                 <div class="col-md-3 col-xl-3 col-sm-3" style="margin: 0 auto;">
               <ul style="list-style: none;text-align: center;">
                 <li>
                  <span style="font-size: 40px;font-weight: 700;" id="days"></span>
                </li>
                 <li style="font-size: 20px;font-weight: 500;">
                  @if(langue()=='En')
                Days 
               @elseif(langue()=='Fr')
                 Jours
               @else
                Jours
               @endif
             </li>
               </ul>
             </div>
              <div class="col-md-3 col-xl-3 col-sm-3" style="margin: 0 auto;">
               <ul style="list-style: none;text-align: center;">
                 <li><span style="font-size: 40px;font-weight: 700;" id="hours"></span></li>
                 <li style="font-size: 20px;font-weight: 500;">
                  @if(langue()=='En')
                Hours 
               @elseif(langue()=='Fr')
                 Heures
               @else
                Heures
               @endif
             </li>
               </ul>
             </div>
               <div class="col-md-3 col-xl-3 col-sm-3" style="margin: 0 auto;">
               <ul style="list-style: none;text-align: center;">
               <li><span style="font-size: 40px;font-weight: 700;" id="minute"></span></li>
                 <li style="font-size: 20px;font-weight: 500;">Minutes</li>
               </ul>
             </div>
              <div class="col-md-3 col-xl-3 col-sm-3" style="margin: 0 auto;">
               <ul style="list-style: none;text-align: center;">
                 <li><span style="font-size: 40px;font-weight: 700;" id="second"></span></li>
                 <li style="font-size: 20px;font-weight: 500;">Seconds</li>
               </ul>
             </div>
               </div>
             </div>
             
           </div>
          </div>
        </div>
      </div>
  </section>
  <!-- /services end --> 

  <script>
// Set the date we're counting down to
var countDownDate = new Date("Feb 24, 2021 10:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  // document.getElementById("demo").innerHTML = days + " jours " + hours + "h "
  // + minutes + "mn " + seconds + "s ";

   document.getElementById("days").innerHTML = days;

  document.getElementById("hours").innerHTML = hours;

  document.getElementById("minute").innerHTML = minutes;

  document.getElementById("second").innerHTML = seconds;
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>



<!-- /clients start -->


  <section class="clients" class="bounce-in-top">
    <div class="container">
      <div class="row">
       
        <div class="col-md-12" id="photoprac">
          <div class="owl-carousel owl-theme ss_carousel our_clients_slider" id="slider">
            <div class="item" style="">
              <div class="row" style="padding: 3.4%;">
                 <div class="col-md-4">
                  <img class="img-fluid" src="images/prac4.jpg" alt="" style="height: 200px;width: 204px;margin: 0 auto;border-radius: 50%;" class="rounded-circle">
                </div>
                <div class="col-md-8" style="">
                  <h2 style="color: #c1a23f;">
                   @if(langue()=='En')
                 Welcome from President Alpha Conde  
               @elseif(langue()=='Fr')
                 MOT DU PRESIDENT
               @else
                MOT DU PRESIDENT
               @endif
            </h2>

             @if(langue()=='En')
                  <p style="color: black;font-size: 15px;text-align: justify-all;">
                    Over the past few years, Guinea has experienced a growth  in its Business 
climate and opportunities for investments. On this occasion, I would like 
to extend an invitation for you to join the GUIF to find your next 
opportunity. </p>
 <p style="color: black;font-size: 15px;text-align: justify;"> 
I give you the reansurance of my Government in the security and 
profitability of your investments within the framework of a win-win 
partnership.
</p>
               @elseif(langue()=='Fr')
                  <p style="color: black;font-size: 15px;text-align: justify-all;">Mesdames et Messieurs, en vous invitant à venir investir dans mon pays dont le sol et le sous-sol sont très riches avec un environnement humain et social favorable, où l'hospitalité légendaire est reconnue, je voudrai vous donner la garantie de mon gouvernement quant à la sécurité et la profitabilité de vos investissements dans le cadre d'un partenariat gagnant-gagnant.</p>
                   
               @else
                <p style="color: black;font-size: 15px;text-align: justify-all;">Mesdames et Messieurs, en vous invitant à venir investir dans mon pays dont le sol et le sous-sol sont très riches avec un environnement humain et social favorable, où l'hospitalité légendaire est reconnue, je voudrai vous donner la garantie de mon gouvernement quant à la sécurité et la profitabilité de vos investissements dans le cadre d'un partenariat gagnant-gagnant.</p>
               @endif
             
                   
                </div>
               
               
              </div>
             
            </div>

          
            

           <!--   <div class="item" style="background: #f5f5f5;">
              <div class="row" style="padding: 3.4%;">
                <div class="col-md-8" style="">
                  <h2>MOT DU DG APIP-GUINEE</h2>
             
                    <p style="color: black;font-size: 15px;text-align: justify;">Mesdames et Messieurs, en vous invitant à venir investir dans mon pays dont le sol et le sous-sol sont très riches avec un environnement humain et social favorable, où l'hospitalité légendaire est reconnue, je voudrai vous donner la garantie de mon gouvernement quant à la sécurité et la profitabilité de vos investissements dans le cadre d'un partenariat gagnant-gagnant.</p>
                </div>
                <div class="col-md-4">
                  <img class="img-fluid" src="images/dg5.JPG" alt="" style="height: 180px;width: 180px;margin: 0 auto;border-radius: 50%;" class="rounded-circle">
                </div>
               
              </div>
             
            </div> -->

           <!--   <div class="item" style="background: #f5f5f5;">
              <div class="row" style="padding: 3.4%;">
                <div class="col-md-8" style="">
                  <h2>MOT DU REPRESENTANT DE LA BAD</h2>
             
                    <p style="color: black;font-size: 15px;text-align: justify;">Mesdames et Messieurs, en vous invitant à venir investir dans mon pays dont le sol et le sous-sol sont très riches avec un environnement humain et social favorable, où l'hospitalité légendaire est reconnue, je voudrai vous donner la garantie de mon gouvernement quant à la sécurité et la profitabilité de vos investissements dans le cadre d'un partenariat gagnant-gagnant.</p>
                </div>
                <div class="col-md-4">
                  <img class="img-fluid" src="images/pbad.jpg" alt="" style="height: 180px;width: 180px;margin: 0 auto;border-radius: 50%;" class="rounded-circle">
                </div>
               
              </div>
             
            </div> -->

              
            
           
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /clients end --> 

 <!--  <section class="pricing" id="pricing" style="background: #f6f6f6;padding-top: 10px;padding-bottom: 30px">
    <div class="container">
      
      <div class="row" >
         <div class="col-md-4" style="padding-top: 55px;">
              <center><h2>Institution à l'honneur</h2></center>
            </div>
            <div class="col-md-8">
              <img src="{{asset('images/partenaire/bad.png')}}" style="width: 80%;margin-top: 10px;">
            </div>
         
    </div>
  </section> -->
   <!-- /video -->
  <section  style="background-image: url('images/background.png');background-repeat: no-repeat;background-size: cover;" class="" id="video">
    
    
       <div class="container" style="padding: 10px;">
         <div class="row">
          <div class="col-md-8" style="margin: 0 auto;">

        <iframe class="bounce-in-top" width="100%" height="400" src="https://www.youtube.com/embed/4RGdDwiD3Pw?listType=playlist&list=PL4RGdDwiD3Pw&rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>



        </div>
       </div>
       
       
      </div>
  </section>
  <!-- /video --> 

    <section class="pricing" id="pricing" style="background: #c1a23f;padding-top: 10px;padding-bottom: 30px">
    <div class="container">
      
      <div class="row">
       
             
      <div class="col-md-4" style="">
                         
                         
     <img src="{{asset('images/doc.PNG')}}" style="height: 300px;width: 200px;">
                         
             
           
            </div>
             <div class="col-md-8" style="">
                          <p style="text-transform: uppercase;font-weight: bold;color: #000;margin-top:10%;font-size: 30px;text-align: left;">
                            <u>
                             @if(langue()=='En')
                DELEGATE GUIDE 
               @elseif(langue()=='Fr')
                 GUIDE DES DÉLÉGUÉS
               @else
                GUIDE DES DÉLÉGUÉS
               @endif
             </u>
                          </p>
                         

                           
                            <a target="_blank" href="{{asset('Doc_Hotels/guide.pdf')}}" class="btn blinking" type="submit" style="">
                           
                           @if(langue()=='En')
                 Download
               @elseif(langue()=='Fr')
                 Télécharger
               @else
                Télécharger
               @endif

                              </a>
             
           
            </div>
           
         
    </div>
  </div>
</section>

  <section class="pricing" id="pricing" style="background: #fff;padding-top: 10px;padding-bottom: 30px">
    <div class="container">
      
      <div class="row" >
         <div class="col-md-4" style="padding-top: 55px;">
              <center><h2>
              @if(langue()=='En')
                 Institution in the spotlight
               @elseif(langue()=='Fr')
                 Institution à l'honneur
               @else
                Institution à l'honneur
               @endif
             </h2></center>
            </div>
            <div class="col-md-8" style="padding-top: 30px;">
              <img src="{{asset('images/partenaire/bad.png')}} " style="width: 100%;margin-top: 10px;">
            </div>
           <!--   <div class="col-md-4" style="padding-top: 30px;">
              <img src="{{asset('images/partenaire/IFC2.png')}}" style="width: 100%;margin-top: 10px;">
            </div> -->
         
    </div>
  </div>
</section>
  <div class="team" id="team" style="background: #c1a23f;margin-top: 5px;">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="contact_title">
            <h2>
            @if(langue()=='En')
                 Speakers
               @elseif(langue()=='Fr')
                 Panelistes
               @else
                Panelistes
               @endif
             </h2>
            
          </div>
        </div>
      </div>
      <div class="row clearfix" id="intervenant">

        <!-- temporaire à enlever -->
         <!--  <div class="col-md-12">
            <p style="color: white;font-weight: bold;text-align: center;font-size: 25px;">
               @if(langue()=='En')
                 Coming Soon
               @elseif(langue()=='Fr')
                 A Venir
               @else
                A Venir
               @endif
            </p>
          </div> -->
        <!-- fin -->
        <div class="owl-carousel owl-theme ss_carousel our_team_slider" id="slider5">
       @foreach ($intervenant as $intervenants)
           <div class="item">
              <div class="team-block col-md-12 col-sm-12 col-xs-12">
              <div class="inner-box">
                <div class="image"> <img src="{{ asset('images/portrait/'.$intervenants->image.'')}}" class="attachment-globalindustry_265x400 size-globalindustry_265x400 wp-post-image" style="height: 380px;">
                  <ul class="social-icon-one">
                    <li><a href="{{route('detailsIntervenant',$intervenants->id)}}" class="know_more">
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
                <div class="lower-box" style="height: 130px;">
                   <h3><a href="#">{{$intervenants->nom}}</a></h3>
                  <div class="designation">
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
    </div>
  </div>
  <!-- /team end --> 

   <!-- /partners -->
  <section class="services" id="partenaire">
    <div class="services-content" style="background: #fff;padding-top: 10px;">
     
      <div class="container">
        <div class="row" >
          <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12">
            <div class="about_title">
              <h2>@if(langue()=='En')
                 Partners
               @elseif(langue()=='Fr')
                 Partenaires
               @else
                Partenaires
               @endif</h2>
              <!-- <img class="img-fluid" src="images/about_border.png" alt="border_img">
              -->
            </div>
           
          </div>
          <br><br>
           <div class="col-md-12">
          <div class="owl-carousel owl-theme ss_carousel partners_slider" id="slider1">
         
            <div class="item"> <img class="img-fluid" src="images/partenaire/IFC2.png" alt="codecanyon" style="height: 80px;width: 300px;margin-top: 30px;"> </div>
            <div class="item"> <img class="img-fluid" src="images/partenaire/bnig.PNG" alt="videohive" style="height: 100px;width: 180px;margin-top: 20px;"> </div>
            <div class="item"> <img class="img-fluid" src="images/partenaire/gpc.png" alt="photodune" style="height: 100px;width: 150px;margin-top: 20px;"> </div>
            <div class="item"> <img class="img-fluid" src="images/partenaire/guicopres.png" alt="photodune" style="height: 100px;width: 150px;margin-top: 20px;"> </div>
          
            <div class="item"> <img class="img-fluid" src="images/partenaire/riotinto.png" alt="photodune" style="height: 100px;width: 200px;margin-top: 20px;"> </div>
            <div class="item"> <img class="img-fluid" src="images/partenaire/unicef.png" alt="photodune" style="height: 100px;width: 200px;margin-top: 20px;"> </div>
            <div class="item"> <img class="img-fluid" src="images/partenaire/saar.png" alt="photodune" style="height: 100px;width: 150px;margin-top: 20px;"> </div>
            <div class="item"> <img class="img-fluid" src="images/partenaire/gac.jpg" alt="photodune" style="height: 100px;width: 200px;margin-top: 20px;"> </div>
            <div class="item"> <img class="img-fluid" src="images/partenaire/bench.png" alt="photodune" style="height: 100px;width: 150px;margin-top: 20px;"> </div>
            <div class="item"> <img class="img-fluid" src="images/partenaire/monarque.png" alt="photodune" style="height: 100px;width: 200px;margin-top: 20px;"> </div>
             <div class="item"> <img class="img-fluid" src="images/partenaire/djoma.png" alt="photodune" style="height: 100px;width: 200px;margin-top: 20px;"> </div>
              <div class="item"> <img class="img-fluid" src="images/partenaire/oxford.jpg" alt="photodune" style="height: 100px;width: 150px;margin-top: 20px;"> </div>
              <div class="item"> <img class="img-fluid" src="images/partenaire/miranass.png" alt="photodune" style="height: 100px;width: 150px;margin-top: 20px;"> </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /partners --> 

  


  

   @stop