@extends('layouts.master_page')
@section('content')
<style>
    
    /* Popup styles */
  .popup {
      display: none; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index: 1; /* Sit on top */
      
      width: 100% !important; /* Full width */
      height: 100% !important; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
     
  }
  
  .popup-content {
      background-color: #fefefe;
      margin: 15% auto; /* 15% from the top and centered */
      padding: 20px;
      border: 1px solid #888;
      width: 50%; /* Could be more or less, depending on screen size */
      height: 15%;
      border-radius: 5px;
      font-size: large;
      color:  #3C3790;
      cursor: pointer;
      text-align: center;
      justify-items: center;
      display: grid;
  }
  @media screen and (max-width: 768px) {
    .popup-content{
        width: 70%;
    }
  }
  .close-button {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
  }
  
  .close-button:hover,
  .close-button:focus {
      color: black;
      text-decoration: none;
      cursor: pointer;
  }

    .btn-pop{ 
     color: #fff;
    
  cursor: pointer;
  display: block;
  font-size:16px;
  font-weight: 400;
  line-height: 45px;
  margin: 0 0 2em;
  max-width: 160px; 
  position: relative;
  text-decoration: none;
  text-transform: uppercase;
  width: 100%; }
  
  .btn-pop{
  border: 1px solid;
  box-shadow: inset 0 0 20px rgba(255, 255, 255, 0);
  outline: 1px solid;
  outline-color: rgba(44, 15, 151, 0.5);
  outline-offset: 0px;
  text-shadow: none;
  transition: all 1250ms cubic-bezier(0.19, 1, 0.22, 1);
} 

.btn-pop:hover {
  border: 1px solid;
  box-shadow: inset 0 0 20px rgba(195, 192, 245, 0.5), 0 0 20px rgba(255, 255, 255, 0.952);
  outline-color: rgba(255, 255, 255, 0);
  outline-offset: 15px;
  
}
  </style>
  <div id="popup" class="popup ">
    <div class="container">
    <div class="popup-content">
    <span class="close-button">&times;</span>
    <h2>Ouverture inscription</h2>
    <p>pour le cycle classes préparatoires <span id="year-range"></span></p>
    <a href="{{('pre-inscription')}}" class="btn-pop">Inscrivez-vous</a>
</div>
  </div>
