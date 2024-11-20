@extends('layouts.master_page')
@section('content')
<div class="hero-imagefc">
            <img  src="{{asset('SUPTECH_SANTE-main/assets/fc2.jpg')}}" >
            <div class="hero-textfc">
                <h6 class="display-4">Licence en Génie Industriel et Logistique Hospitalière</h6>
                <button onclick="window.location.href='pre-inscription-continue '">Inscrivez-Vous
                    <div class="Shape1"></div>
                </button>
            </div>
            <div class="Infos">
                <div class="col-lg-12 col-md-12 Infos-wrapper">
                    <ul>
                        <li class="Infos_icon-box" style="width: 100%;">
                            <div class="Infos_content-wrapper">
                                <h5><i id="icons" class="ri-booklet-line"></i> Format :&nbsp;</h5>
                                <p>&ndash; Présentiel / à Distance <br> &ndash; Soir / Weekend</p>
                               
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
        
    
<div id="text_fc1"> <p>Vous avez un BAC+2 et vous êtes intéressé par la gestion efficace des ressources dans le secteur de
la santé ? Rejoignez notre programme de Licence en Génie Industriel et Logistique Hospitalière pour
acquérir les compétences nécessaires pour exceller dans ce domaine en constante évolution.</p>
    
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
                
                    
                    
                    <p >&ndash; Être titulaire d'un DUT.<br>
                
                &ndash;DEUST
                <br>
                
                &ndash;DEUG Scientifique
<br>
                &ndash; DEUG Economique
<br>
                &ndash; BTS Economique
<br>
                &ndash; Bac + 2 scientifiques ou économique (reconnu)</p>
            </li>
            <li id="débouchés">
                <h1>Débouchés professionnels de la formation :</h1>
                <div class="">
                <p><strong>Avec une demande croissante de professionnels qualifiés dans le domaine de la logistique
hospitalière, notre programme vous ouvrira les portes à diverses opportunités de carrière :</strong> <br> &nbsp;&nbsp;
                    </p>
                <p>Responsable logistique hospitalier.<br> &nbsp;&nbsp;</p>
                <p>Responsable de la production pharmaceutique. <br> &nbsp;&nbsp;</p>
                <p>Responsable de la qualité. <br> &nbsp;&nbsp;</p>
                <p>Consultant en gestion de la chaîne d'approvisionnement. <br> &nbsp;&nbsp;</p>
                <p>Responsable en logistique hospitalière<br> &nbsp;&nbsp;</p>
                <p>Vous pourrez travailler dans des établissements
de santé, des industries pharmaceutiques, des entreprises de conseil ou encore en tant
qu&#39;indépendants.</p>

                </div>
            </li>
            <li id="moduless">
                <h1>Modules étudiés :</h1>
                <div class="row_modules row">
                    <div class="col-lg-6 col-md-6">
                    <p id="FC_list"><strong >Semestre 1 :</strong></p>
                        <p>&ndash; Optimisation multicritères</p>
                        <p>&ndash; Environnement juridique et économie du
transport et logistique</p>
                        <p>&ndash; ERP et systèmes de supervision</p>
                        <p>&ndash; Indicateur clés de performance (KPI) des
systèmes industriels et logistiques</p>
                        <p>&ndash; Systèmes d'information hospitaliers</p> 
                        <p>&ndash; Digital Skills II : Excel avancé</p>
                        <p>&ndash; Langues Etrangères</p>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <p id="FC_list"><strong >Semestre 2 :</strong></p>
                            <p>&ndash; Sensibilité et Décision Multicritères</p>
                            <p>&ndash; Gestion des déchets</p>
                            <p>&ndash; Prototypage des systèmes
mécatroniques et robotiques médicaux</p>
                            <p>&ndash; Droit Civisme et Citoyenneté</p>
                            <p>&ndash; Langues Etrangères</p> 
                                 
                        </div>
                </div>
                
                
            </li>
            <li id="frais">
                <h1>Frais :</h1>
                <p>&ndash; Frais de traitement de dossier<strong> 200 DHS.</strong></p>
                <p>&ndash; Frais d’inscription et d’assurance <strong>3 500 DHS.</strong></p>
                <p>&ndash; Frais de scolarité cycle Licence <strong>28 000 DHS.</strong></p>
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