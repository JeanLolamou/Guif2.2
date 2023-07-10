@extends('templates/default',['title'=>'GUIF | LIEU FORUM'])
        

    @section('contenu')
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
 

   <!-- /contact start-->
    <section class="contact_page" style="margin-bottom: 0px;">
  <div class="container">
    <div class="row" style="">
      <div class="col-md-12" style="text-align: center;"><p style="font-size: 60px;"><strong><span style="color: #c1a23f;">EXPO 2020</span> <span style="text-shadow: 2px 0 0 #c1a23f, -2px 0 0 #c1a23f, 0 2px 0 #c1a23f, 0 -2px 0 #c1a23f, 1px 1px #c1a23f, -1px -1px 0 #c1a23f, 1px -1px 0 #c1a23f, -1px 1px 0 #c1a23f;color: #fff;">DUBAI</span></strong></p></div>
     
      <div class="col-md-12 slideInRight">
       <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7234.33947690552!2d55.149682!3d24.960339!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f72d99893b4f9%3A0x53ca187a1bc8bfd5!2sDubai%20Expo%202020!5e0!3m2!1sfr!2sus!4v1629386394909!5m2!1sfr!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
  </div>
  </div>
</section>
  <!-- /contact end--> 

  

   @stop