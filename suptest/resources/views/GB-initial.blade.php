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
                 <p>- Bac + 2 scientifiques dans l’une des spécialités suivantes :
                    Physique, Mathématiques, Electronique, Informatique, Mécanique, Electrique, SVT.
                <br>- Être admis au Concours National Commun (CNC).</p>
                    
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
                    <div class="container">
                
                        <div class="row">
                            <td>Semestre 1</td>
                            <td>Electronique Analogique</td>
                            <td>Biologie Cellulaire pour l'ingénieur</td>
                            <td>Algorithmique et Programmation C</td>
                            <td>Anatomie fonctionnelle pour l'ingénieur</td>
                            <td>Bases Physiques</td>
                            <td>Ingénierie Biomédicale</td>
                            <td>Langue et communication 1</td>
                            <td></td>
                            <td></td>
                        </div>
                        <div class="row">
                            <td>Semestre 2</td>
                            <td>Electronique Numérique </td>
                            <td>Physiologie humaine et physiopathologie </td>
                            <td>Radiologie Médicale ( IRM, ULS, XRAY) </td>
                            <td>Programmation orientée objet </td>
                            <td>Analyse Numérique </td>
                            <td>Traitement de signal </td>
                            <td>Droit et Gestion de l'entreprise </td>
                            <td>Langue et communication 2 </td>
                            <td>Stage </td>
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