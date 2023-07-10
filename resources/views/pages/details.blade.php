@extends('templates/default',['title'=>'GUIF |DETAILS-INTERVENANT'])

        



    @section('contenu')

    <style type="text/css">

      .scroll {

   max-height: 500px;

   overflow-y: auto;

}

.scroll::-webkit-scrollbar {

    width: 8px;

}



.scroll::-webkit-scrollbar-track {

    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 

    border-radius: 10px;

}



.scroll::-webkit-scrollbar-thumb {

    border-radius: 10px;

    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 

}



 .scroll2 {

   max-height: 500px;

   overflow-y: auto;

}

.scroll2::-webkit-scrollbar {

    width: 20px;

}



.scroll2::-webkit-scrollbar-track {

    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 

    border-radius: 10px;

}



.scroll2::-webkit-scrollbar-thumb {

    border-radius: 10px;

    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 

}





    </style>

  <!--/page_bannner start-->

  <!-- <div class="carousel-item active" style="background-image:url('images/1.jpg'); background-size:cover; height:200px; width:100%;">

    <div class="carousel-caption1">

     

      <div class="breadcrumbs">

        <div class="container">

          

         

        </div>

      </div>

    </div>

  </div> -->

  <!--/page_banner end--> 



   <!-- /blog start -->

  <section class="news" id="blog">

    <div class="container">

      <div class="row">

      

        <div class="col-md-12">

          <div class="owl-carousel owl-theme ss_carousel latests_news_slider" id="slider2">
             @foreach ($intervenant as $intervenants)

            <div class="item" style="background: #e3f2dd;">

              <hr>

              <div class="row">

                <div class="col-md-4">

                   <div class="team-block col-md-12 col-sm-12 col-xs-12">

              <div class="inner-box">

                <div class="image"> <img src="{{ asset('images/portrait/'.$intervenants->image.'')}}" class="attachment-globalindustry_265x400 size-globalindustry_265x400 wp-post-image" style="height: 380px;">

               <ul class="social-icon-one">

                    <li><a target="_blank" href="{{$intervenants->facebook}}"><span class="fa fa fa-facebook"></span></a></li>

                    <li><a target="_blank" href="{{$intervenants->twitter}}"><span class="fa fa fa-twitter"></span></a></li>

                    <li><a target="_blank" href="{{$intervenants->linkedin}}"><span class="fa fa fa-linkedin"></span></a></li>

                  </ul>

                </div>

                <div class="lower-box" style="background-color: #0d9457 !important;">

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

                <div class="col-md-8">

                   <div class="row">

                     <div class="col-md-12 scroll">

                      <h2>
                       @if(langue()=='En')
               Biography
               @elseif(langue()=='Fr')
                Biographie
                @else
                Biographie
               @endif
             </h2>

                <img class="img-fluid" src="{{asset('images/about_border.png')}}" alt="border_img" style="width: 20%;">

                     <p style="text-align: justify-all;">
                       @if(langue()=='En')
                    {!!$intervenants->description_en!!}
               @elseif(langue()=='Fr')
                {!!$intervenants->description!!}
                @else
                 {!!$intervenants->description!!}
               @endif
                       
                     </p>

                      

                     </div>

                    <!--  <div class="col-md-6 scroll2">

                      <div class="row" style="padding-right: 0px;">
                        <?php $pannel=pannel($id_intervenant); ?>
                        @foreach ($pannel as $pannels)

                        <div class="col-md-12" style="padding-right: 0px;margin-top: 1px;">

                          <div class="news_date">

                <p>{{(new DateTime($pannels->date))->format("d")}}<br>

                  <span>
                  {{(new DateTime($pannels->date))->format("M")}}
             </span></p>

              </div>

              <div class="blog_box" style="padding-bottom: 0px;">

                <div class="blog_detail">
                   @if(langue()=='En')
               <h2 style="width: 90%;">{{$pannels->libelle_en}}</h2>
               @elseif(langue()=='Fr')
                <h2 style="width: 90%;">{{$pannels->libelle}}</h2>
                @else
                <h2 style="width: 90%;">{{$pannels->libelle}}</h2>
               @endif

                  

                  <div class="border_blog"></div>

                  <div class="user_name">

                    <p><i class="fa fa-calendar" aria-hidden="true"></i>
                    @if(langue()=='En')
               {{(new DateTime($pannels->date))->format("d")}} {{(new DateTime($pannels->date))->format("M")}} {{$pannels->heure_en}}
               @elseif(langue()=='Fr')
                {{(new DateTime($pannels->date))->format("d")}} {{(new DateTime($pannels->date))->format("M")}} {{$pannels->heure_en}}
                @else
                {{(new DateTime($pannels->date))->format("d")}} {{(new DateTime($pannels->date))->format("M")}} {{$pannels->heure_en}}
               @endif
                </p>

                  </div>

                </div>

              </div>

                        </div>
            @endforeach


                       

                      </div>

              

                     </div> -->

                   </div>

                </div>

              </div>

              <hr>

            </div>
            @endforeach





           @foreach ($intervenant2 as $intervenants)
 
 @if($intervenants->id==$id_intervenant)

 @else

            <div class="item" style="background: #e3f2dd;">

              <hr>

              <div class="row">

                <div class="col-md-4">

                   <div class="team-block col-md-12 col-sm-12 col-xs-12">

              <div class="inner-box">

                <div class="image"> <img src="{{ asset('images/portrait/'.$intervenants->image.'')}}" class="attachment-globalindustry_265x400 size-globalindustry_265x400 wp-post-image" style="height: 380px;">

               <ul class="social-icon-one">

                    <li><a target="_blank" href="{{$intervenants->facebook}}"><span class="fa fa fa-facebook"></span></a></li>

                    <li><a target="_blank" href="{{$intervenants->twitter}}"><span class="fa fa fa-twitter"></span></a></li>

                    <li><a target="_blank" href="{{$intervenants->linkedin}}"><span class="fa fa fa-linkedin"></span></a></li>

                  </ul>

                </div>

                <div class="lower-box" style="background-color: #0d9457 !important;">

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

                <div class="col-md-8">

                   <div class="row">

                     <div class="col-md-12 scroll">

                      <h2>
                       @if(langue()=='En')
               Biography
               @elseif(langue()=='Fr')
                Biographie
                @else
                Biographie
               @endif
             </h2>

                      <img class="img-fluid" src="{{asset('images/about_border.png')}}" alt="border_img" style="width: 20%;">
                      @if(langue()=='En')
                    {!!$intervenants->description_en!!}
               @elseif(langue()=='Fr')
                {!!$intervenants->description!!}
                @else
                 {!!$intervenants->description!!}
               @endif

                      

                     </div>

                   <!--   <div class="col-md-6 scroll2">

                      <div class="row" style="padding-right: 0px;">

                      <?php $pannel=pannel($intervenants->id); ?>
                        @foreach ($pannel as $pannels)

                        <div class="col-md-12" style="padding-right: 0px;margin-top: 1px;">

                          <div class="news_date">

                <p>{{(new DateTime($pannels->date))->format("d")}}<br>

                  <span>
                  {{(new DateTime($pannels->date))->format("M")}}
             </span></p>

              </div>

              <div class="blog_box" style="padding-bottom: 0px;">

                <div class="blog_detail">
                   @if(langue()=='En')
               <h2 style="width: 90%;">{{$pannels->libelle_en}}</h2>
               @elseif(langue()=='Fr')
                <h2 style="width: 90%;">{{$pannels->libelle}}</h2>
                @else
                <h2 style="width: 90%;">{{$pannels->libelle}}</h2>
               @endif

                  

                  <div class="border_blog"></div>

                  <div class="user_name">

                    <p><i class="fa fa-calendar" aria-hidden="true"></i>
                    @if(langue()=='En')
               {{(new DateTime($pannels->date))->format("d")}} {{(new DateTime($pannels->date))->format("M")}} {{$pannels->heure_en}}
               @elseif(langue()=='Fr')
                {{(new DateTime($pannels->date))->format("d")}} {{(new DateTime($pannels->date))->format("M")}} {{$pannels->heure_en}}
                @else
                {{(new DateTime($pannels->date))->format("d")}} {{(new DateTime($pannels->date))->format("M")}} {{$pannels->heure_en}}
               @endif
                </p>

                  </div>

                </div>

              </div>

                        </div>
            @endforeach

                       

                      </div>

              

                     </div> -->

                   </div>

                </div>

              </div>

              <hr>

            </div>
    @endif
            @endforeach

           

          </div>

          <div class="clearfix"></div>

        </div>

      </div>

    </div>

  </section>

  <!-- /blog end --> 



   @stop