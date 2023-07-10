
<header style="background-image: url('{{asset('images/Guif2/green.jpg')}}');">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="main-nav">
            <input id="main-menu-state" type="checkbox"/>
            <label class="main-menu-btn" for="main-menu-state" style="background: #fff;"> <span class="main-menu-btn-icon"></span> Toggle main menu visibility </label>
          <a href="{{route('accueil')}}"> 
             @if(langue()=='En')
                <img src="{{asset('images/Guif2/LOGO.png')}}" style="position: absolute;max-height: 130px;width: 150px;"> 
               @elseif(langue()=='Fr')
                 <img src="{{asset('images/Guif2/LOGO.png')}}" style="position: absolute;max-height: 130px;width: 150px;">
               @else
                <img src="{{asset('images/Guif2/LOGO.png')}}" style="position: absolute;max-height: 130px;width: 150px;">
               @endif
               </a>
            <ul id="main-menu" class="sm sm-clean" style="">
              <li class=""><a href="{{route('accueil')}}" style="color: #000;">
              @if(langue()=='En')
               HOME
               @elseif(langue()=='Fr')
                ACCUEIL
               @else
                ACCUEIL
               @endif
             </a></li>
              <li class=""><a href="{{route('forum')}}" style="color: #000;">
               @if(langue()=='En')
               EVENT FORMAT
               @elseif(langue()=='Fr')
                 FORUM
                @else
                 FORUM
               @endif
             </a></li>
              <!-- <li><a href="#" style="color: #000;">
               @if(langue()=='En')
               EVENT FORMAT
               @elseif(langue()=='Fr')
                 FORUM
                @else
                 FORUM
               @endif</a>
              	<ul style="background: #fff;">
              		<li><a href="{{route('forum')}}" style="color: #212529;">
                   @if(langue()=='En')
               Event
               @elseif(langue()=='Fr')
                Forum
                @else
                Forum
               @endif
             </a></li>
              		<li><a href="{{route('lieuForum')}}" style="color: #212529;">
                   @if(langue()=='En')
               Where
               @elseif(langue()=='Fr')
                Lieu du forum
                @else
                Lieu du forum
               @endif
             </a></li>
              <li><a href="{{route('venue')}}" style="color: #212529;">
                   @if(langue()=='En')
               Accessibility 
               @elseif(langue()=='Fr')
                Accessibilité 
                @else
                Accessibilité 
               @endif
             </a></li>
             <li><a href="{{route('covid')}}" style="color: #212529;">
                   @if(langue()=='En')
               COVID-19  
               @elseif(langue()=='Fr')
                COVID-19  
                @else
                COVID-19  
               @endif
             </a></li>
              		
              	</ul>
              </li> -->
              <li><a href="#" style="color: #000;">
                 @if(langue()=='En')
               Practical information
               @elseif(langue()=='Fr')
                Infos Pratiques
                @else
                Infos Pratiques
               @endif
             
             </a>
                <ul style="background: #fff">
                    <li><a href="{{route('infoPratique')}}" style="color: #212529;">
                  @if(langue()=='En')
               Practical information
               @elseif(langue()=='Fr')
                Infos Pratiques
                @else
                Infos Pratiques
               @endif
             </a></li>
              		<li><a href="{{route('programmeConference')}}" style="color: #212529;">
                  @if(langue()=='En')
               Program
               @elseif(langue()=='Fr')
                Programme et Intervenants
                @else
                Programme et Intervenants
               @endif
             </a></li>
              	<!-- 	<li><a href="{{route('intervenant')}} " style="color: #212529;">
                    @if(langue()=='En')
               Speakers
               @elseif(langue()=='Fr')
                Intervenants
                @else
                Intervenants
               @endif
             </a></li> -->
                  <li><a href="{{route('exposition')}}" style="color: #212529;">
                  @if(langue()=='En')
                 Partners
               @elseif(langue()=='Fr')
                 Partenaires
               @else
                Partenaires
               @endif
             </a></li>
                
              	</ul>
              </li>
              <li><!-- <a href="{{route('partenaire')}}" style="color: #000;"> -->
                <a href="https://apip.gov.gn/Raisons-d-investir-en-Guin%C3%A9e" target="_blank" style="color: #000;">
                @if(langue()=='En')
               INVEST IN GUINEA
               @elseif(langue()=='Fr')
                INVESTIR EN GUINEE
                @else
                INVESTIR EN GUINEE
               @endif
             </a></li> 
              <!-- <li><a href="{{route('galerie')}}" style="color: #000;">
               @if(langue()=='En')
               Gallery
               @elseif(langue()=='Fr')
                Galerie
                @else
                Galerie
               @endif
             </a></li>    -->         
             <!--  <li><a href="{{route('contact')}}" style="color: #000;">
               @if(langue()=='En')
               Contact
               @elseif(langue()=='Fr')
                Contact
                @else
                Contact
               @endif
             </a></li> -->
              <li><a class="main-search" href="#" style="color: #000;"><i class="fa fa-search" style="color: #212529;font-weight: bold;font-size: 22px;"></i></a></li>
              <li><a href="" style="color: #000;font-weight: bold;">|</a></li>

               <li>
                @if(langue()=='En')
                <a href="{{route('changelangueFr')}}" style="color: #000;">Fr</a>
                @elseif(langue()=='Fr')
                 <a href="{{route('changelangueEn')}}" style="color: #000;">En</a>
               @else
                 <a href="{{route('changelangueFr')}}" style="color: #000;">Fr</a>
               @endif
              </li>
            </ul>
            <div class="header-right-link">
              @if(langue()=='En')
                  <form action="#">
                <div class="search-option" style="display: none;">
                  <input type="text" placeholder="Search...">
                  <button class="button" type="submit" style="color: #000;"><i class="fa fa-search" style="color: #000;"></i></button>
                </div>
              </form>
               @elseif(langue()=='Fr')
                  <form action="#">
                <div class="search-option" style="display: none;">
                  <input type="text" placeholder="Rechercher...">
                  <button class="button" type="submit" style="color: #000;"><i class="fa fa-search" style="color: #000;"></i></button>
                </div>
              </form>
               @else
                  <form action="#">
                <div class="search-option" style="display: none;">
                  <input type="text" placeholder="Rechercher...">
                  <button class="button" type="submit" style="color: #000;"><i class="fa fa-search" style="color: #000;"></i></button>
                </div>
              </form>
               @endif
             
            </div>
          
          </nav>
        </div>

        
      </div>
    </div>
      <div class="btnregister hidephone" style="z-index: 11111;">
  <a target="_blank" href="https://bsplan.guineainvestmentforum.com/login" class="" style="color: #fff;font-size: 14px;text-transform: uppercase;">
    <i class="fa fa-user-plus"></i>
           @if(langue()=='En')
                Login
                
               @elseif(langue()=='Fr')
                 Se connecter
               @else
                Se connecter
               @endif
               </a>
               <span style="color: #fff;">|</span>
               <a target="_blank" href="https://bsplan.guineainvestmentforum.com/Inscription-sur-la-plateforme" class="" style="color: #fff;font-size: 14px;text-transform: uppercase;">
    <i class="fa fa-plus-square"></i>
           @if(langue()=='En')
                Submit your project
                
               @elseif(langue()=='Fr')
                 Soumettre votre projet
               @else
                Soumettre votre projet
               @endif
               </a>
            </div>

 
  </header>
  <!-- /header end --> 