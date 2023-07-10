@extends('templates/default',['title'=>'GUIF | PARTCIPANTS'])
        

    @section('contenu')

    <div id="app">
 
  <div class="carousel-item active" style="background-image:url(images/1.jpg); background-size:cover; height:200px; width:100%;">
    <div class="carousel-caption1" style="text-align: left;">
      
      <div class="breadcrumbs">
        <div class="container">
           <div class="about_btn" style="position: absolute;right: 2px;top: 1px;"> <a href="{{route('inscription')}}" class="get_started" style="">S'inscrire</a><a href="{{route('partenariat')}}" class="explore">Devenir partenaire</a></div>
        
        </div>
      </div>
    </div>
  </div>
  <!--/page_banner end--> 

   <section class="contact_page">
  <div class="container">
     <div class="row" style="width: 100%;padding: 20px;">
          @if(session()->has('message'))
                      <div class="alert alert-success alert-dismissible" style="width: 100%;">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Succès!</strong> {{session()->get('message')}}
</div>      
                                 
               @endif
         
         </div>

    <h2 style="color: #c1a23f;">
       @if(langue()=='En')
                Are you a/an:
               @elseif(langue()=='Fr')
                 Êtes-vous un:
               @else
                Êtes-vous un:
               @endif
    </h2>
    <div class="row" style="" >
      
     
      <div class="col-md-12" style="margin: 0 auto;">
        <div class="row">
         <div class="col-md-3" style="">
        <a href="{{route('AjoutParticipantSimple')}}">
        <div class="row" style="border: 1px solid #000;padding: 0px;box-shadow: 0 5px 11px 0 rgb(0 0 0 / 18%);margin: 10px;">
          <div class="col-md-12" style="padding: 0px;">
            <img src="{{asset('images/parti.jpg')}}" style="width: 100%; height: 200px;">
          </div>
          <div class="col-md-12" style="background: #000;padding: 15px;">
            <center>
              
                <p style="color: #fff;font-weight: bold;font-size: 20px;text-transform: uppercase;">
                  @if(langue()=='En')
                Participant
               @elseif(langue()=='Fr')
                 Participant
               @else
                Participant
               @endif
                </p>
              
            </center>
          </div>
        </div>
        </a>
      </div>
      <!--  -->
      <div class="col-md-3" style="">
        <a href="{{route('AjoutPromoteur')}}">
        <div class="row" style="border: 1px solid #000;padding: 0px;box-shadow: 0 5px 11px 0 rgb(0 0 0 / 18%);margin: 10px;">
          <div class="col-md-12" style="padding: 0px;">
            <img src="{{asset('images/entrep2.png')}}" style="width: 100%; height: 200px;">
          </div>
          <div class="col-md-12" style="background: #000;padding: 15px;">
            <center>
              
                <p style="color: #fff;font-weight: bold;font-size: 20px;text-transform: uppercase;">
                  @if(langue()=='En')
                Promoter
               @elseif(langue()=='Fr')
                 Promoteur
               @else
                Promoteur
               @endif
                </p>
              
            </center>
          </div>
        </div>
        </a>
      </div>
      <!--  -->
      <div class="col-md-3" style="">
        <a href="{{route('AjoutInvestisseur')}}">
        <div class="row" style="border: 1px solid #000;padding: 0px;box-shadow: 0 5px 11px 0 rgb(0 0 0 / 18%);margin: 10px;">
          <div class="col-md-12" style="padding: 0px;">
            <img src="{{asset('images/invest.jpg')}}" style="width: 100%; height: 200px;">
          </div>
          <div class="col-md-12" style="background: #000;padding: 15px;">
            <center>
              
                <p style="color: #fff;font-weight: bold;font-size: 20px;text-transform: uppercase;">
                   @if(langue()=='En')
                Investor
               @elseif(langue()=='Fr')
                 Investisseur
               @else
                Investisseur
               @endif
                </p>
              
            </center>
          </div>
        </div>
        </a>
      </div>
      <!--  -->
      <div class="col-md-3" style="">
        <a href="{{route('AjoutOfficielle')}}">
        <div class="row" style="border: 1px solid #000;padding: 0px;box-shadow: 0 5px 11px 0 rgb(0 0 0 / 18%);margin: 10px;">
          <div class="col-md-12" style="padding: 0px;">
            <img src="{{asset('images/invest2.jpg')}}" style="width: 100%; height: 200px;">
          </div>
          <div class="col-md-12" style="background: #000;padding: 15px;">
            <center>
              
                <p style="color: #fff;font-weight: bold;font-size: 20px;text-transform: uppercase;">
                  @if(langue()=='En')
                Official
               @elseif(langue()=='Fr')
                 Officiel
               @else
                Officiel
               @endif
                </p>
              
            </center>
          </div>
        </div>
        </a>
      </div>
      <!--  -->
      </div>
      </div>
       
  </div>
  </div>
</section>

</div>

<script src="{{asset('js/app.js')}} "></script>

   @stop