@extends('layouts.master_page')
@section('content')
<div class="campus">
<div class="row" >
    <div class="col-lg-5 col-md-5">
        <div class="heading">
<h1 class="complex-clip"><i class="ri-school-line"></i>MOHAMMEDIA</h1>
</div>
<div id="p">
<div style="position: relative;">
            <img src="{{asset('SUPTECH_SANTE-main/assets/suptech-sante-mohammadia-campus.jpg')}}" alt="" class="img-responsive imgC" >
            <p class="caption">Le campus de Mohammedia offre un cadre dynamique où l'apprentissage rencontre la diversité culturelle, stimulant ainsi la croissance intellectuelle et personnelle de ses étudiants.</p>
            
            <div>
                <div>
                    <ul>
                        
                        <li class="links"><a href="https://maps.google.com/?q=SUPTECH SANTE : Zone Industrielle, MOHAMMEDIA"><i class="ri-map-pin-2-fill"></i> SUPTECH SANTE : Zone Industrielle, MOHAMMEDIA </a></li>
                    </ul>
                </div>
                <div>
                    <ul>
                        
                        <li class="links"><a href="tel:+212661625586"> <i class="ri-phone-line"></i> +212 661 625 586 </a></li>
                    </ul>
                </div>
                <div>
                    <ul>
                        
                        <li class="links"><a href="mailto:contact-mohammedia@suptech-sante.ma"><i class="ri-mail-line"></i> contact-mohammedia@suptech-sante.ma </a></li>
                    </ul>
                </div>
            </div>
        </div></div>
    </div>
    <div class="col-lg-5 col-md-5">
        <div class="heading">
<h1 class="complex-clip"><i class="ri-school-line"></i>ESSAOUIRA </h1>
</div>
<div id="p">
<div style="position: relative;">
            <img src="{{asset('SUPTECH_SANTE-main/assets/suptech sante essaouira.jpg')}}" alt="" class="img-responsive imgC"  >
            <p class="caption">Le campus d’Essaouira offre un cadre dynamique où l'apprentissage rencontre la diversité culturelle, stimulant ainsi la croissance intellectuelle et personnelle de ses étudiants.</p>
            <div>
                <div>
                    <ul>
                        
                        <li class="links"><a href="https://maps.google.com/?q=SUPTECH SANTE: Avenue Al Akwas, Essaouira"><i class="ri-map-pin-2-fill"></i> SUPTECH SANTE: Avenue Al Akwas, Essaouira </a></li>
                    </ul>
                </div>
                <div>
                    <ul>
                        
                        <li class="links"><a href="tel:+212666405885"><i class="ri-phone-line"></i> +212 666 405 885 </a></li>
                    </ul>
                </div>
                <div>
                    <ul>
                        
                        <li class="links"><a href="mailto:contact@suptech-environnement.ma"><i class="ri-mail-line"></i>  contact-essaouira@suptech-sante.ma </a></li>
                    </ul>
                </div>
            </div>
        </div></div>
    </div>
</div>
</div>
<!--================================== facilities=============================================-->
        <div class="container facilities">
        <h2 class="display-3 text-center C-heading">salle des jeux</h2>
        <div class="row">
            
            <div class="col-lg-6 col-md-10 cmp">
                <img src="{{asset('SUPTECH_SANTE-main/assets/gaming.png')}}" class="img-fluid" alt="Image 1">
            </div>
            <div class="col-lg-6 col-md-10 cmp">
            <p>Venez vous détendre et vous amuser dans notre salle des jeux entièrement équipée ! Avec une PlayStation dernière génération et une sélection des jeux les plus populaires, cette salle est l'endroit idéal pour faire une pause, se déconnecter des études et socialiser avec vos camarades. Que vous soyez un passionné de jeux vidéo ou que vous souhaitiez simplement passer un bon moment, notre salle des jeux vous offre un espace de divertissement incomparable.</p>            </div>
        </div>
        <h2 class="display-3 text-center C-heading" >ping pong</h2>
        <div class="row">
            <div class="col-lg-6 col-md-10 cmp">
            <p>Affûtez vos réflexes et profitez de moments de détente dans notre espace de ping-pong. Que vous soyez un joueur débutant ou un expert du tennis de table, notre salle dédiée au ping-pong est l'endroit parfait pour défier vos amis, organiser des tournois amicaux et améliorer votre technique. C'est un excellent moyen de rester actif, de renforcer l'esprit de compétition et de créer des liens avec vos camarades.</p>
            </div>
            <div class="col-lg-6 col-md-10 cmp">
            <img src="{{asset('SUPTECH_SANTE-main/assets/ping pong.png')}}" class="img-fluid " alt="Image 2">
            </div>
        </div>
        <h2 class="display-3 text-center C-heading">Cafeteria</h2>
        <div class="row">
            
            <div class="col-lg-6 col-md-10">
                <img src="{{asset('SUPTECH_SANTE-main/assets/suptechante cafeteria.jpg')}}" class="img-fluid" alt="Image 3">
            </div>
            <div class="col-lg-6 col-md-10 cmp">
            <p>Savourez des pauses gourmandes dans notre cafétéria conviviale et accueillante. Offrant une variété de repas sains, de snacks et de boissons, notre cafétéria est l'endroit idéal pour vous détendre entre les cours. Que vous ayez besoin d'un café pour bien démarrer la journée ou d'un déjeuner équilibré pour recharger vos batteries, notre équipe se tient à votre disposition pour vous offrir des options délicieuses et nutritives dans un cadre agréable.</p>
            </div>
        </div>
        <h2 class="display-3 text-center C-heading" >Bibliotheque</h2>
        <div class="row">
            <div class="col-lg-6 col-md-10 cmp">
            <p>Plongez-vous dans un univers de connaissances et d'apprentissage dans notre bibliothèque moderne et bien équipée. Avec une vaste collection de livres, de revues académiques et de ressources numériques, notre bibliothèque est le lieu parfait pour vos recherches, vos études et votre développement personnel. Profitez d'un environnement calme et propice à la concentration, ainsi que des conseils avisés de notre personnel pour maximiser votre expérience d'apprentissage.</p>
            </div>
            <div class="col-lg-6 col-md-6">
            <img src="{{asset('SUPTECH_SANTE-main/assets/suptech library.jpg')}}" class="img-fluid" alt="Image 4">
            </div>
        </div>
    </div>




@endsection