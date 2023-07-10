@extends('templates/default',['title'=>'GUIF | INSCRIPTION'])
        

    @section('contenu')

    <style type="text/css">
      .zoom:hover{
  transform: scale(1.1);
  transition: all ease 500ms;
}

.zoom{
  transform: scale(1);
  transition: all ease 500ms;
}
    </style>
  <!--/page_bannner start-->
  <div class="carousel-item active" style="background-image:url(images/1.jpg); background-size:cover; height:200px; width:100%;">
    <div class="carousel-caption1" style="text-align: left;">
      
      <div class="breadcrumbs d-sm-none d-md-block d-none d-sm-block">
        <div class="container">
           <div class="about_btn" style="position: absolute;right: 2px;top: 1px;"> <a href="{{route('inscription')}}" class="get_started" style="">S'inscrire</a><a href="{{route('partenariat')}}" class="explore">Devenir partenaire</a></div>
        
        </div>
      </div>
    </div>
  </div>
  <!--/page_banner end--> 

   <section class="contact_page">
    <div class="container">
  <div class="row">
    <div class="col-md-3 zoom" >
            <div class="well" style="box-shadow: 0 1px 16px #343a40d4;margin: 1px;padding: 15px;border-radius: 5px;border: 1px solid grey;" >
            <center><h2>Participation</h2></center>
            <p style="margin-bottom: 0px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nisi. Nulla quis sem at nibh elementum imperdiet.</p>
             <p style="margin-bottom: 0px;"><b><u>Accés :</u></b></p>
            <ul class="detail_plan" style="margin-top: 5px;">
               <li>Unlimited access</li>
              <li>Unlimited access</li>
              <li>Unlimited access</li>
              <li>Unlimited access</li>
              </ul>
            <hr>
            <p><center><a class="btn btn-info" href="{{route('formulaireParticipant')}}"><i class="icon-ok"></i> S'inscrire</a></center></p>
          </div>
        </div>
         <div class="col-md-3 zoom" >
            <div class="well" style="box-shadow: 0 1px 16px #343a40d4;margin: 1px;padding: 15px;border-radius: 5px;border: 1px solid #da7408;" >
            <center><h2 style="color: #da7408;">DealRoom</h2></center>
            <p style="margin-bottom: 0px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nisi. Nulla quis sem at nibh elementum imperdiet.</p>
             <p style="margin-bottom: 0px;color: #da7408;"><b><u>Accés :</u></b></p>
            <ul class="detail_plan" style="margin-top: 5px;">
               <li>Unlimited access</li>
              <li>Unlimited access</li>
              <li>Unlimited access</li>
              <li>Unlimited access</li>
              </ul>
            <hr>
            <p><center><a class="btn" href="{{route('formulaireDealRoom')}}" style="background: #da7408;color: #fff;"><i class="icon-ok"></i> S'inscrire</a></center></p>
          </div>
        </div>
         <div class="col-md-3 zoom" >
            <div class="well" style="box-shadow: 0 1px 16px #343a40d4;margin: 1px;padding: 15px;border-radius: 5px;border: 1px solid #106fb3;" >
            <center><h2 style="color: #106fb3;">Stand</h2></center>
            <p style="margin-bottom: 0px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nisi. Nulla quis sem at nibh elementum imperdiet.</p>
             <p style="margin-bottom: 0px;color: #106fb3;"><b><u>Accés :</u></b></p>
            <ul class="detail_plan" style="margin-top: 5px;">
               <li>Unlimited access</li>
              <li>Unlimited access</li>
              <li>Unlimited access</li>
              <li>Unlimited access</li>
              </ul>
            <hr>
            <p><center><a class="btn" href="{{route('packStand')}}" style="background: #106fb3;color: #fff;"><i class="icon-ok"></i> S'inscrire</a></center></p>
          </div>
        </div>

        <div class="col-md-3 zoom" >
            <div class="" style="box-shadow: 0 1px 16px #343a40d4;margin: 1px;padding: 15px;border-radius: 5px;border: 1px solid #eca939;" >
            <center><h2 style="color: #eca939;">Partenaire</h2></center>
            <p style="margin-bottom: 0px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nisi. Nulla quis sem at nibh elementum imperdiet.</p>
             <p style="margin-bottom: 0px;color: #eca939;"><b><u>Accés :</u></b></p>
            <ul class="detail_plan" style="margin-top: 5px;">
               <li>Unlimited access</li>
              <li>Unlimited access</li>
              <li>Unlimited access</li>
              <li>Unlimited access</li>
              </ul>
            <hr>
            <p><center><a class="btn" href="{{route('formulairePartenaire')}}" style="background: #eca939;color: #fff;"><i class="icon-ok"></i> S'inscrire</a></center></p>
          </div>
        </div>
        
  </div>
</div>
</section>

   @stop