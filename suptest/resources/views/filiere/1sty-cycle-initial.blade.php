
@extends('layouts.master_page')
@section('content')
        <!--=================================== cp1==========================================================-->
<div class="hero-imagefc">
            <img  src="{{asset('SUPTECH_SANTE-main/assets/fc2.jpg')}}" >
            <div class="hero-textfc">
                <h6 class="display-4">Cycle Classes préparatoires intégrées: 1ère Année</h6>
                <button onclick="window.location.href='pre-inscription '">Inscrivez-Vous
                    <div class="Shape1"></div>
                </button>
            </div>
            <div class="Infos">
                <div class="col-lg-12 col-md-12 Infos-wrapper">
                    <ul>
                        <li class="Infos_icon-box" style="width: 100%;">
                            <div class="Infos_content-wrapper">
                                <h5><i id="icons" class="ri-booklet-line"></i> Format :&nbsp;</h5>
                                <p>&ndash; Présentiel </p>
                               
                            </div>
                        </li>
                        <li class="Infos_icon-box" style="width: 100%;">
                            <div class="Infos_content-wrapper">
                                <h5><i id="icons" class="ri-global-line"></i> Langue :&nbsp;</h5>
                                <p>&ndash; Français</p>
                            </div>
                        </li>
                        <li class="Infos_icon-box" style="width: 100%;">
                           
                            <div class="Infos_content-wrapper">
                                <h5><i id="icons" class="ri-calendar-2-line"></i> Date entré :&nbsp;</h5>
                                <p>&ndash; Octobre 2024</p>
                            </div>
                        </li>
                       
                    </ul>

                </div>

            </div>
        </div>
        
    
<div id="text_fc1"> <p>Plongez dans l'univers captivant des classes préparatoires intégrées en SupTech Santé avec notre 
    programme de formation innovant. Vous acquerrez des connaissances fondamentales en sciences de la santé, en passant par 
    l'anatomie, la physiologie, la chimie, et la biologie cellulaire. En mettant l'accent sur la rigueur académique et la
     méthodologie scientifique, ce cursus vous préparera efficacement aux défis des études supérieures et aux carrières 
     dans le domaine médical. Vous serez prêt à exceller dans des environnements exigeants et à contribuer de manière 
     significative à l'amélioration de la santé publique.</p>
    
    </div>

<!---=========tabed content====================-->
<div class="containerB justify-content-center">
    <div class="wrapper">
        <ul class="indicator">
            <li class="ActIve" data-target="#prérequis"><i class="ri-file-warning-line"></i> Pré-requis</li>
            
            <li data-target="#moduless"><i class="ri-booklet-line"></i> Modules</li>
            <li data-target="#frais"><i class="ri-price-tag-3-line"></i> Frais</li>
            <li data-target="#documentss"><i class="ri-file-copy-2-line"></i> Documents</li>
        </ul>
        <ul class="content">
            <li class="ActIve" id="prérequis">
                <h1>Pré-requis :</h1>
                
                    
                    
                    <p >&ndash; Baccalauréat Sciences de la Vie et de la Terre<br>
                
                        
                
                &ndash; Baccalauréat Sciences Physiques <br>
                &ndash; Baccalauréat science Mathématiques A
<br>
                &ndash; Baccalauréat science Mathématiques B
