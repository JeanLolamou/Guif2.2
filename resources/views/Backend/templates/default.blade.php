  @include('Backend/templates/partials/_header')

  <div id="wrapper">

   @include('Backend/templates/partials/_menu')

    <div id="content-wrapper">

      <div class="container-fluid">

        @yield('contenu')

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
     @include('Backend/templates/partials/_footer')

    
