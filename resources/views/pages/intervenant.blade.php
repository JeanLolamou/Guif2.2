@extends('templates/default',['title'=>'GUIF | INTERVENANT'])
        

    @section('contenu')
    <style type="text/css">
      .recherche {
  background: #fff none repeat scroll 0 0;
  box-shadow: 0px 5px 15px 0px rgba(94, 94, 94, 0.2);
  bottom: -48px;
  
  right: 2px;
  color: #444;
  width: 260px;
  z-index: 99999;
}
.recherche input {
  background: #fff none repeat scroll 0 0;
  border: 1px solid black;
  color: #444;
  display: block;
  float: left;
  font-size: 14px;
  font-style: italic;
  padding: 8px 10px;
  width: 210px;
  height: 44px;
}
.recherche button.button {
  background: black;
  border: medium none;
  color: #fff;
  display: inline-block;
  float: right;
  font-size: 17px;
  line-height: 35px;
  padding: 5px 15px;
  text-align: center;
}


   .fadeIn {
  -webkit-animation-name: fadeIn;
  animation-name: fadeIn;
  -webkit-animation-duration: 5s;
  animation-duration: 5s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  }
  @-webkit-keyframes fadeIn {
  0% {opacity: 0;}
  100% {opacity: 1;}
  }
  @keyframes fadeIn {
  0% {opacity: 0;}
  100% {opacity: 1;}
  } 
    </style>
     <!--/page_bannner start-->
  <section class="clients" class="bounce-in-top" style="background: #fff;">
    <div class="container">
      <div class="row">
       
        <div class="col-md-12 slideInLeft" style="padding: 50px;">
          <h1 style="color: #c1a23f;font-weight: bold;">
            @if(langue()=='En')
                 Speakers
               @elseif(langue()=='Fr')
                 Intervenants
               @else
                Intervenants
               @endif
             </h1>
          <p>
            </p>
        </div>
      </div>
    </div>
  </section>
  <!--/page_banner end--> 
 

       <div class="team" id="team" style="background: #c1a23f;margin-top: 5px;">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="contact_title">
            <h2>
           
             </h2>
            
          </div>
        </div>
      </div>
      <div class="row clearfix" id="intervenant">
          <!-- temporaire à enlever -->
          <div class="col-md-12">
            <p style="color: white;font-weight: bold;text-align: center;font-size: 25px;">
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
        <div class="owl-carousel owl-theme ss_carousel our_team_slider" id="slider5" style="display: none;">

          @foreach ($intervenant as $intervenants)
           <div class="item">
              <div class="team-block col-md-12 col-sm-12 col-xs-12">
              <div class="inner-box">
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
                <div class="lower-box" style="height: 130px;background-color: #0d9457 !important;">
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
      </div>
    </div>

   @stop