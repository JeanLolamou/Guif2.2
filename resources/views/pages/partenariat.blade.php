@extends('templates/default',['title'=>'GUIF | SPONSORS'])
        

    @section('contenu')
    <style type="text/css">
      .hide{
          opacity: 0px;
      }
    </style>
  <!--/page_bannner start-->
  <div class="carousel-item active" style="background-image:url(images/Guif2/triangle.png); background-size:cover; height:200px; width:100%;">
    <div class="carousel-caption1" style="text-align: left;">
      
      <div class="breadcrumbs">
        <div class="container">
          <!--  <div class="about_btn" style="position: absolute;left: 10px;top: 10px;"> <a href="{{route('inscription')}}" class="get_started" style="">S'inscrire</a><a href="{{route('partenariat')}}" class="explore">Devenir partenaire</a></div> -->
         
        </div>
      </div>
    </div>
  </div>
  <!--/page_banner end--> 

   <section class="contact_page">
  <div class="container">
    <div class="row">
      
      <div class="col-md-12" style="margin: 0 auto;">
      <div class="get_title" style="font-weight: bold;">
       Être partenaire du Forum, c’est un statut prestigieux qui est accordé aux entreprises prospères qui sont reconnues dans les milieux d’affaires. Le statut de partenaire confère des possibilités réelles de promotion de son activité sur la plateforme du GUIF.
      </div>
      <br>
      <div class="row slideInRight" >
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <div class="about_title">
              <h2>De quoi bénéficie le partenaire ?</h2>
              
            </div>
            <div class="row" style="margin-top: 30px;">
              <div class="col-md-6" style="margin-bottom: 10px;">
                <div class="row">
                  <div class="col-md-2">
                    <img class="img-fluid" src="images/p1.png" alt="business_planning">
                  </div>
                  <div class="col-md-10">
                    <p>Des formats uniques de participation au programme d’affaires, un renforcement des contacts, un échange d’expérience, des informations sur les grandes tendances mondiales, ainsi que l’opportunité d’organiser une présentation ou une conférence de presse.</p>
                  </div>
                </div>
               
              </div>
               <div class="col-md-6" style="margin-bottom: 10px;">
                <div class="row">
                  <div class="col-md-2">
                    <img class="img-fluid" src="images/p2.png" alt="business_consultancy">
                  </div>
                  <div class="col-md-10">
                     <p>Un auditoire de plus de 2000 personnes parmi lesquelles les dirigeants politiques et économiques de la Guinée, les institutions financières, les représentants des pays, les dirigeants des grandes entreprises, les médias, les experts sectoriels,etc.</p>
                  </div>
                </div>
               
              </div>

               <div class="col-md-6" style="margin-bottom: 10px;">
                <div class="row">
                  <div class="col-md-2">
                    <img class="img-fluid" src="images/p3.png" alt="financial-services">
                  </div>
                  <div class="col-md-10">
                     <p>La possibilité d’utiliser les plateformes de discussions pour organiser des rencontres d’affaires et des négociations à tous niveaux, de procéder à des présentations de vos derniers développements et projets au cours de l’exposition, et de participer aux visites touristiques.</p>
                  </div>
                </div>
               
              </div>

               <div class="col-md-6" style="margin-bottom: 10px;">
                <div class="row">
                  <div class="col-md-2">
                    <img class="img-fluid" src="images/p4.png" alt="expert_advisers">
                  </div>
                  <div class="col-md-10">
                     <p>Un responsable exclusivement affecté par le GUIF.</p>
                  </div>
                </div>
               
              </div>
             
          
          
            </div>
          </div>
        </div>

         <div class="row" id="proposition">
    <div class="col-md-12" style="margin: 0 auto;text-align: center;">
       <div class="about_title">
      <h2>Propositions de partenariat</h2>
      <br>
    </div>
    </div>
              <div class="col-md-12">
               <h3 style="color: red;">Partenaire général</h3>
               <p>Être partenaire général du forum, c’est un statut prestigieux qui est accordé aux plus grandes entreprises reconnues par les leaders des milieux d’affaires.</p><p>
