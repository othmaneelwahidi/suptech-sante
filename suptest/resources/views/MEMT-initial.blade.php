@extends('layouts.master_page')
@section('content')
<div class="hero-imagefc">
            <img  src="{{asset('SUPTECH_SANTE-main/assets/fc2.jpg')}}" >
            <div class="hero-textfc">
                <h6 class="display-4">Master en Entrepreneuriat et Management Technologique</h6>
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
        
    
<div id="text_fc1"> <p>Vous avez un BAC+3 et vous êtes intéressé par l’Entrepreneuriat ? Notre Master en Entrepreneuriat
et Management Technologique offre une opportunité unique aux étudiants passionnés par
l&#39;entrepreneuriat et l&#39;innovation technologique de développer les compétences nécessaires pour
devenir un manager ouvert, opérationnel, conscient des évolutions sociétales et environnementales,
et capables d’analyser la complexité croissante de l’environnement.</p>
    
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
                
                    
                    
                    <p >&ndash; Être titulaire de :<br>
                
                &ndash;Licence (Spécialité : Scientifiques, Mathématique, Génie industriel)
                <br>
                
                &ndash;Bac+3 (Spécialité : finance, comptabilité, marketing, Gestion des entreprises)
<br>
                &ndash; Tout diplôme équivalent (Spécialité : Scientifiques)
<br>
                </p>
            </li>
            <li id="débouchés">
                <h1>Débouchés professionnels de la formation :</h1>
                <div class="">
                <p><strong>Les diplômés de notre programme de Master en Entrepreneuriat et Management Technologique
pourront poursuivre diverses carrières passionnantes, notamment :</strong> <br> &nbsp;&nbsp;
                    </p>
                <p>Fondateur ou co-fondateur de start-up<br> &nbsp;&nbsp;</p>
                <p>Chef de produit ou chef de projet dans une entreprise technologique<br> &nbsp;&nbsp;</p>
                <p>Intrapreneur au sein d’une grande entreprise<br> &nbsp;&nbsp;</p>
                <p>Chef de projet transversal<br> &nbsp;&nbsp;</p>
                <p>Business Developer dans une start-up, une PME ou une TPE<br> &nbsp;&nbsp;</p>
                <p>Gestionnaire de l&#39;innovation</p>
                <p>Responsable de développement</p>

                </div>
            </li>
            <li id="moduless">
                <h1>Modules étudiés :</h1>
                <div class="row_modules row">
                    <div class="col-lg-6 col-md-6">
                    <p id="FC_list"><strong >Semestre 1 :</strong></p>
                        <p>&ndash; Management des
organisations : écosystème
entrepreneurial</p>
                        <p>&ndash; Fiscalité Entrepreneuriale</p>
                        <p>&ndash; Finance entrepreneuriale
et création de valeur</p>
                        <p>&ndash; Statistiques et Recherche
Opérationnelle</p>
                        <p>&ndash; Stratégie marketing</p> 
                        
                        <p>&ndash; Langues Etrangères</p>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <p id="FC_list"><strong >Semestre 2 :</strong></p>
                            <p>&ndash; Gestion Hospitalière et
Marchés Publics de Santé
au Maroc</p>
                            <p>&ndash; Comptabilité et contrôle

de gestion</p>
                            <p>&ndash; Développement
organisationnel</p>
                            <p>&ndash; Stratégie
entrepreneuriale et
Management de la qualité</p>
                            <p>&ndash; L&#39;Ingénierie de Projet</p> 
                            <p>&ndash; Bases de données et
analyse de données</p> 
                                 
                        </div>
                </div>
                
                
            </li>
            <li id="frais">
                <h1>Frais :</h1>
                <p>&ndash; Frais de traitement de dossier<strong> 200 DHS.</strong></p>
                <p>&ndash; Frais d’inscription et d’assurance <strong>3 500 DHS.</strong></p>
                <p>&ndash; Frais de scolarité cycle Licence <strong>32 000 DHS.</strong></p>
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