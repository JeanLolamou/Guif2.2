@extends('templates/default',['title'=>'GUIF | CONTACT'])
        

    @section('contenu')
  <!--/page_bannner start-->
  <style type="text/css">
    
.get-in-touch {
  max-width: 800px;
  margin: 50px auto;
  position: relative;

}
.get-in-touch .title {
  text-align: center;
  text-transform: uppercase;
  letter-spacing: 3px;
  font-size: 3.2em;
  line-height: 48px;
  padding-bottom: 48px;
     color: #5543ca;
    background: #5543ca;
    background: -moz-linear-gradient(left,#f4524d  0%,#5543ca 100%) !important;
    background: -webkit-linear-gradient(left,#f4524d  0%,#5543ca 100%) !important;
    background: linear-gradient(to right,#f4524d  0%,#5543ca  100%) !important;
    -webkit-background-clip: text !important;
    -webkit-text-fill-color: transparent !important;
}

.contact-form .form-field {
  position: relative;
  margin: 32px 0;
}
.contact-form .input-text {
  display: block;
    width: 100%;
    height: 36px;
    border-width: 0 0 1px 0;
    border-color: #9fa3a8;
    font-size: 18px;
    line-height: 26px;
    font-weight: 400;
}
.contact-form .input-text:focus {
  outline: none;
}
.contact-form .input-text:focus + .label,
.contact-form .input-text.not-empty + .label {
  -webkit-transform: translateY(-24px);
          transform: translateY(-24px);
        
}
.contact-form .label {
  position: absolute;
  left: 20px;
  bottom: 15px;
  font-size: 18px;
  line-height: 26px;
  font-weight: 400;
  color: grey;
  cursor: text;
  transition: -webkit-transform .2s ease-in-out;
  transition: transform .2s ease-in-out;
  transition: transform .2s ease-in-out, 
  -webkit-transform .2s ease-in-out;
}
.contact-form .submit-btn {
  display: inline-block;
  background-color: #000;
   background-image: linear-gradient(125deg,#a72879,#064497);
  color: #fff;
  text-transform: uppercase;
  letter-spacing: 2px;
  font-size: 16px;
  padding: 8px 16px;
  border: none;
  width:200px;
  cursor: pointer;
}


  </style>
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
    <div class="row" style="" >
        @if(session()->has('success'))
                      <div class="alert alert-success alert-dismissible" style="width: 100%;">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Succés!</strong> {{session()->get('success')}}
</div>      
                                 
               @endif

                 @if(session()->has('error'))
                      <div class="alert alert-success alert-dismissible" style="width: 100%;">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Succés!</strong> {{session()->get('error')}}
</div>      
                                 
               @endif

       @if(session()->has('message'))
               <div class="alert alert-info">
                 {{session()->get('message')}}
               </div>
               @endif
      
      <div class="col-md-10" style="margin: 0 auto;box-shadow: 0 1px 16px #ddd7d7;padding: 0px;">
    
      <div class="contact_page_from" style="padding: 10px;">

       <a href="#">  <div class="" style="    width: 100%;text-align: center;padding: 10px;background: #106fb3;color: white;">
       <h4 style="color: #fff;font-weight: bold;text-transform: uppercase;">Connexion</h4>
      </div></a>
      </div>
    </div>
  </div>
  </div>
</section>

   @stop