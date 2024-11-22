@extends('layouts.master_page')
@section('content')
<div class="hero-imagefc">
            <img  src="{{asset('SUPTECH_SANTE-main/assets/fc2.jpg')}}" >
            <div class="hero-textfc">
                <h6 class="display-4">Infirmier en Instrumentalisation de Bloc Opératoire :</h6>
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
        
    
<div id="text_fc1"> <p>Plongez dans le monde stimulant et dynamique du bloc opératoire avec notre programme spécialisé
en instrumentalisation. Vous apprendrez à préparer la salle d&#39;opération, à assister les chirurgiens
pendant les interventions, à gérer les instruments médicaux et à maintenir des normes élevées de
stérilité et de sécurité. Avec une formation pratique et une expertise technique, vous serez prêt à
jouer un rôle essentiel dans le succès des interventions chirurgicales.</p>
    
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
                
                    
                    
                    <p >&ndash; Baccalauréat Sciences de la Vie et de la Terre<br>
                
                        
                
                &ndash; Baccalauréat Sciences Physiques <br>
                &ndash; Baccalauréat science Mathématiques A
<br>
                &ndash; Baccalauréat science Mathématiques B
<br>
                
                </p>
            </li>
            <li id="débouchés">
                <h1>Débouchés professionnels de la formation :</h1>
                <div class="">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque, ut.</p>
                
                

                </div>
            </li>
            <li id="moduless">
                <h1>Modules étudiés :</h1>
                <div class="row_modules row">
                    <div class="col-lg-6 col-md-6">
                    <p id="FC_list"><strong >Semestre 1 :</strong></p>
                        <p>&ndash; Techniques
d&#39;asepsie et de
stérilisation</p>
                        <p>&ndash; Introduction à
l&#39;instrumentalisatio
n en bloc
opératoire</p>
                        <p>&ndash; Méthodologie de
travail
universitaire</p>
                        <p>&ndash; Pharmacologie
générale</p>
                        <p>&ndash; Langues
étrangères</p>
                        <p>&ndash; Soins de base &amp;
Discipline
infirmière</p> 

                        <p>&ndash; Anatomie et
physiologie</p>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <p id="FC_list"><strong >Semestre 2 :</strong></p>
                            <p>&ndash; Techniques de
préparation
préopératoire</p>
                            <p>&ndash; Pathologies
courantes en bloc
opératoire</p>
                            <p>&ndash; Pharmacologie</p>
                            <p>&ndash; Rôle de
l&#39;instrumentiste
dans l&#39;équipe
chirurgicale</p>
                            
                            <p>&ndash; Gestion des
dispositifs
médicaux et des
équipements</p>
                            <p>&ndash; Culture digitale</p>
                            <p>&ndash; Langues
Etrangères</p>
                            
                                 
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