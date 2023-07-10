 <!-- /footer start -->
 <style type="text/css">
   .menuFooter{
    color: white;font-weight: bold;
   }

   .menuFooter:hover{
    color: #106fb3;font-weight: bold;
   }


   a.btn-social,
.btn-social
{
    border-radius: 50%;
    color: #fff !important;
    display: inline-block;
    height: 54px;
    line-height: 54px;
    text-align: center;
    text-decoration: none;
    transition: background-color .3s;
    webkit-transition: background-color .3s;
    width: 54px;
}

.btn-social .fa,.btn-social i
{
    backface-visibility: hidden;
    moz-backface-visibility: hidden;
    ms-transform: scale(1);
    o-transform: scale(1);
    transform: scale(1);
    transition: all .25s;
    webkit-backface-visibility: hidden;
    webkit-transform: scale(1);
    webkit-transition: all .25s;
}
.btn-social:hover,.btn-social:focus
{
    color: #000;
    outline: none;
    text-decoration: none;
}
.btn-social:hover .fa,.btn-social:focus .fa,.btn-social:hover i,.btn-social:focus i
{
    ms-transform: scale(1.3);
    o-transform: scale(1.3);
    transform: scale(1.3);
    webkit-transform: scale(1.3);
}
.btn-social.btn-xs
{
    font-size: 9px;
    height: 24px;
    line-height: 13px;
    margin: 6px 2px;
    width: 24px;
}
.btn-social.btn-sm
{
    font-size: 13px;
    height: 36px;
    line-height: 18px;
    margin: 6px 2px;
    width: 36px;
}
.btn-social.btn-lg
{
    font-size: 22px;
    height: 72px;
    line-height: 40px;
    margin: 10px 6px;
    width: 72px;
}


.btn-facebook
{
    background-color: #000;
    border: 1px solid #c1a23f;
    columns: #FFF;
}
.btn-facebook:hover
{
    background-color: #cb913d;
}

.btn-linkedin
{
      background-color: #000;
    border: 1px solid #c1a23f;
    columns: #FFF;
}
.btn-linkedin:hover
{
    background-color: #cb913d;
}

.btn-twitter
{
      background-color: #000;
    border: 1px solid #c1a23f;
    columns: #FFF;
}
.btn-twitter:hover
{
    background-color: #cb913d;
}

