@extends('templates/default',['title'=>'GUIF | PROGRAMME & CONFERENCE'])
        

    @section('contenu')
     <!--/page_bannner start-->
     <style type="text/css">
       html {
    scroll-behavior: smooth;
}
     </style>
  <div class="carousel-item active" style="background-image:url(images/forum3.jpg); background-size:cover; height:520px; width:100%;">
    <div class="carousel-caption1" style="text-align: left;">
       
      <div class="breadcrumbs">
        <div class="container">
        <div class="slideInLeft2" style="position: absolute;left: -150px;top: -81px;color: #fff;">
          <h2 style="margin-bottom: 30px;color: #fff;text-transform: uppercase;">Programmes et conférences</h2>
          <p style="width: 500px;font-weight: bold;">10 au 12 Juin 2020 au Grand Sheraton de Conakry <br>
NB: L’espace des rencontres B to B et B to G  est ouvert en continu de 08h30 à 17h

          </p>
        </div>
            <div class="about_btn slideInRight2" style="position: absolute;right: -150px;bottom: 10px;">
              <h4 style="margin-bottom: 30px;color: #fff;">Programmes</h4>
             <a href="#premier" class="explore2" style="margin-right: 20px;">Mercredi 10 juin 2020</a><a href="#deuxieme" class="explore2" style="margin-right: 20px;">Jeudi 11 juin 2020</a>
            <a href="#troisieme" class="explore2">Vendredi 12 juin 2020</a>
          </div>
          
        </div>
      </div>
    </div>
  </div>
  <!--/page_banner end--> 

   <!-- /contact start-->
  <section id="premier">
 <div class="container">
  <div class="row">
    <div class="col-md-12">
        <div id="accordion">

  <div class="card" style="margin-top: 80px;">
    <div class="card-header">
       <div style="text-align: center;">
 <a class="card-link text-dark" data-toggle="collapse" href="#premierj"><span class="float-right"><i class="fa fa-arrow-down"></i></span>
       <h4 class="color--grey-dark">
<i class="fa fa-calendar"></i> Mercredi 10 juin 2020</h4>
        
      </a></div>
     
    </div>
    <div id="premierj" class="collapse" data-parent="#accordion">
      <div class="card-body">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </div>
    </div>
  </div>


</div>
    </div>
  </div>
 </div>
</section>



 <section id="deuxieme">
 <div class="container">
  <div class="row">
    <div class="col-md-12">
        <div id="accordion">

 

   <div class="card" style="margin-top: 40px;">
    <div class="card-header">
       <div style="text-align: center;">
 <a class="card-link text-dark" data-toggle="collapse" href="#deuxiemej"><span class="float-right"><i class="fa fa-arrow-down"></i></span>
       <h4 class="color--grey-dark">
<i class="fa fa-calendar"></i> Mercredi 10 juin 2020</h4>
        
      </a></div>
     
    </div>
    <div id="deuxiemej" class="collapse" data-parent="#accordion">
      <div class="card-body">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </div>
    </div>
  </div>

 

</div>
    </div>
  </div>
 </div>
</section>


 <section id="troisieme">
 <div class="container">
  <div class="row">
    <div class="col-md-12">
        <div id="accordion">


 <div class="card" style="margin-top: 40px;">
    <div class="card-header">
       <div style="text-align: center;">
 <a class="card-link text-dark" data-toggle="collapse" href="#troisiemej"><span class="float-right"><i class="fa fa-arrow-down"></i></span>
       <h4 class="color--grey-dark">
<i class="fa fa-calendar"></i> Mercredi 10 juin 2020</h4>
        
      </a></div>
     
    </div>
    <div id="troisiemej" class="collapse" data-parent="#accordion">
      <div class="card-body">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </div>
    </div>
  </div>

</div>
    </div>
  </div>
 </div>
</section>



  <!-- /contact end--> 


   @stop