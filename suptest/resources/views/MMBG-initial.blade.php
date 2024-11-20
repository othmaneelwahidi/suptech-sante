@extends('layouts.master_page')
@section('content')
<div class="hero-imagefc">
            <img  src="{{asset('SUPTECH_SANTE-main/assets/fc2.jpg')}}" >
            <div class="hero-textfc">
                <h6 class="display-4">Master en Maintenance et Génie Biomédical</h6>
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
        
    
<div id="text_fc1"> <p>Vous avez un BAC+3 et vous êtes intéressé par le secteur de la santé ? Notre Master en Maintenance
et Génie Biomédical a pour objectif de former des ingénieurs spécialistes des matériels et
équipements de haute technologie destinés au secteur hospitalier, aux établissements de soins et aux
professionnels de la santé.</p>
    
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
                
                &ndash;Licence des études fondamentales (Spécialité : Physique, Mathématiques, SVT,
Informatique, Electronique)
                <br>
                
                &ndash;Tout diplôme équivalent (Spécialité : Scientifique, 1ère année du cycle ingénieur validé
dans le même domaine)
<br>
                &ndash; Licence (Spécialité : Maintenance, Génie biomédical, sciences de la santé,
Electronique, Mécanique, Electrotechnique, Informatique, Mathématique, Physique)
<br>
                </p>
            </li>
            <li id="débouchés">
                <h1>Débouchés professionnels de la formation :</h1>
                <div class="">
                <p><strong>Les diplômés de notre programme de Master en Maintenance en Génie Biomédical peuvent
poursuivre diverses carrières, notamment :</strong> <br> &nbsp;&nbsp;
                    </p>
                <p>Technicien en maintenance biomédicale dans les hôpitaux et les cliniques<br> &nbsp;&nbsp;</p>
                <p>Ingénieur biomédical dans les entreprises de maintenance biomédicale<br> &nbsp;&nbsp;</p>
                <p>Gestionnaire des technologies de l&#39;information en santé<br> &nbsp;&nbsp;</p>
                <p>Consultant en gestion de la maintenance biomédicale<br> &nbsp;&nbsp;</p>
                <p>Spécialiste en réglementation des dispositifs médicaux<br> &nbsp;&nbsp;</p>
                
                </div>
            </li>
            <li id="moduless">
                <h1>Modules étudiés :</h1>
                <div class="row_modules row">
                    <div class="col-lg-6 col-md-6">
                    <p id="FC_list"><strong >Semestre 1 :</strong></p>
                        <p>&ndash; Sciences Biologiques</p>
                        <p>&ndash; Statistiques et
Recherche
Opérationnelle</p>
                        <p>&ndash; Electronique
Analogique</p>
                        <p>&ndash; Radiologie Médical
(IRM, ULS, RX)</p>
                        <p>&ndash; Informatique</p> 
                        
                        <p>&ndash; Langues Etrangères</p>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <p id="FC_list"><strong >Semestre 2 :</strong></p>
                            <p>&ndash; Acquisition et traitement
des signaux
biomédicaux</p>
                            <p>&ndash; Technologie Biomédicale</p>
                            <p>&ndash; Gestion de La
Maintenance</p>
                            <p>&ndash; Démarche Qualité en
domaine Biomédical</p>
                            <p>&ndash; Gestion Hospitalière et
Marchés Publics</p> 
                            <p>&ndash; Informatique</p> 
                                 
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