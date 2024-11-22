@extends('layouts.master_page')
@section('content')
<div class="hero-imagefc">
            <img  src="{{asset('SUPTECH_SANTE-main/assets/fc2.jpg')}}" >
            <div class="hero-textfc">
                <h6 class="display-4">Cycle ingénieur: Génie Biomédical</h6>
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
        
    
<div id="text_fc1"> <p   >Cycle ingénieur: Génie Biomédical

Vous avez un BAC+2 et vous êtes attirés par les innovations technologiques et médicales ? Explorez une carrière captivante au carrefour de l'ingénierie, de la santé et de la technologie biomédicale ! Intégrez notre programme de Cycle Ingénieur en Génie Biomédical et préparez-vous à façonner l'avenir de la médecine.
<br>
Une formation polyvalente qui combine des compétences en ingénierie, en biologie et en technologie médicale, ouvrant la porte à de nombreuses opportunités professionnelles dans les secteurs hospitaliers, de recherche et industriels.</p>
    
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
                <p>-Bac + 2 scientifiques dans l’une des spécialités suivantes :
                    Physique, Mathématiques, Electronique, Informatique, Mécanique, Electrique, SVT.
                <br>-Être admis au Concours National Commun (CNC).</p>
                    
                    <p><strong> Accès parallèle : </strong></p><br>
                    <p >&ndash; Être titulaire d'un DUT.<br>
                &ndash; Être titulaire d'un Diplôme d'Etudes Universitaires générales Deug en Sciences.</p>
            </li>
            <li id="débouchés">
                <h1>Débouchés professionnels de la formation :</h1>
                <div class="">
                <p><strong>Cadre supérieur en assainissement :</strong> <br> &nbsp;&nbsp;Conçoit, développe et supervise des systèmes de
                    traitement des eaux usées.</p>
                <p><strong>Cadre supérieur agronome spécialisé en irrigation :</strong> <br> &nbsp;&nbsp;Conçoit des systèmes d'irrigation
                    efficaces pour optimiser la production agricole tout en préservant les ressources en eau.</p>
                <p><strong>Technicien supérieur en exploitation des stations d'épuration :</strong> <br> &nbsp;&nbsp;Assure le bon
                    fonctionnement et la maintenance des installations de traitement des eaux.</p>
                <p><strong>Cadre supérieur en qualité de l'eau :</strong> <br> &nbsp;&nbsp;Évalue et garantit la conformité des normes de qualité
                    de l'eau potable et des rejets industriels.</p>
                
                </div>
            </li>
            <li id="moduless">
                <h1>Modules étudiés :</h1>
                <div class="row_modules row">
                    <div class="col-lg-6 col-md-6">
                    <p id="FC_list"><strong >Semestre 1 :</strong></p>
                        <p>&ndash; Langue étrangère 1 (Anglais et français).</p>
                        <p>&ndash; Power Skills (Méthodologie de travaille).</p>
                        <p>&ndash; Physique de base (Electricité, mécanique de point).</p>
                        <p>&ndash; Mathématique (Méthodes numériques, Mathématiques appliqués).</p>
                        <p>&ndash; Informatique de base (bureautique, Algorithme et Langage de programmation) .</p> 
                        <p>&ndash; Chimie de base.</p>
                        <p>&ndash; Élément de Génie civil.</p>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <p id="FC_list"><strong >Semestre 2 :</strong></p>
                            <p>&ndash; Langue étrangère 2 (Anglais et français).</p>
                            <p>&ndash; Power Skills (Culture digitale).</p>
                            <p>&ndash; Biologie et Microbiologie (Biologie Cellulaire, Microbiologie générale).</p>
                            <p>&ndash; Ecologie et hydrogéologie (Ecologie, Hydrogéologie).</p>
                            <p>&ndash; Statistiques et Informatique II (statistique et probabilités, Langage de programmation (Matlab)).</p> 
                            <p>&ndash; Mécanique de fluides et hydraulique.</p>
                            <p>&ndash; Thermique (thermodynamique, transfert thermique).</p>
                            <p>&ndash; Intelligence artificielle et base de données.</p>
                            
                        </div>
                </div>
                <div class="row_modules row" >
                    <div class="col-lg-6 col-md-6">
                    <p id="FC_list"><strong >Semestre 3 :</strong></p>
                        <p>&ndash; Power Skills (Compétences culturelles et artistiques)..</p>
                        <p>&ndash; Langue étrangère 3 (Anglais et français)..</p>
                        <p>&ndash; Analyses des eaux (Techniques et Analyse physico chimique des eaux, Analyses
                            Microbiologiques : contrôle de qualité des eaux, Chimie de l’eau).</p>
                        <p>&ndash; Pollutions des milieux récepteurs (Pollution des eaux, Déchets solides, Pollution atmosphérique).</p>
                        <p>&ndash; Réseau d’assainissement.</p> 
                        <p>&ndash; Urbanisme et topographie (Topographie VRD et dessin technique, Urbanisme Architecture et Paysage).</p>
                        <p>&ndash; Electrotechnique / Les capteurs et instrumentations.</p>
                        <p>&ndash; Data science (Prétraitement et visualisation des données).</p>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <p id="FC_list"><strong >Semestre 4 :</strong></p>
                            <p>&ndash; Power Skills (Développement personnel).</p>
                            <p>&ndash; Langue étrangère 4 (Anglais et français).</p>
                            <p>&ndash; Réseaux et traitement des Eaux (Assainissement urbain, Procédés de traitement et épurations des eaux).</p>
                            <p>&ndash; DD & Ecotoxicologie (DD, Ecotoxicologie).</p>
                            <p>&ndash; Chimie appliquée à l’environnement et chimie organique.</p> 
                            <p>&ndash; Etude d’impact sur l’environnement/Analyse des cycles de vie (ACV).</p>
                            <p>&ndash; Géomatique et SIG (Géomatique, SIG).</p>
                            <p>&ndash; Machine learning et Data mining.</p>
                            
                        </div>
                </div>
                <div class="row_modules row" >
                    <div class="col-lg-6 col-md-6">
                    <p id="FC_list"><strong >Semestre 5 :</strong></p>
                        <p>&ndash; Power Skills (Digital Skills II : Excel avancé)..</p>
                        <p>&ndash; Langue étrangère 5 (Anglais et français).</p>
                        <p>&ndash; Production et alimentation en eau potable.</p>
                        <p>&ndash; Gestion des ressources hydrique.</p>
                        <p>&ndash; Géomatique et modélisation.</p> 
                        <p>&ndash; Hygiène et sécurité au travail SST.</p>
                        <p>&ndash; Génie des procédés pour l’environnement.</p>
                        <p>&ndash; Ingénierie des systèmes décisionnelle.</p>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <p id="FC_list"><strong >Semestre 6 :</strong></p>
                            <p>&ndash; Power Skills (Droit Civisme et Citoyenneté).</p>
                            <p>&ndash; Langue étrangère 6 (Anglais et français).</p>
                            <p>&ndash; Droit de l’environnement et gestion des projets (Gestion des projets et Marché publiques, Droit et économie de l’environnement) .</p>
                            <p>&ndash; Intelligence artificielle avancé (Deep Learning et renforcement Learning).</p>
                            <p>&ndash; Projet professionnel et rédaction du rapport de stage / Stage de fin de cycle.</p> 
                            
                            
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