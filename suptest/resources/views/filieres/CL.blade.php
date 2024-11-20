<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SUPTECH SANTE</title>
  <meta content="" name="description">
  <meta content="" name="keywords">



  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

  @include('layouts.MainCss')






</head>

<body>

  

  
  <!-- ======= Header ======= -->
  @include('layouts.header')
      <!-- .navbar -->

     
  <!-- End Header -->


  <div class="row mb-4"> </div>
  <div class="row mb-4"> </div>

  <div class=" text-center" data-aos="fade-up">
  <h2 id="tit">  {{ __('messages.licence') }}</h2>
</div>

<section class="counts section-bg">
      <div class="container">
     
        <div class="row">

         
          <h2 data-aos="fade-up" > {{ __('messages.fs') }}:  </h2>
      <div class="row mb-4"> </div>
          <div class="col-lg-12 col-md-6 text-center " data-aos="fade-up">
          <div class="count-box sector">
              <i class="bi bi-simple-smile" style="color: #20b38e;"></i>
              <a href="{{ route('lpm', ['slug' => App::getLocale()]) }}" ><h4>- {{ __('messages.lpmgb') }}. </h4></a>
              <a href="{{ route('lpg', ['slug' => App::getLocale()]) }}" ><h4>- {{ __('messages.lpgil') }}. </h4></a>
              <a href="{{ route('lpi', ['slug' => App::getLocale()]) }}" ><h4>- {{ __('messages.lpidsd') }}. </h4></a>
              <a href="{{ route('lps', ['slug' => App::getLocale()]) }}" ><h4>- {{ __('messages.lpsg') }}. </h4></a>
              <a href="{{ route('ltlbm', ['slug' => App::getLocale()]) }}" ><h4>- {{ __('messages.ltlbm') }}. </h4></a>
              <a href="{{ route('lip', ['slug' => App::getLocale()]) }}" ><h4>- {{ __('messages.lip') }}. </h4></a>
              <a href="{{ route('liar', ['slug' => App::getLocale()]) }}" ><h4>- {{ __('messages.liar') }}. </h4></a>
              <a href="{{ route('liibo', ['slug' => App::getLocale()]) }}" ><h4>- {{ __('messages.liibo') }}. </h4></a>
              

            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End sectors Section -->   
   
  </main><!-- End #main -->




  <!-- ======= Footer ======= -->

  @include('layouts.footer')

<!-- End Footer -->  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

@include('layouts.MainJs')
<script>  
        $(".changeLang").change(function(){
            if($(this).val() == 'fr'){
                window.location.href = "/fr/cl";
            }else if($(this).val() == 'ar'){
                window.location.href = "/ar/cl";
            }
        });
    </script>
</body>

</html>