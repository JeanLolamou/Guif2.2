@extends('templates/default',['title'=>'GUIF | COVID'])
        

    @section('contenu')
    <style type="text/css">
     .card-header .title {
    font-size: 17px;
    color: #c1a23f !important;
}
.card-header .accicon {
  float: right;
  font-size: 20px;  
  width: 1.2em;
}
.card-header{
  cursor: pointer;
  border-bottom: none;
  
  background-color: #fff8e1 !important;
  border-color: #f9f2dd !important;
  box-shadow: 0 5px 11px 0 rgb(0 0 0 / 18%);
}
.card{
  border: 1px solid #ddd;
  margin: 15px;
}
.card-body{
  border-top: 1px solid #ddd;
}
.card-header:not(.collapsed) .rotate-icon {
  transform: rotate(180deg);
}
    </style>
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/a91a27e46f.js" crossorigin="anonymous"></script>
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

   <!-- /about start -->
  <section class="about inner_about" id="about">
   
  <div class="container">

      <div class="row" >
        <div class="col-md-12">
          <center><h1 style="color: #c1a23f;">
           @if(langue()=='En')
               Projets publiques
               @elseif(langue()=='Fr')
                Public projects
                @else
                Public projects
               @endif
        </h1></center>
        </div>
       
       
      </div>

       <div class="row" >

       
             <div class="accordion" id="accordionExample" style="width: 100%;">
              <div class="card">
            <div class="card-header" data-toggle="collapse" data-target="#collapseVisa" aria-expanded="true"  style="">     
                <span class="title">
                  <b>
                     @if(langue()=='En')
               Commerce 
               @elseif(langue()=='Fr')
                 Trade 
               @endif
                  </b>
                 </span>
                <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
            </div>
            <div id="collapseVisa" class="collapse show" data-parent="#accordionExample">
                <div class="card-body">
                     
                     <div class="row">
                       <div class="col-md-3" style="text-align: center;">
                         <a download href="{{('fichePublic/GUIF - Fiche Projet  - Commerce.docx')}}" style="text-align: center;">
                           <img src="{{asset('images/word.png')}}" style="width:100px;">
                           <p style="font-weight: bold;color: black;">
                            @if(langue()=='En')
                           GUIF - Fiche Projet  - Commerce 
                           @elseif(langue()=='Fr')
                             GUIF - Fiche Projet  - Commerce 
                           @endif
                        </p>
                         </a>
                       </div>
                     </div>
          
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" data-toggle="collapse" data-target="#collapseTrans" aria-expanded="true"  style="">     
                <span class="title">
                  <b>
                     @if(langue()=='En')
               Communication
               @elseif(langue()=='Fr')
                 Communication  
               @endif
                  </b>
                 </span>
                <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
            </div>
            <div id="collapseTrans" class="collapse" data-parent="#accordionExample">
                <div class="card-body">

                  <!--  -->
                  <div class="row">
                       <div class="col-md-3" style="text-align: center;">
                         <a download href="{{('fichePublic/GUIF - Fiche Projet  - Communcation.docx')}}" style="text-align: center;">
                           <img src="{{asset('images/word.png')}}" style="width:100px;">
                           <p style="font-weight: bold;color: black;">
                            @if(langue()=='En')
                           GUIF - Fiche Projet  - Communcation
                           @elseif(langue()=='Fr')
                             GUIF - Fiche Projet  - Communcation
                           @endif
                        </p>
                         </a>
                       </div>
                     </div>
                     <!--  -->
                    
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"  style="">     
                <span class="title">
                  <b>
                     @if(langue()=='En')
               Énergie
               @elseif(langue()=='Fr')
                 Energy
               @endif
                  </b>
                 </span>
                <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
            </div>
            <div id="collapseOne" class="collapse" data-parent="#accordionExample">
                <div class="card-body">
                      <!--  -->
                  <div class="row">
                       <div class="col-md-3" style="text-align: center;">
                         <a download href="{{('fichePublic/GUIF - Fiche Projet  - Énergie.docx')}}" style="text-align: center;">
                           <img src="{{asset('images/word.png')}}" style="width:100px;">
                           <p style="font-weight: bold;color: black;">
                            @if(langue()=='En')
                           GUIF - Fiche Projet  - Énergie
                           @elseif(langue()=='Fr')
                             GUIF - Fiche Projet  - Énergie
                           @endif
                        </p>
                         </a>
                       </div>
                     </div>
                     <!--  -->
          
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">     
                <span class="title">
                   <b>
                     @if(langue()=='En')
               Habitat
               @elseif(langue()=='Fr')
                 Habitat
               @endif
                   </b>
                </span>
                <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
            </div>
            <div id="collapseTwo" class="collapse" data-parent="#accordionExample">
                <div class="card-body">
                      <!--  -->
                  <div class="row">
                       <div class="col-md-3" style="text-align: center;">
                         <a download href="{{('fichePublic/GUIF - Fiche Projet  - Habitat.docx')}}" style="text-align: center;">
                           <img src="{{asset('images/word.png')}}" style="width:100px;">
                           <p style="font-weight: bold;color: black;">
                            @if(langue()=='En')
                           GUIF - Fiche Projet  - Habitat
                           @elseif(langue()=='Fr')
                             GUIF - Fiche Projet  - Habitat
                           @endif
                        </p>
                         </a>
                       </div>
                     </div>
                     <!--  -->
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false">
                <span class="title">
                   <b>
                     @if(langue()=='En')
               Infrastructures
               @elseif(langue()=='Fr')
              Infrastructure
               @endif
                   </b>
                </span>
                <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
            </div>
            <div id="collapseThree" class="collapse" data-parent="#accordionExample">
                <div class="card-body">
                    <!--  -->
                  <div class="row">
                       <div class="col-md-3" style="text-align: center;">
                         <a download href="{{('fichePublic/GUIF - Fiche Projet  - Infrastructures.docx')}}" style="text-align: center;">
                           <img src="{{asset('images/word.png')}}" style="width:100px;">
                           <p style="font-weight: bold;color: black;">
                            @if(langue()=='En')
                           GUIF - Fiche Projet  - Infrastructures
                           @elseif(langue()=='Fr')
                             GUIF - Fiche Projet  - Infrastructures
                           @endif
                        </p>
                         </a>
                       </div>
                     </div>
                     <!--  -->
                </div>
            </div>
        </div>
    </div>

    

         
       
          
         
    


        </div>
        
      </div>
     

   

  </div>
  </section>
  <!-- /about end -->

  <script type="text/javascript">
    $(document).on('click', '.panel-heading span.clickable', function(e){
    var $this = $(this);
  if(!$this.hasClass('panel-collapsed')) {
    $this.parents('.panel').find('.panel-body').slideUp();
    $this.addClass('panel-collapsed');
    $this.find('i').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');    
    
  } else {
    $this.parents('.panel').find('.panel-body').slideDown();
    $this.removeClass('panel-collapsed');    
    $this.find('i').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
    
  }
})
  </script>

   @stop