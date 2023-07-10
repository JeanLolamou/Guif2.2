@extends('templates/default',['title'=>'GUIF | CONTACT'])
        

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

   <section class="contact_page">
  <div class="container">
    <div class="row">
       <div class="col-md-4">
       
        <div class="get_title1">
         
          <div class="address_box">
            <div class="add_box">
              <h4>
              @if(langue()=='En')
              Forum location:
               @elseif(langue()=='Fr')
                Lieu du forum:
                @else
                Lieu du forum:
               @endif
             </h4>
              <p>Expo 2020 Dubaï</p>
            </div>
          </div>
          <div class="call_box">
            <div class="call_box"> <i class="fa fa-envelope" aria-hidden="true" style="color: #0d9457;"></i>
              <h4>
               @if(langue()=='En')
              You have a question ?
               @elseif(langue()=='Fr')
                Vous avez une question ?
                @else
                Vous avez une question ?
               @endif
             </h4>
              <p><a href="#">guif@apip.gov.gn</a></p>
            </div>
          </div>
          <div class="call_box"> <i class="fa fa-phone" aria-hidden="true" style="color: #0d9457;"></i>
            <h4>
             @if(langue()=='En')
              Call us
               @elseif(langue()=='Fr')
                Appelez-nous
                @else
                Appelez-nous
               @endif
             </h4>
            <p><a href="#">+224 624 93 12 12</a></p>
          </div>
          <div class="call_box"><i class="fa fa-fax" aria-hidden="true" style="color: #0d9457;"></i>
            <h4>Fax</h4>
            <p><a href="#">+224 624 93 12 12</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-8">
      <div class="get_title">
        <h2>
         @if(langue()=='En')
              Contact us
               @elseif(langue()=='Fr')
                 Nous contacter
                @else
                 Nous contacter
               @endif
            </h2>
      </div>
      <div class="contact_page_from">
         @if(langue()=='En')
              <form>
          <div class="row">
            <div class="col-lg-4 col-md-6">
              <input name="nom" class="contact_form_detail" required="" type="text" placeholder="First name, Last name">
            </div>

             <div class="col-lg-4 col-md-6">
              <input name="email" class="contact_form_detail" required="" type="email" placeholder="E-mail">
            </div>
          
            <div class="col-lg-4 col-md-6">
              <input name="tel" class="contact_form_detail" required="" type="text" placeholder="Phone number">
            </div>
           
            <div class="col-lg-4  col-md-6">
              <input name="entreprise" class="contact_form_detail"  type="text" placeholder="Company">
            </div>
           
            <div class="col-sm-6  col-md-12">
              <textarea name="message" class="contact_form_detail1" required="" placeholder="Your Message"></textarea>
            </div>
            <div class="col-md-12">
              <div class="submit_btn_box_page">
                <input name="submit" class="submit_btn" type="submit" value="Send" style="background: #0d9457;">
              </div>
            </div>
          </div>
        </form>
               @elseif(langue()=='Fr')
                 <form>
          <div class="row">
            <div class="col-lg-4 col-md-6">
              <input name="nom" class="contact_form_detail" required="" type="text" placeholder="Nom, Prenom">
            </div>

             <div class="col-lg-4 col-md-6">
              <input name="email" class="contact_form_detail" required="" type="email" placeholder="Email">
            </div>
          
            <div class="col-lg-4 col-md-6">
              <input name="tel" class="contact_form_detail" required="" type="text" placeholder="Téléphone">
            </div>
           
            <div class="col-lg-4  col-md-6">
              <input name="entreprise" class="contact_form_detail"  type="text" placeholder="Entreprise">
            </div>
           
            <div class="col-sm-6  col-md-12">
              <textarea name="message" class="contact_form_detail1" required="" placeholder="Votre Message"></textarea>
            </div>
            <div class="col-md-12">
              <div class="submit_btn_box_page">
              <input name="submit" class="submit_btn" type="submit" value="Envoyer" style="background: #0d9457;">
              </div>
            </div>
          </div>
        </form>
               @endif
       
      </div>
    </div>
  </div>
  </div>
</section>

   @stop