Ce statut permet de participer à toutes les rencontres du programme d’affaires de façon prioritaire, d’obtenir un soutien en matière d’information de la part des médias guinéens et étrangers, d’organiser ses propres zones d’échanges et de présenter des nouveaux projets et services à l’auditoire du forum.
</p>
              </div>
              

               <div class="col-md-6">
               <h3 style="color: red;">Partenaire du programme d’affaires</h3>
               <p>Être partenaire du programme d’affaires permet à une entreprise qui partage les principes du forum d’être en mesure de proposer une analyse originale et approfondie des thématiques figurant au programme.</p><p>
Les intervenants des entreprises partenaires bénéficient de l’opportunité de participer aux rencontres du programme d’affaires du forum.
</p>
              </div>

              <div class="col-md-6">
               <h3 style="color: red;">Partenaire pour l’organisation</h3>
               <p>Coopérer à l’organisation du forum permet à une entreprise de promouvoir ses activités en présentant ses produits et services aux participants du Forum.</p><p>
Une option supplémentaire permet aussi de bénéficier d’une plateforme de stand avec zone d’échanges.
</p>
              </div>
             
              
          
            </div>
             <div class="row">
    <div class="col-md-12" style="margin: 0 auto;text-align: center;">
       <div class="about_title">
      <h2>Contacts</h2>
    </div>
      <p>Si vous êtes intéressés à devenir partenaire du Forum économique Russie-Afrique, vous pouvez nous écrire par courrier électronique à l’adresse <a href="mailto:guif@apip.gov.gn">guif@apip.gov.gn</a> ou remplir le formulaire de demande et nous prendrons contact avec vous dès que possible.</p>
    </div>
  </div>

      <div class="contact_page_from">
        <h2>Devenir partenaire</h2>
        <form>
          <div class="row">
            
            <div class="col-lg-8 col-md-8">
              <input name="nom" class="contact_form_detail" required="" type="text" placeholder="Prénom, Nom">
            </div>
           
            
           
             <div class="col-lg-4  col-md-6">
              <select class="contact_form_detail" name="categorie">
                <option>Organisation</option>
                <option value="Entreprise">Entreprise</option>
                <option value="Gouvernement">Gouvernement</option>
              <option value="Institution-internationale">Institutions internationales</option>
              <option value="Ambassade">Ambassade</option>
              <option value="Patronats">Patronats</option>
              <option value="Autres">Autres</option>

              
              </select>
             
            </div>
             <div class="col-lg-4  col-md-6">
              <input name="entreprise" class="contact_form_detail"  type="text" placeholder="Nom Organisation">
            </div>
              <div class="col-lg-4  col-md-6">
              <input name="poste" class="contact_form_detail"  type="text" placeholder="Poste occupé">
            </div>
             <div class="col-lg-4  col-md-6">
              <input name="pays" class="contact_form_detail"  type="text" placeholder="Pays">
            </div>
            <div class="col-lg-4 col-md-6">
              <input name="tel" class="contact_form_detail" required="" type="text" placeholder="Téléphone">
            </div>
            <div class="col-lg-4 col-md-6">
              <input name="email" class="contact_form_detail" required="" type="email" placeholder="Email">
            </div>
             <div class="col-lg-4  col-md-6">
              <input name="adresse" class="contact_form_detail"  type="text" placeholder="Adresse">
            </div>
           
            <div class="col-lg-4 col-md-4">
              <input name="site" class="contact_form_detail" required="" type="text" placeholder="Site web">
            </div>
             <div class="col-lg-6 col-md-6">
              <input name="submit" class="submit_btn" type="submit" value="Envoyer">
            </div>
          
          
          </div>
        </form>
      </div>
    </div>
  </div>
  </div>
</section>

   @stop