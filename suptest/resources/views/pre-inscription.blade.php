
@extends('layouts.master_page')
@section('content')
<head><style>
    .container.legend {
  margin-top: 20px;
  text-align: center;
}

.form-Title {
  color: #007bff;
  margin-bottom: 30px;
}

/* Form Styling */
form {
  background: #ffffff;
  padding: 30px;
  border-radius: 8px;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}

form .form-group label {
  font-weight: bold;
  margin-bottom: 5px;
  display: block;
  color: #555;
}

form .form-control,
form .form-select {
  border-radius: 5px;
  border: 1px solid #ccc;
  padding: 10px;
}

form .form-control:focus,
form .form-select:focus {
  border-color: #007bff;
  box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
}

/* Row Styling */
.row {
  margin-bottom: 15px;
}

/* Radio Buttons */
.custom-radio input[type="radio"] {
  margin-right: 8px;
}
.custom-radio{
    display:flex;
}
.custom-radio label {
  margin-right: 20px;
  color: #555;
}

/* Buttons */
.bt-n {
  background-color: #007bff;
  color: #ffffff;
  padding: 12px 25px;
  border: none;
  border-radius: 5px;
  font-size: 16px;
  font-weight: bold;
  cursor: pointer;
  transition: background-color 0.3s ease-in-out;
}

.bt-n:hover {
  background-color: #0056b3;
}

.bt-n .loader {
  border: 3px solid #f3f3f3;
  border-top: 3px solid #007bff;
  border-radius: 50%;
  width: 20px;
  height: 20px;
  animation: spin 1s linear infinite;
}