.btn-youtube
{
      background-color: #000;
    border: 1px solid #c1a23f;
    columns: #FFF;
}
.btn-youtube:hover
{
    background-color: #0d9457;
}
 </style>
  <footer id="footer" style="">
    <div class="">
        <div class="row" style="border-top: 5px solid #c2a23f;">
            <div class="col-md-5">
                <img src="{{('images/Guif2/img/wp.jpg')}}" style="width: 100%;height: 100%;">
            </div>
            <div class="col-md-7" style="padding-top: 20px;padding-bottom: 20px;">
                
                <div class="row">
                    <div class="col-md-6" style="padding-top: 20px;">
                         @if(langue()=='En')
               <center>
                    <p style="color: #c2a23f;margin: 0px;font-size: 22px;">
                        <b>THE GUINEA PAVILION</b>
                    </p>
                    <p style="color: #000;margin: 0px;font-size: 22px;text-transform: uppercase;">
                        <b>« DRAW FROM THE SOURCE »</b>
                    </p>
                     <p style="width: 15%;border-bottom: 2px solid #d1ae3b;"></p>
                </center>
               @elseif(langue()=='Fr')
                <center>
                    <p style="color: #c2a23f;margin: 0px;font-size: 22px;">
                        <b>LE PAVILLON GUINEE</b>
                    </p>
                    <p style="color: #000;margin: 0px;font-size: 22px;text-transform: uppercase;">
                        <b>« Puisez à la Source »</b>
                    </p>
                     <p style="width: 15%;border-bottom: 2px solid #d1ae3b;"></p>
                </center>
               @else
                <center>
                    <p style="color: #c2a23f;margin: 0px;font-size: 22px;">
                        <b>LE PAVILLON GUINEE</b>
                    </p>
                    <p style="color: #000;margin: 0px;font-size: 22px;text-transform: uppercase;">
                        <b>« Puisez à la Source »</b>
                    </p>
                     <p style="width: 15%;border-bottom: 2px solid #d1ae3b;"></p>
                </center>
               @endif
                        
                    </div>
                    <div class="col-md-4">
                       
                <img src="{{('images/Guif2/img/expo2020.png')}}" style="height: 100px; float: right;width: auto;margin-right: 32px;">
                    </div>
                </div>
                <div class="row">
                    
                    <div class="col-md-12" style="padding-top: 0px;">
                         @if(langue()=='En')
                <p style="color: #000;">
                           During the Universal Exhibition, the Republic of Guinea will showcase how it uses its rich history and culture to inform its present and secure its bright future. It will highlight all the collaborative synergies working for the sustainability of its socio-economic and environmental ecosystem.
                        </p>
                        <p style="color: #000;">
                          During the Expo, in addition to making Guinea known, the challenge is to offer increased visibility to government actions, local and social entrepreneurship, education sectors and youth movements to ensure the sustainable future of the country.
                        </p>
                        <p style="color: #000;">
                           The country has already distinguished itself with a strong thematic vision and an ideal location for its pavilion which will be located just a few meters from the pavilion of the organizing country, the United Arab Emirates.
                        </p>
               @elseif(langue()=='Fr')
                 <p style="color: #000;">
                            Au cours de l’Exposition Universelle, la République de Guinée présentera comment elle utilise sa riche histoire et sa culture pour informer son présent et assurer son avenir prometteur. Elle mettra en avant l’ensemble des synergies collaboratives œuvrant pour la durabilité de son écosystème socio-économique et environnemental.
                        </p>
                        <p style="color: #000;">
                           Lors de l’Expo, outre que de faire connaître la Guinée, l’enjeu est d’offrir une visibilité accrue aux actions gouvernementales, à l’entreprenariat local et social, aux secteurs de l’éducation et aux mouvements de la jeunesse pour assurer le futur durable du pays.
                        </p>
                        <p style="color: #000;">
                            Le pays a déjà su se démarquer avec une vision thématique forte et un emplacement idéal pour son pavillon qui sera situé à juste quelques mètres du pavillon du pays organisateur, les Emirats Arabes Unis.
                        </p>
               @else
                 <p style="color: #000;">
                            Au cours de l’Exposition Universelle, la République de Guinée présentera comment elle utilise sa riche histoire et sa culture pour informer son présent et assurer son avenir prometteur. Elle mettra en avant l’ensemble des synergies collaboratives œuvrant pour la durabilité de son écosystème socio-économique et environnemental.
                        </p>
                        <p style="color: #000;">
                           Lors de l’Expo, outre que de faire connaître la Guinée, l’enjeu est d’offrir une visibilité accrue aux actions gouvernementales, à l’entreprenariat local et social, aux secteurs de l’éducation et aux mouvements de la jeunesse pour assurer le futur durable du pays.
                        </p>
                        <p style="color: #000;">
                            Le pays a déjà su se démarquer avec une vision thématique forte et un emplacement idéal pour son pavillon qui sera situé à juste quelques mètres du pavillon du pays organisateur, les Emirats Arabes Unis.
                        </p>
               @endif
                       
                         <div class="row">
                             <div class="col-md-12" style="">
           
            
            <center><a target="_blank" href="https://guineaexpo2020.com/" class="btn btn-default" style="border-radius: 20px;
    color: #fff;background: #c1a23f;">
     @if(langue()=='En')
               Visit our pavilion
               @elseif(langue()=='Fr')
                Visitez notre pavillon
               @else
                Visitez notre pavillon
               @endif
     <i class="fa fa-arrow-right"></i></a></center>
          </div>
                         </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ----------------------------------------------- -->
      <div class="row" style="padding-top: 1%;padding-bottom: 2%;background-color: #c1a23f;">
        <div class="col-md-5" style="background: #e3f2dd;border-radius: 18px;margin: 0 auto;padding: 5px;">
            <div class="row">
                <div class="col-md-4" style="right: 0px;text-align: right;color: #000;">
          <h5 style="font-weight: bold;margin-top: 15px;">
           @if(langue()=='En')
               Follow Us
               @elseif(langue()=='Fr')
                Suivez Nous
                @else
                Suivez Nous
               @endif
              </h5>
        </div>

        <div class="col-md-8">
            <ul id="social" style="text-align: left;">
            <li><a target="_blank" href="https://www.facebook.com/APIPGN/" class="btn-social btn-facebook" style="color: #c1a23f;">
                <i class="fab fa-facebook"></i></a></li>
            <li><a target="_blank" href="https://twitter.com/APIP_Guinee?" class="btn-social btn-twitter" style="color: #fff;"><i class="fab fa-twitter"></i></a></li>
            
            <li><a target="_blank" href="https://gn.linkedin.com/company/apipgn" class="btn-social btn-linkedin" style="color: #c1a23f;"><i class="fab fa-linkedin"></i></a></li>
          </ul>
        </div>
            </div>
        </div>
        <div class="col-md-12" style="padding-top: 10px;">
            <center><h3 style="color: white;font-weight: bold;">Contact</h3></center>
            <div class="row">
                <div class="col-md-4">
                    <p>
                        <span style="color: #000;font-weight: bold;">
              @if(langue()=='En')
               Register :
               @elseif(langue()=='Fr')
                Inscription:
                @else
                Inscription:
               @endif
             </span> <a href="#" style="color: #fff;font-weight: bold;">guif@apip.gov.gn</a>
                    </p>
                </div>
                <div class="col-md-4">
                     <span style="color: #000;font-weight: bold;">Sponsoring:</span> <a href="#" style="color: #fff;font-weight: bold;">guif@apip.gov.gn</a>
                </div>
                <div class="col-md-4">
                     <span style="color: #000;font-weight: bold;">
          @if(langue()=='En')
               Press:
               @elseif(langue()=='Fr')
                Presse:
                @else
                Presse:
               @endif</span> <a href="#" style="color: #fff;font-weight: bold;">mamadou.sylla@apip.gov.gn</a>
                </div>
            </div>
        </div>
        
         
      </div>
     
       <div class="row" style="border-bottom: 20px solid #e3f2dd;">
        <div class="col-md-6" style="margin-left: 30px;">
            <div class="row">
                 <div class="col-md-4" style="padding: 10px;">
         <img src="{{asset('images/apip.png')}}" style="height: 100px;">
          
        </div>
         <div class="col-md-4" style="">
         <img src="{{asset('images/Guif2/LOGO.png')}}" style="height: 100px;margin-top: 5px;">
        </div>
        <div class="col-md-4">
             <img src="{{('images/Guif2/img/expo2020.png')}}" style="height: 100px;margin-top: 5px;">
        </div>
            </div>
        </div>
        <div class="col-md-4" style="margin-top: 25px;text-align: right;">
            <span style="font-size: 50px;">#GUIF2022</span>
        </div>
      </div>
     
     
    </div>
   
  </footer>
  <!-- /footer end --> 
</div>
<!-- /scroll_to_top start --> 
<a href="#" class="scrollToTop" style="background:#193c7d;"><i class="fa fa-arrow-up" aria-hidden="true"></i></a> 
<!-- /scroll_to_top start --> 

<!-- jQuery -->
<script src="{{asset('ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js')}}"></script> 

<!-- Bootstrap -->
<script src="{{asset('maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js')}}"></script> 
<script src="{{asset('cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js')}}"></script> 

<!-- google map --> 
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script> 

<!-- header menu -->
<script src="{{asset('js/jquery.smartmenus.min.js')}}"></script>

<!-- carousel slider -->
<script src="{{asset('js/owl.carousel.js')}}"></script> 

<!-- Global Init -->
<script src="{{asset('js/custom.js')}}"></script>
</body>

<!-- Mirrored from netizensstore.com/netbizz_theme/netbizz_HTML/multipage_3/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Dec 2019 15:31:52 GMT -->
</html>