<br>
                
                </p>
            </li>
            
            <li id="moduless">
                <h1>Modules étudiés :</h1>
                
    <ul style="margin-left: 10%; ">
        
        <li  style="font-size: 2em; color: black;"><strong>Programme :</strong></li>
    </ul>
    <br>
    <div class="container" style="margin-bottom: 10%;" >
        <div class="row">
            <div class="row">
                <div class="col-md-1" > 
                </div>
            <div class="col-md-5 " style="background-color: #26D6A5;">
                <p style="font-size: 1.5em;  color: white; text-align: center;"><strong>Semestre 1</strong></p>
            </div>
            <div class="col-md-5  " style="background-color:#353590;">
                <p style="font-size: 1.5em;  color: white; text-align: center;"><strong>Semestre 2</strong></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1  " style=" background-color: rgb(135, 135, 135);">
                <p style="font-size: 1.5em; font-weight:700; ">Module 1</p>
            </div>
            <div class="col-md-5  " style="background-color: #eaf7ec;">
                <p style="font-size: 1.5em; ">Algèbre de Base 1</p>
            </div>
            <div class="col-md-5  " style="background-color: #aaeaff;">
                <p style="font-size: 1.5em;  ">Algèbre linéaire et Calcul Matriciel</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1 " style=" background-color: rgb(209, 209, 209);">
                <p style="font-size: 1.5em; font-weight:700; ">Module 2</p>
            </div>
            <div class="col-md-5  " style="background-color: #aaeaff;">
                <p style="font-size: 1.5em; ">Analyse de base 1</p>
            </div>
            <div class="col-md-5  " style="background-color: #eaf7ec;">
                <p style="font-size: 1.5em; ">Analyse 2 et Probabilité</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1  " style=" background-color: rgb(135, 135, 135);">
                <p style="font-size: 1.5em;font-weight:700; ">Module 3</p>
            </div>
            <div class="col-md-5  " style="background-color: #eaf7ec;">
                <p style="font-size: 1.5em; ">Electrostatique et Electrocinétique des courants continus</p>
            </div>
            <div class="col-md-5" style="background-color: #aaeaff;">
                <p style="font-size: 1.5em; ">Electromagnétisme et Electrocinétique des courants alternatifs </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-1" style=" background-color: rgb(209, 209, 209);">
                <p style="font-size: 1.5em; font-weight:700;">Module 4</p>
            </div>
            <div class="col-md-5 " style="background-color: #aaeaff;">
                <p style="font-size: 1.5em; ">Mécanique du point</p>
            </div>
            <div class="col-md-5  " style="background-color: #eaf7ec;">
                <p style="font-size: 1.5em; ">Thermodynamique générale  </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-1  " style=" background-color: rgb(135, 135, 135);">
                <p style="font-size: 1.5em;font-weight:700; ">Module 5</p>
            </div>
            <div class="col-md-5  " style="background-color: #eaf7ec;">
                <p style="font-size: 1.5em; ">CHIMIE 1</p>
            </div>
            <div class="col-md-5  " style="background-color: #aaeaff;">
                <p style="font-size: 1.5em; ">Etude des systèmes/Informatique 1 </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-1 " style=" background-color: rgb(209, 209, 209);">
                <p style="font-size: 1.5em; font-weight:700;">Module 6</p>
            </div>
            <div class="col-md-5 " style="background-color: #aaeaff;">
                <p style="font-size: 1.5em; ">Langue 1</p>
            </div>
            <div class="col-md-5 " style="background-color: #eaf7ec;">
                <p style="font-size: 1.5em; ">Langue 2</p>
            </div>
        </div>
    </div>
                
                
            </li>
            <li id="frais">
                <h1>Frais :</h1>
                <p>&ndash; Frais de traitement de dossier<strong> 200 DHS.</strong></p>
                <p>&ndash; Frais d’inscription et d’assurance <strong>3 500 DHS.</strong></p>
                <p>&ndash; Frais de scolarité cycle Licence <strong>28 000 DHS.</strong></p>
                <p class="shiny-text text-center" >N'hésitez pas à solliciter une bourse ; vous pourriez obtenir une aide financière allant jusqu'à 100 %.</p>

            </li>
            <li id="documentss">
                <h1>Les documents requis pour votre candidature sont :</h1>
                <p>· Photo d'identité</p>
                <p>· Carte d'identité nationale / passeport</p>
                <p>· Diplômes ou certificats</p>
                <p>· Relevé de notes du baccalauréat</p>
                <p>· La Preuve de virement</p>
            </li>
        </ul>
    </div>
</div>
  

</div>

<script>

const allIndicator = document.querySelectorAll('.indicator li');
const allContent = document.querySelectorAll('.content li');

allIndicator.forEach(item=> {
  item.addEventListener('click', function () {
    const content = document.querySelector(this.dataset.target);

    allIndicator.forEach(i=> {
      i.classList.remove('ActIve');
    })

    allContent.forEach(i=> {
      i.classList.remove('ActIve');
    })

    content.classList.add('ActIve');
    this.classList.add('ActIve');
  })
})

</script>
@endsection  