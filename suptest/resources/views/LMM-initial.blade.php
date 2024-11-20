@extends('layouts.master_page')
@section('content')
<div class="hero-imagefc">
            <img  src="{{asset('SUPTECH_SANTE-main/assets/fc2.jpg')}}" >
            <div class="hero-textfc">
                <h6 class="display-4">Licence en Maintenance Médicale</h6>
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
                                <p>&ndash; Présentiel</p>
                               
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
        
    
<div id="text_fc1"> <p>Vous avez un BAC+2 et vous êtes intéressé par la gestion et la maintenance des équipements
biomédicaux utilisés dans les établissements de santé ? Rejoignez notre programme de Licence
Maintenance et Génie Biomédical pour acquérir les compétences nécessaires pour exceller dans ce
domaine en constante évolution.</p>
    
    </div>

<!---=========tabed content====================-->
<div class="containerB justify-content-center">
    <div class="wrapper">
        <ul class="indicator">
            <li class="ActIve" data-target="#prérequis"><i class="ri-file-warning-line"></i> Pré-requis</li>
            <li data-target="#débouchés"><i class="ri-briefcase-line"></i> Débouchés </li>
            <li data-target="#moduless"><i class="ri-booklet-line"></i> Modules</li>
            <li data-target="#frais"><i class="ri-price-tag-3-line"></i> Frais</li>
            <li data-target="#documentss"><i class="ri-file-copy-2-line"></i> Documents</li>
        </ul>
        <ul class="content">
            <li class="ActIve" id="prérequis">
                <h1>Pré-requis :</h1>
                <p>Bac + 2 scientifiques dans l’une des spécialités suivantes :
                    Physique, Mathématiques, Electronique, Informatique, Mécanique, Electrique, SVT.</p>
                    <br>
                    <p><strong> Accès parallèle : </strong></p><br>
                    <p >&ndash; Être titulaire d'un DUT.<br>
                &ndash; Être titulaire d'un Diplôme d'Etudes Universitaires générales Deug en Sciences.</p>
            </li>
            <li id="débouchés">
                <h1>Débouchés professionnels de la formation :</h1>
                <div class="">
                <p><strong> diplômés de la Licence Maintenance et Génie Biomédical peuvent occuper des postes tels que :</strong> <br> &nbsp;&nbsp;
                    </p>
                <p>Gestionnaire des équipements médicaux.<br> &nbsp;&nbsp;</p>
                <p>Responsable de la sécurité des dispositifs médicaux. <br> &nbsp;&nbsp;</p>
                <p>Consultant en technologies de santé. <br> &nbsp;&nbsp;</p>
                <p>Technico-commercial dans le secteur de la santé. <br> &nbsp;&nbsp;</p>
                
                </div>
            </li>
            <li id="moduless">
                <h1>Modules étudiés :</h1>
                <div class="row_modules row">
                    <div class="col-lg-6 col-md-6">
                    <p id="FC_list"><strong >Semestre 1 :</strong></p>
                        <p>&ndash; Maintenance des équipements de diagnostic et de laboratoire</p>
                        <p>&ndash; Équipements médicaux</p>
                        <p>&ndash; Gestion des risques en milieu biomédical</p>
                        <p>&ndash; Excel avancé.</p>
                        <p>&ndash; Langues Etrangères</p> 
                        <p>&ndash; Informatique.</p>
                        <p>&ndash; Robotique Médicale</p>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <p id="FC_list"><strong >Semestre 2 :</strong></p>
                            <p>&ndash; Maintenance des équipements de radiothérapie.</p>
                            <p>&ndash; Droit, Civisme et Citoyenneté.</p>
                            <p>&ndash; Biomécanique et modélisation en milieu biomédical</p>
                            <p>&ndash; Gestion de projet en milieu biomédical</p>
                            <p>&ndash; Langues Etrangères</p> 
                            <p>&ndash; Exploration fonctionnelle et endoscopie</p>
                                 
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
                <p>· Curriculum Vitae</p>
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