<!doctype html>
<html lang="en">

@include('layout.head')
<body>



<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets_admin/img/sidebar-5.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->

@include('layout.nav')
    </div>

    <div class="main-panel">
       @include('layout.navbar')

<!--   <div class="alert alert-success">
                                    <button type="button" aria-hidden="true" class="close">×</button>
                                    <span><b> Success - </b> This is a regular notification made with ".alert-success"</span>
                                </div>    
                            -->

                            @if ( Session::has('flash_message') )
 
  <div class="alert {{ Session::get('flash_type') }}">
  	 <button type="button" aria-hidden="true" class="close">×</button>
      
      <span>{{ Session::get('flash_message') }}</span>
  </div>
  
@endif
                                  
    @yield('content')
    

@include('layout.footer')

    </div>
</div>


</body>


</html>