</div>
    <!--++++++++++++++++++++++++++++++++++++++++++++Slider+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
    <div id="popup-message" class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="0">
        <div class="toast-header">
            <strong class="mr-auto">Welcome!</strong>
            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="toast-body">
            Welcome to our website! This message will appear every time you visit the home page.
        </div>
    </div>
    <div class="slider" style="background-color: #3C3790; ">
        <!-- fade css -->
        <div class="myslide fade">
            <div class="txt">
                <h1 class="display-1">Suptech Sante</h1>
                <p>Ecole Supérieure de Génie Biomédical et des Techniques de santé</p>
            </div>
            <img id="img" src="{{asset('SUPTECH_SANTE-main/assets/suptech-sante-mohammadia-campus.jpg')}}" style="width: 100%; height: 100%;"
                alt="suptech sante mohammadia campus">
        </div>

        <div class="myslide fade">
            <div class="txt">
                <h1 class="display-1">Suptech Sante</h1>
                <p>Ecole Supérieure de Génie Biomédical et des Techniques de santé</p>
            </div>
            <img id="img" src="{{asset('SUPTECH_SANTE-main/assets/suptechsante front door.jpg')}}" style="width: 100%; height: 100%;"
                alt="suptech sante mohammadia campus front door">
        </div>

        <div class="myslide fade">
            <div class="txt">
                <h1 class="display-1">Suptech Sante</h1>
                <p>Ecole Supérieure de Génie Biomédical et des Techniques de santé</p>
            </div>
            <img id="img" src="{{asset('SUPTECH_SANTE-main/assets/suptech-amphitheatre.jpg')}}" style="width: 100%; height: 100%;"
                alt="suptech mohammadia amphitheatre">
        </div>

        <div class="myslide fade">
            <div class="txt">
                <h1 class="display-1">Suptech Sante</h1>
                <p>Ecole Supérieure de Génie Biomédical et des Techniques de santé</p>
            </div>
            <img id="img" src="{{asset('SUPTECH_SANTE-main/assets/suptech sante amphi-stage.jpg')}}" style="width: 100%; height: 100%;"
                alt="suptech mohammadia amphitheatre">
        </div>

        <!-- onclick js -->
        <a class="prev" onclick="plusSlides(-1)"> </a>
        <a class="next" onclick="plusSlides(1)"> </a>

        <div class="dotsbox" style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
            <span class="dot" onclick="currentSlide(5)"></span>
        </div>
        <!-- /onclick js -->
    </div>
    <!--++++++++++++++++++++++++++++++++++++++++++++ About +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
    <div class="container ">
        <h1 class="display-2 text-center" style="margin-top: 17rem;">À propos de l'Ecole de <br>SuptechSante:</h1>
        <div class="row d-flex about">
            <div class="col-md-6 col-sm-12 col-lg-6">
                <img src="{{asset('SUPTECH_SANTE-main/assets/About.jpg')}}" alt="" class="img-fluid" style="max-width: 100%; height: auto; ">
            </div>
            <div class="col-md-6 col-sm-12 col-lg-6 about-text">
                <p class="display-5 text-justify align-items-center ">Fondée par la Fondation de Recherche de
                    Développement et d’Innovation en Sciences et Ingénierie à utilité publique, dont le président est le
                    Conseiller de Sa Majesté Mohammed VI, Monsieur David André Azoulay, l'École Supérieure de Génie
                    Biomédical et des Techniques de Santé. SUPTECH SANTE est la première Ecole d’Ingénieurs de la
                    Fondation qui délivre les diplômes d'ingénieur d'État, de Master et de Technicien. </p>
                <p class="display-5 text-justify align-items-center">Présente sur plus de 17 préfectures au Maroc, la
                    Fondation de Recherche de Développement et d’Innovation en Sciences et Ingénierie à utilité publique
                    est l’un des acteurs les plus actifs dans les domaines d’accompagnement à l’Entrepreneuriat
                    et l’incubation des Start-Ups et les Petites et Moyennes Entreprises (PMEs) au Maroc.</p>
            </div>
        </div>
    </div>

    <!--+++++++++++++++++++++++++++++++++++++++nos point fort+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
    <div class="A-cnt" style="margin-top: 20rem;">
        <div class="d-flex justify-content-center">
            <img src="{{asset('SUPTECH_SANTE-main/assets/key strenght.png')}}" alt="a shiny punch" class="img-responsive " id="punch"
                style="min-width: 100px;" />
        </div>
        <div class="text-center">
            <h1 id="pf"> Nos points forts </h1>
        </div>
        <div class="d-flex justify-content-center">
            <img src="{{asset('SUPTECH_SANTE-main/assets/3-dots-bar.png')}}" alt="three dots bar" class="img-responsive sBar" />
        </div>
        <div class=" strengthK " style="background-color: white;">
            <div class="row d-flex">
                <div class="col-md-4" id="s-key1">
                    <h1>+100 d'experts<br>+50 de partenaires</h1>
                    <p>la recherche, le développement, l'innovation et l'entrepreneuriat</p>
                </div>
                <div class="col-md-4" id="s-key2">
                    <h1>Formations <br>pluridisciplinaires</h1>
                    <p>visant à développer des compétences pour intervenir dans toutes les étapes du cycle de vie des
                        dispositifs médicaux</p>
                </div>
                <div class="col-md-4" id="s-key3">
                    <h1>Acquisition <br>des outils nécessaires</h1>
                    <p>pour innover et exceller dans les secteurs de l'industrie pharmaceutique, de l'industrie des
                        vaccins et de l'industrie cosmétique</p>
                </div>
            </div>
        </div>
    </div>
    <!--*******************************************Nos Cycles******************************************************-->
    <div class="cnt-C" style="margin-top: 22rem;">
        <!-- Header Section -->
        <div class="row">
            <div class="col-md-12 " style="float: right;">
                <div class=" text-right d-flex Title-s">

                    <img src="{{asset('SUPTECH_SANTE-main/assets/nos-cycles.png')}}" alt="Icon" style="max-width: 60px;">
                    <h2 class="underline-text display-2 custom-underline">Nos Cycles</h2>

                </div>
            </div>

            <!-- Paragraph Section -->
            <div class="col-md-12 cycles"style="margin-top: 5rem;" >

                <p class="display-5">Nos formations s’intéressent au fonctionnement ainsi qu’à la conception, la
                    fabrication et la maintenance d’appareils de diagnostic ou de traitement des maladies. Elles
                    rassemblent de nombreuses spécialités en ingénierie et en techniques
                    de santé en passant par la bio-instrumentation, l’imagerie médicale et l’Intelligence Artificielle.
                </p>

            </div>
        </div>
        <!-- Image Section -->
        <div class="row" style="margin-top: 5rem;">
            <div class="col-md-3">
                <img src="{{asset('SUPTECH_SANTE-main/assets/suptechsante classrooms.jpg')}}" alt="Classroom 1" class="img-fluid nc">
                <div class="imgT">
                    <h5><a href="{{('formations#cycle')}}">Cycle classes préparatoires intégrées</a></h5>
                </div>
            </div>
            <div class="col-md-3">
                <img src="{{asset('SUPTECH_SANTE-main/assets/suptech sante maintenance.jpg')}}" alt="Classroom 2" class="img-fluid nc">
                <div class="imgT">
                    <h5><a href="{{('formations#Licence')}}">Cycle licences</a></h5>
                </div>
            </div>
            <div class="col-md-3">
                <img src="{{asset('SUPTECH_SANTE-main/assets/suptechsante doctors.webp')}}" alt="Classroom 3" class="img-fluid nc">
                <div class="imgT">
                    <h5><a href="{{('formations#CI')}}">Cycle Ingenieur</a></h5>
                </div>
            </div>
            <div class="col-md-3">
                <img src="{{asset('SUPTECH_SANTE-main/assets/suptechsante lab.jpg')}}" alt="Classroom 3" class="img-fluid nc">
                <div class="imgT">
                    <h5><a href="{{('formations#master')}}">Cycle Master</a></h5>
                </div>
            </div>
        </div>
    </div>

    <!--%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% Activites parascolaires%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
    <div class="container" style="margin-top: 27rem;">
        <div class="row">
            <div class="col-md-12  d-flex Title-s">

                <img src="{{asset('SUPTECH_SANTE-main/assets/Activites-parascolaires.png')}}" alt="Icon" style="max-height: 50px;">
                <h2 class="underline-text display-2 custom-underline">Activites parascolaires</h2>


            </div>



            <div class="slideshow-container col-md-12" style="margin-top: 5rem;">

                <div class="MySlides Fade">
                    <div class="numbertext">1 / 3</div>
                    <img src="{{asset('SUPTECH_SANTE-main/assets/chess.png')}}" style="width:100%;  vertical-align: middle;">
                    <div class="text"> Chess </div>
                </div>

                <div class="MySlides Fade">
                    <div class="numbertext">2 / 3</div>
                    <img src="{{asset('SUPTECH_SANTE-main/assets/gaming.png')}}" style="width:100% ; vertical-align: middle;">
                    <div class="text"> Gaming </div>
                </div>

                <div class="MySlides Fade">
                    <div class="numbertext">3 / 3</div>
                    <img src="{{asset('SUPTECH_SANTE-main/assets/ping pong.png')}}" style="width:100%; vertical-align: middle;">
                    <div class="text"> Ping Pong </div>
                </div>

                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>

            </div>
            <br>

            <div style="text-align:center">
                <span class="dot1" onclick="currentSlide(1)"></span>
                <span class="dot1" onclick="currentSlide(2)"></span>
                <span class="dot1" onclick="currentSlide(3)"></span>
            </div>

        </div>

    </div>

    <!--*******************************************Mot de president******************************************************-->
    <div class="president-word" style="margin-top: 25rem;">
        <div class="row ">
            <div class=" d-flex Pw">
                <img src="{{asset('SUPTECH_SANTE-main/assets/microphone.png')}}" alt="microphone icon" class="img-fluid "
                    style=" max-height: 50px; width: max-content;">
                <h2 class="display-2 ">Mot de president</h2>
            </div>
        </div>
        <div class="p-pw">
            <div class="card shadow d-flex">
                <div class="card-body">
                    <img src="profile.jpg" alt="Profile Image" class=" img-fluid mb-3">
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus nisi fuga,
                        corporis quae totam reiciendis ad explicabo quaerat itaque natus ipsum, nostrum magni
                        exercitationem dolorum quisquam quos sed labore facilis amet voluptas
                        consequuntur, odit sunt. Dolore ut, amet rem officiis impedit dignissimos accusamus distinctio
                        placeat nobis sapiente quia fuga. Ratione necessitatibus eum saepe pariatur debitis veritatis
                        adipisci sequi aperiam inventore rerum
                        laborum, similique quisquam incidunt. Velit modi assumenda dolorem consequatur? Laboriosam
                        repellat aperiam fugiat amet soluta voluptates facere sunt rerum asperiores blanditiis magni ab
                        deserunt aut, doloribus nulla nemo dolore
                        deleniti. Dolore, quaerat officiis dolorem saepe recusandae veniam commodi nulla eius beatae
                        labore rem mollitia quia placeat magni ea cum necessitatibus odio accusamus! Harum fugiat
                        voluptate nihil nulla, unde eum perspiciatis
                        fuga molestias temporibus omnis non minus architecto totam excepturi sunt voluptatibus maxime
                        deserunt! Recusandae quos fugit minus voluptatum incidunt id laboriosam qui, quia ducimus
                        tempore rerum adipisci obcaecati beatae
                        velit ipsa ut soluta delectus expedita quisquam, eligendi hic architecto! Ipsam corporis
                        adipisci beatae ut debitis. Cum voluptatum dolor assumenda modi cumque veniam nostrum
                        perspiciatis maxime, tenetur placeat reprehenderit
                        harum quo animi alias possimus sed sint laboriosam impedit obcaecati! Ullam facilis unde
                        dolorem! Tenetur soluta nobis praesentium ex? Nihil doloribus maiores expedita aperiam adipisci
                        ab corrupti nisi dicta, aut libero aliquam
                        id deleniti eveniet dolorem voluptate deserunt, laboriosam reiciendis maxime excepturi cum
                        molestiae nulla temporibus minima. Mollitia harum ad soluta perferendis nemo expedita nulla,
                        laboriosam incidunt, enim repudiandae reprehenderit
                        aliquam voluptates culpa accusamus cumque praesentium. Voluptatem ducimus nostrum doloremque
                        minus, quae ab obcaecati debitis aspernatur, modi error nam sed eum repellat eius cumque iusto,
                        laudantium unde aliquid excepturi.
                        Totam corporis ab ullam optio delectus magni veritatis nemo quos, minus nam, in suscipit commodi
                        laudantium, quas dolore tempora sapiente. Ullam accusamus totam rem. Eligendi libero et vero
                        sint odio, reprehenderit tempora.</p>
                </div>
            </div>
        </div>
    </div>
    <script>// JavaScript to handle the popup
        document.addEventListener('DOMContentLoaded', (event) => {
            // Get the popup element
            var popup = document.getElementById('popup');
       
            // Get the <span> element that closes the popup
            var closeButton = document.getElementsByClassName('close-button')[0];
       
            // Show the popup when the page loads
            popup.style.display = 'block';
       
            // When the user clicks on <span> (x), close the popup
            closeButton.onclick = function() {
                popup.style.display = 'none';
            }
       
            // When the user clicks anywhere outside of the popup, close it
            window.onclick = function(event) {
                if (event.target == popup) {
                    popup.style.display = 'none';
                }
            }
        });
        
// JavaScript to handle the popup
document.addEventListener('DOMContentLoaded', (event) => {
    // Get the popup element
    var popup = document.getElementById('popup');

    // Get the <span> element that closes the popup
    var closeButton = document.getElementsByClassName('close-button')[0];

    // Show the popup when the page loads
    popup.style.display = 'block';

    // When the user clicks on <span> (x), close the popup
    closeButton.onclick = function () {
        popup.style.display = 'none';
    };

    // When the user clicks anywhere outside the popup-content, close it
    document.addEventListener('click', function (event) {
        var popupContent = popup.querySelector('.popup-content');
        // Check if the click is outside the popup content
        if (popup.style.display === 'block' && !popupContent.contains(event.target) && event.target !== closeButton) {
            popup.style.display = 'none';
        }
    });
});


        </script>
        <script>
    // Get the current year
    const currentYear = new Date().getFullYear();

    // Calculate the next year
    const nextYear = currentYear + 1;

    // Create the year range (e.g., 2024/2025)
    const yearRange = `${currentYear}/${nextYear}`;

    // Update the <span id="year-range"> with the dynamic year range
    document.getElementById('year-range').textContent = yearRange;
</script>
@endsection
