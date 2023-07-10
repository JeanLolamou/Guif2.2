@extends('templates/default',['title'=>'GUIF | INSCRIPTION'])
        

    @section('contenu')

    <style type="text/css">

.pricing-table .plan {
  margin-left:0px;
  border-radius: 5px;
  text-align: center;
  background-color: #f3f3f3;
  -moz-box-shadow: 0 0 6px 2px #b0b2ab;
  -webkit-box-shadow: 0 0 6px 2px #b0b2ab;
  box-shadow: 0 0 6px 2px #b0b2ab;
}
 
 .plan:hover {
  background-color: #fff;
  -moz-box-shadow: 0 0 12px 3px #b0b2ab;
  -webkit-box-shadow: 0 0 12px 3px #b0b2ab;
  box-shadow: 0 0 12px 3px #b0b2ab;
  z-index: 555;
}
 
 .plan {
  padding: 20px;
  margin-left:0px;
  color: #ff;
  background-color: #5e5f59;
  -moz-border-radius: 5px 5px 0 0;
  -webkit-border-radius: 5px 5px 0 0;
  border-radius: 5px 5px 0 0;
}
  
.plan-name-bronze {
  
  -moz-border-radius: 5px 5px 0 0;
  -webkit-border-radius: 5px 5px 0 0;
  border-radius: 5px 5px 0 0;
 }
  
.plan-name-silver {
  color: #fff;
  background-color: #C0C0C0;
  -moz-border-radius: 5px 5px 0 0;
  -webkit-border-radius: 5px 5px 0 0;
  border-radius: 5px 5px 0 0;
 }
  
.plan-name-gold {
  color: #fff;
  background-color: #FFD700;
  -moz-border-radius: 5px 5px 0 0;
  -webkit-border-radius: 5px 5px 0 0;
  border-radius: 5px 5px 0 0;
  } 
  
.pricing-table-bronze  {
  padding: 20px;
  color: #fff;
  background-color: #f89406;
  -moz-border-radius: 5px 5px 0 0;
  -webkit-border-radius: 5px 5px 0 0;
  border-radius: 5px 5px 0 0;
}
  
.pricing-table .plan .plan-name span {
  font-size: 20px;
}
 
.pricing-table .plan ul {
  list-style: none;
  margin: 0;
  -moz-border-radius: 0 0 5px 5px;
  -webkit-border-radius: 0 0 5px 5px;
  border-radius: 0 0 5px 5px;
}
 
.pricing-table .plan ul li.plan-feature {
  padding: 15px 10px;
  border-top: 1px solid #c5c8c0;
  margin-right: 35px;
}
 
.pricing-three-column {
  margin: 0 auto;
 
}
 
.pricing-variable-height .plan {
  float: none;
  margin-left: 2%;
  vertical-align: bottom;
  display: inline-block;
  zoom:1;
  *display:inline;
}
 
.plan-mouseover .plan-name {
  background-color: #4e9a06 !important;
}
 
.btn-plan-select {
  padding: 8px 25px;
  font-size: 18px;
}
    </style>
  <!--/page_bannner start-->
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

   <section class="contact_page" style="background: #fff;">
    <div class="container" style="background: #fff;">
  <div class="row" style="background: #fff;">
  
       <div class="pricing-table pricing-three-column row">
        <div class="plan col-sm-3 col-lg-3">
          <div class="plan-name-bronze">
            <img src="images/stand.jpg" style="width: 100%;height: 150px;">
          </div>
          <ul>
            <li class="plan-feature"> <h6>Stand 27m²</h6></li>
            <li class="plan-feature">$8.99</li>
            <li class="plan-feature"><a href="{{route('formulaireStand')}} " class="btn btn-primary btn-plan-select"><i class="icon-white icon-ok"></i> Choisir</a></li>
          </ul>
        </div>
        <div style="" class="plan col-sm-3 col-lg-3">
          <div class="plan-name-silver">
           <img src="images/stand.jpg" style="width: 100%;height: 150px;">
          </div>
          <ul>
             <li class="plan-feature"> <h6> Stand 18m²  <span class="badge badge-warning">Popular</span></h6></li>
            <li class="plan-feature">$15.99</li>
            <li class="plan-feature"><a href="{{route('formulaireStand')}}" class="btn btn-primary btn-plan-select"><i class="icon-white icon-ok"></i> Select</a></li>
          </ul>
        </div>
         <div style="" class="plan col-sm-3 col-lg-3">
          <div class="plan-name-silver">
           <img src="images/stand.jpg" style="width: 100%;height: 150px;">
          </div>
          <ul>
             <li class="plan-feature"> <h6> Stand 12m²  <span class="badge badge-warning">Popular</span></h6></li>
            <li class="plan-feature">$15.99</li>
            <li class="plan-feature"><a href="{{route('formulaireStand')}}" class="btn btn-primary btn-plan-select"><i class="icon-white icon-ok"></i> Select</a></li>
          </ul>
        </div>
        <div class="plan col-sm-3 col-lg-3">
          <div class="plan-name-gold">
            <img src="images/stand.jpg" style="width: 100%;height: 150px;">
          </div>
          <ul>
            <li class="plan-feature"> <h6>Stand 9m² </h6></li>
            <li class="plan-feature">$15.99</li>
            
            <li class="plan-feature"><a href="{{route('formulaireStand')}}" class="btn btn-primary btn-plan-select"><i class="icon-white icon-ok"></i> Select</a></li>
          </ul>
        </div>
    </div>
        
  </div>
</div>
</section>

   @stop