@keyframes spin {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

/* Center Elements */
.text-center {
  text-align: center;
}


/* Responsive Styles */
@media (max-width: 768px) {
  .form-group {
    margin-bottom: 20px;
  }

  .bt-n {
    width: 100%;
  }
}
</style></head>
<div class=" container legend">
  <h2 class="display-4 form-Title">Pré-inscription</h2>
</div>


@if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

<form method="post" id="OrderInfo" action="{{ route('inscription', ['slug' => App::getLocale()]) }}"
    method="post" role="form" class="php-email-form">
    
    @csrf
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 form-group">
                <label for="nom">Nom :</label>
                <input type="text" name="Nom" class="form-control" id="Nom" placeholder="{{ __('messages.nom') }}" required="">
            </div>

            <div class="col-lg-4 col-md-6 form-group">
                <label for="prenom">Prénom :</label>
                <input type="text" name="Prenom" class="form-control" id="Prenom" placeholder="{{ __('messages.prenom') }}" required="">
            </div>

            <div class="col-lg-4 col-md-6 form-group">
                <label for="dip">Dernier Diplôme obtenu :</label>
                <select class="form-select" id="dip" name="dip" aria-label="select" required="">
                    <option disabled="" selected="" value="">Dernier Diplôme obtenu / En cours</option>
                    <option value="BAC en cours">BAC en cours</option>
                    <option value="BAC">BAC</option>
                    <option value="BAC+1">BAC+1</option>
                    <option value="BAC+2">BAC+2</option>
                    <option value="BAC+3">BAC+3</option>
                    <option value="BAC+5">BAC+5</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 form-group">
                <label for="cin_massar">Code massar (CNE):</label>
                <input type="text" class="form-control" name="cin_massar" id="cin_massar" placeholder="Code massar /Carte d'identité nationale (CIN):" required="">
            </div>

            <div class="col-lg-4 col-md-6 form-group">
                <label for="email">Email :</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Email" required="">
            </div>

            <div class="col-lg-4 col-md-6 form-group">
                <label for="telephone">Téléphone:</label>
                <input type="text" class="form-control" name="telephone" id="Tele" placeholder="Téléphone" required="">
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 form-group">
                <div class="d-flex justify-content-center">
                    <label id="label"> Sexe : </label>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="custom-radio" name="Sexe" id="mySelect" aria-label="select" required="">
                        <input type="radio" id="femme" name="Sexe" value="femme">
                        <label id="label" for="femme">Femme</label>
                        <input type="radio" id="homme" name="Sexe" value="homme">
                        <label id="label" for="homme">Homme</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 col-md-6 form-group">
                <label for="nat"> Nationalité :</label>
                <select class="form-select form-control" name="nat" id="nat" required="">
                    <option value="" disabled="" selected="">Nationalité</option>
        
                                                        <option value="Afghan">Afghan</option>
                                                        <option value="Albanais">Albanais</option>
                                                        <option value="Algérien">Algérien</option>
                                                        <option value="Américain">Américain</option>
                                                        <option value="Andorran">Andorran</option>
                                                        <option value="Angolais">Angolais</option>
                                                        <option value="Antiguais-et-Barbudien">Antiguais-et-Barbudien
                                                        </option>
                                                        <option value="Argentin">Argentin</option>
                                                        <option value="Arménien">Arménien</option>
                                                        <option value="Australien">Australien</option>
                                                        <option value="Autrichien">Autrichien</option>
                                                        <option value="Azerbaïdjanais">Azerbaïdjanais</option>
                                                        <option value="Bahaméen">Bahaméen</option>
                                                        <option value="Bahreïni">Bahreïni</option>
                                                        <option value="Bangladais">Bangladais</option>
                                                        <option value="Barbadien">Barbadien</option>
                                                        <option value="Belge">Belge</option>
                                                        <option value="Bélizien">Bélizien</option>
                                                        <option value="Béninois">Béninois</option>
                                                        <option value="Bhoutanais">Bhoutanais</option>
                                                        <option value="Biélorusse">Biélorusse</option>
                                                        <option value="Birman">Birman</option>
                                                        <option value="Bissau-Guinéen">Bissau-Guinéen</option>
                                                        <option value="Bolivien">Bolivien</option>
                                                        <option value="Bosnien">Bosnien</option>
                                                        <option value="Botswanais">Botswanais</option>
                                                        <option value="Brésilien">Brésilien</option>
                                                        <option value="Britannique">Britannique</option>
                                                        <option value="Brunéien">Brunéien</option>
                                                        <option value="Bulgare">Bulgare</option>
                                                        <option value="Burkinabé">Burkinabé</option>
                                                        <option value="Burundais">Burundais</option>
                                                        <option value="Cambodgien">Cambodgien</option>
                                                        <option value="Camerounais">Camerounais</option>
                                                        <option value="Canadien">Canadien</option>
                                                        <option value="Cap-Verdien">Cap-Verdien</option>
                                                        <option value="Centrafricain">Centrafricain</option>
                                                        <option value="Chilien">Chilien</option>
                                                        <option value="Chinois">Chinois</option>
                                                        <option value="Chypriote">Chypriote</option>
                                                        <option value="Colombien">Colombien</option>
                                                        <option value="Comorien">Comorien</option>
                                                        <option value="Congolais">Congolais</option>
                                                        <option value="Costaricain">Costaricain</option>
                                                        <option value="Croate">Croate</option>
                                                        <option value="Cubain">Cubain</option>
                                                        <option value="Danois">Danois</option>
                                                        <option value="Djiboutien">Djiboutien</option>
                                                        <option value="Dominicain">Dominicain</option>
                                                        <option value="Dominiquais">Dominiquais</option>
                                                        <option value="Égyptien">Égyptien</option>
                                                        <option value="Émirati">Émirati</option>
                                                        <option value="Équato-Guinéen">Équato-Guinéen</option>
                                                        <option value="Équatorien">Équatorien</option>
                                                        <option value="Érythréen">Érythréen</option>
                                                        <option value="Espagnol">Espagnol</option>
                                                        <option value="Estonien">Estonien</option>
                                                        <option value="Éthiopien">Éthiopien</option>
                                                        <option value="Fidjien">Fidjien</option>
                                                        <option value="Finlandais">Finlandais</option>
                                                        <option value="Français">Française</option>
                                                        <option value="Gabonais">Gabonais</option>
                                                        <option value="Gambien">Gambien</option>
                                                        <option value="Géorgien">Géorgien</option>
                                                        <option value="Ghanéen">Ghanéen</option>
                                                        <option value="Grec">Grec</option>
                                                        <option value="Grenadien">Grenadien</option>
                                                        <option value="Guatémaltèque">Guatémaltèque</option>
                                                        <option value="Guinéen">Guinéen</option>
                                                        <option value="Guyanais">Guyanais</option>
                                                        <option value="Haïtien">Haïtien</option>
                                                        <option value="Hondurien">Hondurien</option>
                                                        <option value="Hongrois">Hongrois</option>
                                                        <option value="Indien">Indien</option>
                                                        <option value="Indonésien">Indonésien</option>
                                                        <option value="Irakien">Irakien</option>
                                                        <option value="Iranien">Iranien</option>
                                                        <option value="Irlandais">Irlandais</option>
                                                        <option value="Islandais">Islandais</option>
                                                        <option value="Israélien">Israélien</option>
                                                        <option value="Italien">Italien</option>
                                                        <option value="Ivoirien">Ivoirien</option>
                                                        <option value="Jamaïcain">Jamaïcain</option>
                                                        <option value="Japonais">Japonais</option>
                                                        <option value="Jordanien">Jordanien</option>
                                                        <option value="Kazakh">Kazakh</option>
                                                        <option value="Kényan">Kényan</option>
                                                        <option value="Kirghize">Kirghize</option>
                                                        <option value="Kiribatien">Kiribatien</option>
                                                        <option value="Koweïtien">Koweïtien</option>
                                                        <option value="Laotien">Laotien</option>
                                                        <option value="Lesothan">Lesothan</option>
                                                        <option value="Lettone">Lettone</option>
                                                        <option value="Libanais">Libanais</option>
                                                        <option value="Libérien">Libérien</option>
                                                        <option value="Libyen">Libyen</option>
                                                        <option value="Liechtensteinois">Liechtensteinois</option>
                                                        <option value="Lituanien">Lituanien</option>
                                                        <option value="Luxembourgeois">Luxembourgeois</option>
                                                        <option value="Macédonien">Macédonien</option>
                                                        <option value="Malaisien">Malaisien</option>
                                                        <option value="Malawien">Malawien</option>
                                                        <option value="Maldivien">Maldivien</option>
                                                        <option value="Malgache">Malgache</option>
                                                        <option value="Maliens">Maliens</option>
                                                        <option value="Maltais">Maltais</option>
                                                        <option value="Marocain">Marocain</option>
                                                        <option value="Marshallais">Marshallais</option>
                                                        <option value="Mauricien">Mauricien</option>
                                                        <option value="Mauritanien">Mauritanien</option>
                                                        <option value="Mexicain">Mexicain</option>
                                                        <option value="Micronésien">Micronésien</option>
                                                        <option value="Moldave">Moldave</option>
                                                        <option value="Monégasque">Monégasque</option>
                                                        <option value="Mongol">Mongol</option>
                                                        <option value="Monténégrin">Monténégrin</option>
                                                        <option value="Mozambicain">Mozambicain</option>
                                                        <option value="Namibien">Namibien</option>
                                                        <option value="Nauruan">Nauruan</option>
                                                        <option value="Néerlandais">Néerlandais</option>
                                                        <option value="Néo-Zélandais">Néo-Zélandais</option>
                                                        <option value="Népalais">Népalais</option>
                                                        <option value="Nicaraguayen">Nicaraguayen</option>
                                                        <option value="Nigérien">Nigérien</option>
                                                        <option value="Nigérian">Nigérian</option>
                                                        <option value="Norvégien">Norvégien</option>
                                                        <option value="Omanais">Omanais</option>
                                                        <option value="Ougandais">Ougandais</option>
                                                        <option value="Ouzbek">Ouzbek</option>
                                                        <option value="Pakistana">Pakistana</option>
                                                        <option value="Palau">Palau</option>
                                                        <option value="Panaméen">Panaméen</option>
                                                        <option value="Papouasien-Néo-Guinéen">Papouasien-Néo-Guinéen
                                                        </option>
                                                        <option value="Paraguayen">Paraguayen</option>
                                                        <option value="Péruvien">Péruvien</option>
                                                        <option value="Philippin">Philippin</option>
                                                        <option value="Polonais">Polonais</option>
                                                        <option value="Portugais">Portugais</option>
                                                        <option value="Qatari">Qatari</option>
                                                        <option value="Roumain">Roumain</option>
                                                        <option value="Russe">Russe</option>
                                                        <option value="Rwandais">Rwandais</option>
                                                        <option value="Saint-Lucien">Saint-Lucien</option>
                                                        <option value="Saint-Marinais">Saint-Marinais</option>
                                                        <option value="Saint-Vincentais-et-Grenadin">
                                                            Saint-Vincentais-et-Grenadin</option>
                                                        <option value="Salomonais">Salomonais</option>
                                                        <option value="Salvadorien">Salvadorien</option>
                                                        <option value="Samoan">Samoan</option>
                                                        <option value="Santoméen">Santoméen</option>
                                                        <option value="Saoudien">Saoudien</option>
                                                        <option value="Sénégalais">Sénégalais</option>
                                                        <option value="Serbe">Serbe</option>
                                                        <option value="Seychellois">Seychellois</option>
                                                        <option value="Sierra-Léonais">Sierra-Léonais</option>
                                                        <option value="Singapourien">Singapourien</option>
                                                        <option value="Slovaque">Slovaque</option>
                                                        <option value="Slovène">Slovène</option>
                                                        <option value="Somalien">Somalien</option>
                                                        <option value="Soudanais">Soudanais</option>
                                                        <option value="Sri-Lankais">Sri-Lankais</option>
                                                        <option value="Suédois">Suédois</option>
                                                        <option value="Suisse">Suisse</option>
                                                        <option value="Surinamien">Surinamien</option>
                                                        <option value="Swazi">Swazi</option>
                                                        <option value="Syrien">Syrien</option>
                                                        <option value="Tadjik">Tadjik</option>
                                                        <option value="Tanzanien">Tanzanien</option>
                                                        <option value="Tchadien">Tchadien</option>
                                                        <option value="Tchèque">Tchèque</option>
                                                        <option value="Thaïlandais">Thaïlandais</option>
                                                        <option value="Timorais">Timorais</option>
                                                        <option value="Togolais">Togolais</option>
                                                        <option value="Tonguien">Tonguien</option>
                                                        <option value="Trinidadien">Trinidadien</option>
                                                        <option value="Tunisien">Tunisien</option>
                                                        <option value="Turc">Turc</option>
                                                        <option value="Turkmène">Turkmène</option>
                                                        <option value="Tuvaluan">Tuvaluan</option>
                                                        <option value="Ukrainien">Ukrainien</option>
                                                        <option value="Uruguayen">Uruguayen</option>
                                                        <option value="Vanuatuan">Vanuatuan</option>
                                                        <option value="Vénézuélien">Vénézuélien</option>
                                                        <option value="Vietnamien">Vietnamien</option>
                                                        <option value="Yéménite">Yéménite</option>
                                                        <option value="Zambien">Zambien</option>
                                                        <option value="Zimbabwéen">Zimbabwéen</option>
                                                        <option value="Autre">Autre</option>
                </select>
            </div>

            <div class="col-lg-6 col-md-6 form-group">
                <label for="adresse">Adresse:</label>
                <input type="text" class="form-control" name="adresse" id="Adresse" placeholder="Adresse" required="">
            </div>
            <input type="hidden" class="form-control" name="tsrc" id="tsrc" placeholder="tsrc "
            pattern="\d+" value="{{ request('tsrc') }}">

            <div class="col-lg-6 col-md-6 form-group">
                <label id="label" for="date_naissance">Date de naissance :</label>
                <input class="form-control" type="date" name="date_naissance" >
            </div>

            <div class="col-lg-6 col-md-6 form-group">
                <label for="cin">Carte d'identité nationale (CIN):</label>
                <input type="text" class="form-control" name="cin" id="cin" placeholder="Carte d'identité nationale (CIN):" required="">
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 col-md-6 form-group">
        <label class="mb-3" id="label">Formation souhaitée</label>
      <select class="form-select" name="Sectors" id="Sectors" aria-label="select" required="">
        <option disabled selected value="">Filières</option>
        <optgroup label="Cycle Classes préparatoires intégrées">
          <option disabled style="color:red;">1ère Année: Date limite d'inscription atteinte</option>
          <option value="Classes préparatoires intégrées: 2ème année">2ème Année</option>
        </optgroup>
        <optgroup label="Cycle ingénieur">
          <option value="Cycle ingénieur: Génie Biomédical">Génie Biomédical</option>
          <option value="Cycle ingénieur: Génie digital et intelligence Artificielle en santé">Génie digital et intelligence Artificielle en santé</option>
          <option value="Cycle ingénieur: Génie Biotechnologie">Génie Biotechnologie</option>
        </optgroup>
        <optgroup label="Cycle licence">
          <option value="Licence en Maintenance Médicale (L2M)">Licence en Maintenance Médicale (L2M)</option>
          <option value="Licence en Génie Industriel et Logistique Hospitalière (LGILH)">Licence en Génie Industriel et Logistique Hospitalière (LGILH)</option>
          <option value="Licence en Informatique Décisionnelle et e-Santé (LIDe-S)">Licence en Informatique Décisionnelle et e-Santé (LIDe-S)</option>
          <option value="Licence en Sciences de Gestion (LSG)">Licence en Sciences de Gestion (LSG)</option>
          <option value="Licence en Techniques de Laboratoires de Biologie Médicale (LTech-Labo)">Licence en Techniques de Laboratoires de Biologie Médicale (LTech-Labo)</option>
          <option value="Licence Infirmier Polyvalent (LIP)">Licence Infirmier Polyvalent (LIP)</option>
          <option value="Licence Infirmier en Anesthésie et Réanimation (LIAR)">Licence Infirmier en Anesthésie et Réanimation (LIAR)</option>
          <option value="Licence Infirmier en Instrumentalisation de Bloc Opératoire&nbsp;(L2IBO)">Licence Infirmier en Instrumentalisation de Bloc Opératoire&nbsp;(L2IBO)</option>
          <option value="Licence Management Et Marketing Digital Du Sport Et Santé">Management Et Marketing Digital Du Sport Et Santé</option>
          <option value="Licence Ingénierie Et Fabrication des Dispositifs Médicaux ">Ingénierie Et Fabrication des Dispositifs Médicaux </option>
        </optgroup>
        
        <optgroup label="Cycle Master">
          <option value="Formation continue Bac+5: Dispositifs médicaux et affaires réglementaires">Dispositifs médicaux et affaires réglementaires</option>
          <option value="Formation continue Bac+5: Maintenance et Génie biomédical">Maintenance et Génie biomédical</option>
          <option value="Formation continue Bac+5: Entreprenariat et Management Technologique">Entreprenariat et Management Technologique</option>
        </optgroup>
      </select>
    </div>
            <div class="col-lg-6 col-md-6 form-group">
                <label for="dip">Ville de formation :</label>
                <select class="form-select" id="Ville" name="Ville" aria-label="select" required="">
                    <option disabled="" selected="" value="">Ville de formation</option>
                    
                    <option value="MOHAMMEDIA">MOHAMMEDIA</option>
                    <option value="ESSAOUIRA">ESSAOUIRA</option>
                    
                </select>
            </div>

        </div>

        
        <div class="row">
            <div class="col-lg-12 form-group">
                <div class="d-flex justify-content-center">
                    <label id="label"> Vous voulez postuler pour une bourse?  </label>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="custom-radio" name="select_bourse" id="select_bourse" aria-label="select" required="">
                        <input type="radio" id="bourse_oui" name="select_bourse" value="bourse_oui">
                        <label id="label" for="bourse_oui">Oui</label>
                        <input type="radio" id="bourse_non" name="select_bourse" value="bourse_non">
                        <label id="label" for="bourse_non">Non</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="text-center">
                <button type="submit" class="bt-n" id="CheckForm">
                    <div class="my-class">
                        <span class="loader" style="display: none;"></span>
                    </div>
                    <div  style="display: block;"> S'inscrire </div>
                </button>
            </div>
        </div>
    </div>
</form>







@endsection