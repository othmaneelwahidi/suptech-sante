<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="{{ asset('style/css/web_page_style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@400;500;600;700&family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <title>Suptech santé</title>
</head>

<body style="background-color: #010511">
    <!--___________________________________________________topnav________________________________________________________________________________________-->
    <div class="row d-flex block">
        <a class="tablink text-center align-content-center col-lg-3 col-md-3" href="https://www.frdisi.ma/fr"
            target="_blank"><img src="{{asset('SUPTECH_SANTE-main/assets/FRDSI logo.png')}}" title="FRDSI" class="img-fluid" style="max-height: 3em;"
                alt="FRDSI" /> </a>
        <a class="tablink text-center align-content-center col-lg-3 col-md-3 " href="{{('home')}}">Suptech Sante</a>
        <a class="tablink text-center align-content-center col-lg-3 col-md-3 on" href="{{('suptech-envirenment')}}">Suptech
            Environnement</a>
        <a class="tablink text-center align-content-center col-lg-3 col-md-3 " href="{{('contact-us')}}">Contat Us</a>
    </div>
    <!--____________________________________________________header_____________________________________________________________________-->

   
    <!--==========================================================body.. the real body .. i mean the core .. heck whatever. ============================================-->
    @yield('content')
    <!--========== a totaaaa2 lbaroud aaa totaa2 lbarouuud ====================lfooter =======================-->
    
    <!-- Bootstrap JS  -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



    <script src="{{asset('SUPTECH_SANTE-main/assets/main.js')}}"></script>
</body>

</html>
