<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="{{ asset('SUPTECH_SANTE-main/assets/styles.css') }}">
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



    <style>
        
      .dropdown__tit{
        font-weight:700;
        font-size:16px;
        margin-left:10px;
      }
     
        .dropdown__lin{
            margin-left:-30%;
            font-weight:600;
            font-size:14px;
        }
 .dropdown__link{
    margin-left:-5%;
 }

 .dropdown__links{
    margin-left:-10%;
            font-weight:600;
            font-size:14px;
 }
.dropdown__lien{
    font-weight:600;
    margin-left:-14%;
    font-size:14px;
}
@media screen and (max-width: 768px) {
    .dropdown__tit {
        font-size: 14px;  /* Smaller font size on smaller screens */
        margin-left: 8px;  /* Adjust left margin */
    }
}
@media screen and (max-width: 768px) {
    .bourses {
        margin-left: 0;
         
        margin-left:-10px
    }

    .dropdown__titl {
        margin-left: 10px; /* Adjust left margin */
        font-size: 12px; /* Reduce font size for small screens */
    }

    .dropdown__lin {
        margin-left: 0; /* Adjust left margin */
        font-size: 12px; /* Reduce font size */
    }

    .dropdown__link {
        margin-left: 0; /* Adjust left margin */
    }

    .dropdown__links {
        margin-left: 0; /* Adjust left margin */
        font-size: 12px; /* Reduce font size */
    }

    .dropdown__lien {
        margin-left: 0; /* Adjust left margin */
        font-size: 12px; /* Reduce font size */
    }
}
/* For media screens (max-width: 768px) */
@media screen and (max-width: 768px) {
    .nav__toggle {
        position: absolute; /* Remove it from the normal flow */
        right: 0; /* Push it to the far right */
        top: 50%; /* Center vertically (optional) */
        transform: translateY(-50%); /* Adjust for perfect vertical centering */
    }
}
</style>

</head>

