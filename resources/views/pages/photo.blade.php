@extends('templates/default',['title'=>'GUIF | PHOTO'])
        

    @section('contenu')
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!--####
### How to add in your boostrap project
1) Add jQuery "<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>"
2) Download fancybox (https://github.com/fancyapps/fancyBox)
3) Or use CDN (http://cdnjs.com/libraries/fancybox)
####--!>

<!-- References: https://github.com/fancyapps/fancyBox -->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <style type="text/css">
      .gallery
{
    display: inline-block;
    margin-top: 20px;
}
    </style>
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
    <div class="row">
    <div class='list-group gallery'>
       @foreach ($photo as $photos)
            <div class='col-sm-4 col-xs-6 col-md-4 col-lg-4'>
                <a class="thumbnail fancybox" rel="ligthbox" href="{{ asset('images/album/'.$photos->lien.'')}}">
                    <img class="img-responsive" alt="" src="{{ asset('images/gallerie/'.$photos->lien.'')}}" style="height: 200px;" />
                    <div class='text-right'>
                        <small class='text-muted'>{{$photos->nom_photoFr}}</small>
                    </div> <!-- text-right / end -->
                </a>
            </div> <!-- col-6 / end -->
            @endforeach
            
        </div> <!-- list-group / end -->
  </div> <!-- row / end -->
  </div>
</section>
  <!-- /contact end--> 

  <script type="text/javascript">
    $(document).ready(function(){
    //FANCYBOX
    //https://github.com/fancyapps/fancyBox
    $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
});
   
  
  </script>

   @stop