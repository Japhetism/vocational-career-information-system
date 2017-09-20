<!DOCTYPE html> 
<html lang="en">
@include('partials._head')
<script>
   var baseUrl = "{{url('')}}";
 </script>
    <body>
    @include('partials._nav') 
    @include('partials._navigation')     
        <div class="container">
        <div class="row">
            @yield('content') 
        </div>
        </div>
    @include('partials._footer')        
    @include('partials._javascript')    
    </body>
</html>