<body style="height: 100% !important;">
    <!--___________________________________________________topnav________________________________________________________________________________________-->
    <div class="row d-flex block">
        <a class="tablink text-center align-content-center col-lg-3 col-md-3" href="https://www.frdisi.ma/fr"
            target="_blank"><img src="{{asset('SUPTECH_SANTE-main/assets/FRDSI logo.png')}}" title="FRDSI" class="img-fluid" style="max-height: 3em;"
                alt="FRDSI" /> </a>
        <a class="tablink text-center align-content-center col-lg-3 col-md-3 on" href="{{('home')}}">Suptech Sante</a>
        <a class="tablink text-center align-content-center col-lg-3 col-md-3" href="{{('suptech-envirenment')}}">Suptech
            Environnement</a>
        <a class="tablink text-center align-content-center col-lg-3 col-md-3" href="{{('contact-us')}}">Contat Us</a>
    </div>
    <!--____________________________________________________header_____________________________________________________________________-->

    <header class="header sticky-top">
        <nav class="nav containerH">
            <div class="nav__data">
          
                <a href="{{('home') }}" class="nav__logo">
                    <img src="{{asset('SUPTECH_SANTE-main/assets/Suptech logo transp.png')}}" class="img-fluid logo" style="max-width: 12em;"
                        alt="logo suptech sante" />
                </a>

                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-menu-line nav__toggle-menu"></i>
                    <i class="ri-close-line nav__toggle-close"></i>
                </div>
            </div>

            <!--=============== NAV MENU ===============-->
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li>
                        <a href="{{('home') }}" class="nav__link ">Accueil</a>
                    </li>
                    <li>
                        <a href="{{('campuses') }}" class="nav__link">Campuses</a>
                    </li>
                    <!--=============== DROPDOWN 1 ===============-->
                    <li class="dropdown__item">
                        <div class="nav__link dropdown__button">
                            <a href="{{('formations')}}">Formations</a><i class="ri-arrow-down-s-line dropdown__arrow"></i>
                        </div>

                        <div class="dropdown__container">
                            <div class="dropdown__content">
                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i><img src="{{asset('SUPTECH_SANTE-main/assets/master.png')}}" alt="" class="img-fluid"
                                                style="max-width: 1.25em;"></i>
                                    </div>
                                    <a href="{{('formations#master')}}" class="dropdown__title">Cycle Master</a>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="{{('MDMAR-initial')}}" class="dropdown__link">Master en dispositifs
                                                médicaux et affaires réglementaires</a>
                                        </li>
                                        <li>
                                            <a href="{{('MMBG-initial')}}" class="dropdown__link">Master en Maintenance et
                                                Génie biomédical </a>
                                        </li>
                                        <li>
                                            <a href="{{('MEMT-initial')}}" class="dropdown__link">Master en entreprenariat
                                                et Management Technologique</a>
                                        </li>
                                    </ul>

                                    <div class="dropdown__group">
                                        <div class="dropdown__icon">
                                            <i><img src="{{asset('SUPTECH_SANTE-main/assets/cycle-ingenieur.png')}}" alt="" class="img-fluid"
                                                    style="max-width: 1.25em;"></i>
                                        </div>
                                        <a class="dropdown__title" href="{{('formations#CI')}}">Cycle ingénieur</a>

                                        <ul class="dropdown__list">
                                            <li>
                                                <a href="{{('GB-initial')}}" class="dropdown__link">Génie Biomédical</a>
                                            </li>
                                            <li>
                                                <a href="{{('GDIAS-initial')}}" class="dropdown__link">Génie digital et
                                                    intelligence Artificielle en santé</a>
                                            </li>
                                            <li>
                                                <a href="{{('GBtech-initial')}}" class="dropdown__link">Ingénierie
                                                    Biotechnologie</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>


                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i><img src="{{asset('SUPTECH_SANTE-main/assets/cycle-licence.png')}}" alt="" class="img-fluid"
                                                style="max-width: 1em;"></i>
                                    </div>

                                    <a href="{{('formations#Licence')}}" class="dropdown__title">Cycle licence</a>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="{{('LMM-initial')}}" class="dropdown__link">Licence en Maintenance
                                                Médicale (L2M)</a>
                                        </li>
                                        <li>
                                            <a href="{{'LGIH-initial'}}" class="dropdown__link">Licence en Génie
                                                Industriel et Logistique Hospitalière (LGILH)</a>
                                        </li>
                                        <li>
                                            <a href="{{('LIDSED-initial')}}" class="dropdown__link">Licence en
                                                Informatique Décisionnelle et e-Santé (LIDe-S)</a>
                                        </li>
                                        <li>
                                            <a href="{{('LSG-initial')}}" class="dropdown__link">Licence en Sciences de
                                                Gestion (LSG)</a>
                                        </li>
                                        <li>
                                            <a href="{{('LGIH-initial')}}" class="dropdown__link">Licence en Techniques
                                                de Laboratoires de Biologie Médicale (LTech-Labo)</a>
                                        </li>
                                        <li>
                                            <a href="{{('LIP-initial')}}" class="dropdown__link">Licence Infirmier
                                                Polyvalent (LIP)</a>
                                        </li>
                                        <li>
                                            <a href="{{('LIAR-initial')}}" class="dropdown__link">Licence Infirmier en
                                                Anesthésie et Réanimation (LIAR)</a>
                                        </li>
                                        <li>
                                            <a href="{{('LIIBO-initial')}}" class="dropdown__link">Licence Infirmier en
                                                Instrumentalisation de Bloc Opératoire (L2IBO)</a>
                                        </li>
                                        <li>
                                            <a href="{{('LMMDSS-initial')}}" class="dropdown__link">Licence en Management
                                                et Marketing Digital du Sport et Santé</a>
                                        </li>
                                        <li>
                                            <a href="{{('LIFDM-initial')}}" class="dropdown__link">Licence en Ingénierie
                                                et fabrication des dispositifs médicaux</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i><img src="{{asset('SUPTECH_SANTE-main/assets/classes-prepa.png')}}" alt="" class="img-fluid"
                                                style="max-width: 1.25em;"></i>
                                    </div>

                                    <a href="{{('formations#cycle')}}" class="dropdown__title">Cycle Classes
                                        préparatoires intégrées</a>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="{{('1sty-cycle-initial')}}" class="dropdown__link">1ère Année</a>
                                        </li>
                                        <li>
                                            <a href="{{('2nd-y-cycle-initial')}}" class="dropdown__link">2ème Année</a>
                                        </li>
                                    </ul>
                                </div>


                            </div>
                    </li>

                    <!--=============== DROPDOWN 2 ===============-->
                    <li class="dropdown__item">
                        <div class="nav__link dropdown__button">
                            <a href="{{('FormationsContinue')}}">Formations Continue</a><i
                                class="ri-arrow-down-s-line dropdown__arrow"></i>
                        </div>

                        <div class="dropdown__container">
                            <div class="dropdown__content">
                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i><img src="{{asset('SUPTECH_SANTE-main/assets/cycle-licence.png')}}" alt="" class="img-fluid"
                                                style="max-width: 1em;"></i>
                                    </div>

                                    <a href="{{('FormationsContinue#LicenceC')}}" class="dropdown__title">Bac+3</a>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="{{('LMM')}}" class="dropdown__link">Licence en Maintenance Médicale
                                                (L2M)</a>
                                        </li>
                                        <li>
                                            <a href="{{('LGILH')}}" class="dropdown__link">Licence en Génie Industriel et
                                                Logistique Hospitalière (LGILH).</a>
                                        </li>
                                        <li>
                                            <a href="{{('LIDSED')}}" class="dropdown__link">Licence en Informatique
                                                Décisionnelle et e-Santé (LIDe-S).</a>
                                        </li>
                                        <li>
                                            <a href="{{('LSG')}}" class="dropdown__link">Licence en Sciences de Gestion
                                                (LSG).</a>
                                        </li>
                                        <li>
                                            <a href="{{('LBM')}}" class="dropdown__link">Licence en Techniques de
                                                Laboratoires de Biologie Médicale (LTech-Labo).</a>
                                        </li>
                                        <li>
                                            <a href="{{('LIP')}}" class="dropdown__link">Licence Infirmier Polyvalent
                                                (LIP).</a>
                                        </li>
                                        <li>
                                            <a href="{{('LIAR')}}" class="dropdown__link">Licence Infirmier en Anesthésie
                                                et Réanimation (LIAR).</a>
                                        </li>
                                        <li>
                                            <a href="{{('LIIBO')}}" class="dropdown__link">Licence Infirmier en
                                                Instrumentalisation de Bloc Opératoire (L2IBO).</a>
                                        </li>
                                        <li>
                                            <a href="{{('LMMDSS')}}" class="dropdown__link">Licence en Management et
                                                Marketing Digital du Sport et Santé.</a>
                                        </li>
                                        <li>
                                            <a href="{{('LIFDM')}}" class="dropdown__link">Licence en Ingénierie et
                                                fabrication des dispositifs médicaux.</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i><img src="{{asset('SUPTECH_SANTE-main/assets/master.png')}}" alt="" class="img-fluid"
                                                style="max-width: 1.25em;"></i>
                                    </div>

                                    <a href="FormationsContinue#masterC" class="dropdown__title">Bac+5</a>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="{{('MDMAR')}}" class="dropdown__link">Master en dispositifs médicaux
                                                et affaires réglementaires</a>
                                        </li>
                                        <li>
                                            <a href="{{('MMGB')}}" class="dropdown__link">Master en Maintenance et Génie
                                                biomédical </a>
                                        </li>
                                        <li>
                                            <a href="{{('MEMT')}}" class="dropdown__link">Master en entreprenariat et
                                                Management Technologique.</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>



                    <!--=============== DROPDOWN 3 ===============-->
                    <li class="dropdown__item">
                        <div class="nav__link dropdown__button">
                            Pré-inscription <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                        </div>

                        <div class="dropdown__container">
                            <div class="dropdown__content">
                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i><img src="{{asset('SUPTECH_SANTE-main/assets/pre-inscription.png')}}" alt="" class="img-fluid"
                                                style="max-height: 0.9em;"></i>
                                    </div>

                                    <span class="dropdown__title">Effectuer une Pré-inscription</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="{{('pre-inscription')}}" class="dropdown__links">Formations
                                                initial</a>
                                        </li>
                                        <li>
                                            <a href="{{('pre-inscription-continue')}}" class="dropdown__links">Formations
                                                continue</a>
                                        </li>
                                    </ul>

                                </div>

                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i><img src="{{asset('SUPTECH_SANTE-main/assets/suivi.png')}}" alt="" class="img-fluid"
                                                style="max-height: 1em;"></i>
                                    </div>

                                    <span class="dropdown__title">Suivre ma demande</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="{{('suivi-pre-inscription')}}" class="dropdown__lien">Suivi de
                                                Pré-inscription</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!--===============DOPDOWN 4 =================-->
                    <li class="dropdown__item">
                        <div class="nav__link dropdown__button">
                            Concours <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                        </div>

                        <div class="dropdown__container">
                            <div class="dropdown__content">
                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i><img src="{{asset('SUPTECH_SANTE-main/assets/planning.png')}}" alt="" class="img-fluid"
                                                style="max-width: 1em;"></i>
                                    </div>

                                    <a href="{{('concours-planning')}}" class="dropdown__title ">Planning</1>



                                </div>

                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i><img src="{{asset('SUPTECH_SANTE-main/assets/results.png')}}" alt="" class="img-fluid"
                                                style="max-width: 1em;"></i>
                                    </div>

                                    <a href="{{('results')}}" class="dropdown__title">Resultats</a>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="#" class="dropdown__lin">Session 1</a>
                                        </li>
                                        <li>
                                            <a href="#" class="dropdown__lin">Session 2</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!--===============dropdown5=========================-->
                    <li class="dropdown__item">
                        <div class="nav__link dropdown__button">
                            <a href="{{('docs')}}"> Documents </a><i class="ri-arrow-down-s-line dropdown__arrow"></i>
                        </div>

                        <div class="dropdown__container">
                            <div class="dropdown__content">

                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i><img src="{{asset('SUPTECH_SANTE-main/assets/docs.png')}}" alt="" class="img-fluid"
                                                style="max-width: 0.7em;"></i>
                                    </div>

                                    <a href="{{asset('SUPTECH_SANTE-main/assets/Acte_de_cautionnement.pdf')}}" target="_blank" class="dropdown__title">Acte de
                                        cautionnement </a>

                                </div>
                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i><img src="{{asset('SUPTECH_SANTE-main/assets/docs.png')}}" alt="" class="img-fluid"
                                                style="max-width: 0.7em;"></i>
                                    </div>

                                    <a href="{{asset('SUPTECH_SANTE-main/assets/Règlement_Inernat.pdf')}}" class="dropdown__title"
                                        target="_blank">Reglement internat</a>

                                </div>
                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i><img src="{{asset('SUPTECH_SANTE-main/assets/docs.png')}}" alt="" class="img-fluid"
                                                style="max-width: 0.7em;"></i>
                                    </div>

                                    <a href="{{asset('SUPTECH_SANTE-main/assets/REGLEMENT_INTERIEUR_CYCLE_LICENCE_MASTER VF.pdf')}}" target="_blank"
                                        class="dropdown__title">Reglement Cycle<br> licence et master</a>

                                </div>
                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i><img src="{{asset('SUPTECH_SANTE-main/assets/docs.png')}}" alt="" class="img-fluid"
                                                style="max-width: 0.7em;"></i>
                                    </div>

                                    <a href="{{asset('SUPTECH_SANTE-main/assets/REGLEMENT_ETUDES_INTERIEUR_CYCLE_INGENIEUR.pdf')}}" target="_blank"
                                        class="dropdown__title">reglement interieur classes<br> preparatoires et cycle
                                        d’ingenieur </a>

                                </div>
                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i><img src="{{asset('SUPTECH_SANTE-main/assets/docs.png')}}" alt="" class="img-fluid"
                                                style="max-width: 0.7em;"></i>
                                    </div>

                                    <a href="{{asset('SUPTECH_SANTE-main/assets/Suptech_sante_RIB.pdf')}}" target="_blank"
                                        class="dropdown__tit" >RIB </>

                                </div>
                            </div>
                        </div>
                    </li>
                    
                    <!--======================dropdown6=============================-->
                    <li class="dropdown__item">
                        <div class="nav__link dropdown__button">
                         
                            <a class="bourses">Bourses et Tarifs</a><i class="ri-arrow-down-s-line dropdown__arrow" ></i>
                        </div>
                     
                        <div class="dropdown__container">
                            <div class="dropdown__content">
                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i><img src="{{asset('SUPTECH_SANTE-main/assets/bourse.png')}}" alt="" class="img-fluid"
                                                style="max-width: 1em;"></i>
                                    </div>

                                    <span class="dropdown__title">Bourse</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="{{('check_bourse')}}" class="dropdown__lien">Demander une bourse</a>
                                        </li>
                                        <li>
                                            <a href="{{('suivi-bourse')}}" class="dropdown__lien">Suivre ma demande </a>
                                        </li>
                                    </ul>

                                </div>

                                <div class="dropdown__group">
                                    <div class="dropdown__icon">
                                        <i><img src="{{asset('SUPTECH_SANTE-main/assets/tarrifs.png')}}" alt="" class="img-fluid"
                                                style="max-width: 0.9em;"></i>
                                    </div>

                                    <span class="dropdown__title">Tarifs</span>

                                    <ul class="dropdown__list">
                                        <li>
                                            <a href="{{('FormationsContinue')}}" class="dropdown__lien">Formations
                                                Continue</a>
                                        </li>
                                        <li>
                                            <a href="{{('formations')}}" class="dropdown__lien">Formations initial</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!--==========================================================body.. the real body .. i mean the core .. heck whatever. ============================================-->
    @yield('content')
    <!--========== a totaaaa2 lbaroud aaa totaa2 lbarouuud ====================lfooter =======================-->
    <footer class="footer">
        <p>&copy; 2024 SUPTECH SANTE. Tous les droits sont réservés.</p>
        <div class="social-icons">
            <a href="https://www.instagram.com/suptech.sante/" target="_blank"><i class="ri-instagram-line"></i></a>
            <a href="https://www.facebook.com/suptechsante" target="_blank"><i
                    class="ri-facebook-circle-fill"></i></a>
            <a href="https://www.linkedin.com/company/suptech-sante/" target="_blank"><i
                    class="ri-linkedin-fill"></i></a>
            <a href="tel:+212666405885" target="_blank"><i class="ri-whatsapp-line"></i></a>
            <a href="mailto:contact@suptech-environnement.ma" target="_blank"><i class="ri-mail-fill"></i></a>
        </div>
    </footer>
    <!-- Bootstrap JS  -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <script src="{{asset('SUPTECH_SANTE-main/assets/main.js')}}"></script>
</body>

</html>
