 <aside class="sidebar">
      <section id="advance_search_widget-2" class="widget advance-search clearfix Advance_Search_Widget"><h4 class="title search-heading">Trouvez votre maison<i class="fa fa-search"></i></h4>
    <div class="as-form-wrap">
       <form class="advance-search-form rh_classic_advance_search_form clearfix"
              action="{{route('trouver')}}" method="post">
                   {{ csrf_field() }}


                 <div class="wrapper-search-form-grid">
        
  <div class="option-bar rh-search-field small">
    <label for="select-property-type">Type de propriété</label>
    <span class="selectwrap">
        <select name="type" id="select-property-type" class="search-select">
          <option value="tout" selected="selected">Tout</option>
          <option value="Immeuble">Immeuble</option>
          <option value="Villa">Villa</option>
          <option value="Terrain">Terrain</option>
          <option value="Meuble">Meuble</option>
          <option value="Bail">Bail</option>
          <option value="Vehicule">Vehicule</option> 
          <option value="Engin">Engin Lourd</option> 
          <option value="Groupe">Groupe Electrogène</option> 
        </select>
    </span>
</div><div class="option-bar rh-search-field small">
    <label for="select-status">Statut    </label>
    <span class="selectwrap">
        <select name="status" id="select-status" class="search-select">
            <option value="Tout" selected="selected">Tout</option>
            <option value="louer">A Louer </option>
            <option value="Vendre">A vendre</option>  
        </select>
    </span>
</div>  <div class="option-bar rh-search-field small rh_classic_search__select rh_location_prop_search_0" data-get-location-placeholder="Any">
    <label for="location">
      Localisation    
    </label>
        <span class="">
           <input type="text" name="lieu">
        </span>
  </div>
  <div class="button-wrapper-flex">
    <div class="option-bar">
      <input type="submit" value="Recherche" class="real-btn btn">
    </div>               
   </div>
   </div>
 <div class="button-wrapper-widget-search">
   <div class="option-bar">
      <input type="submit" value="Recherche" class="real-btn btn">
   </div> 
 </div>
        <div class="clearfix"></div>

 

  
  

        </form>
    </div>
</section>
</aside>