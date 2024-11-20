@extends('layouts.master_page')
@section('content')
<head><style>
    .form-Title {
  color: #007bff;
  margin-bottom: 30px;
}

</style></head>
<div class=" container legend">
  <h2 class="display-4 form-Title2" id="form-Title">Pré-inscription en formations continue</h2>
</div>

@if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

<form method="post" action="{{ route('InsertFormationContinue', ['slug' => App::getLocale()]) }}" method="post"
    role="form" class="php-email-form">
    @csrf
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 form-group">
                <label for="Nom">{{ __('messages.nom') }} :</label>
                <input type="text" name="Nom" class="form-control" id="Nom" placeholder="{{ __('messages.nom') }}" required="">
            </div>

            <div class="col-lg-4 col-md-6 form-group">
                <label for="Prenom">{{ __('messages.prenom') }} :</label>
                <input type="text" name="Prenom" class="form-control" id="Prenom" placeholder="{{ __('messages.prenom') }}" required="">
            </div>

            <div class="col-lg-4 col-md-6 form-group">
                <label for="dip">Dernier Diplôme obtenu :</label>
                <select class="form-select" id="dipdip" name="dip" aria-label="select" required="">
                    <option disabled="" selected="" value="">{{ __('messages.dipFc') }}</option>
                    <option value="BAC en cours">BAC en cours</option>
                    <option value="BAC">BAC</option>
                    
                    <option value="BAC+2">BAC+2</option>
                    <option value="BAC+3">BAC+3</option>
                    
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
                <input type="text" class="form-control" name="telephone" id="telephone" placeholder="Téléphone" required="">
            </div>
            <input type="hidden" class="form-control" name="tsrc"
                                                    id="tsrc" placeholder="tsrc " pattern="\d+"
                                                    value="{{ request('tsrc') }}">
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
                <input type="text" class="form-control" name="adresse" id="adresse" placeholder="Adresse" required="">
            </div>

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
                <select class="form-select" name="Ville" id="Ville" aria-label="select" required="">
                    <option disabled="" selected="" value="">Ville de formation</option>
                    <option value="Ville de formation :">Ville de formation :</option>
                    <option value="MOHAMMEDIA">MOHAMMEDIA</option>
                    <option value="ESSAOUIRA">ESSAOUIRA</option>
                    
                </select>
            </div>

        </div>

        <div class="row">
            <div class="col-lg-6 col-md-6 form-group">
                        <label> Carte D'Identité Nationale :</label>
                        <input type="file" class="form-control" name="cinpdf" id="cinpdf" accept="application/pdf" required="">
            </div>
            <div class="col-lg-6 col-md-6 form-group">
                        <label> Votre CV : </label>
                        <input type="file" class="form-control" name="cv" id="cv" accept="application/pdf" required="">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 form-group">
                        <label> Dernier diplome obtenu :</label>
                        <input type="file" class="form-control" name="ddo" id="ddo" accept="application/pdf" required="">
            </div>
            <div class="col-lg-6 col-md-6 form-group">
                        <label> Reçu frais d'étude d'inscription :</label>
                        <input type="file" class="form-control" name="RecuC" id="RecuC" accept="application/pdf" required="">
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

<script>
    var loader = document.querySelector('.loader');
    var msg = document.querySelector('.msg');
    // Hide the <div> element by setting its "display" CSS property to "none"
    loader.style.display = 'none';
    msg.style.display = 'block';


    $("#succes1").hide();

    $("#danger").hide();

    $("#OrderInfo").on("submit", function(e) {

        loader.style.display = 'block';
        msg.style.display = 'none';
        $.ajax({
            type: "POST",

            url: "{{ route('InsertFormationContinue', ['slug' => App::getLocale()]) }}",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            dataType: 'json',
            success: function(response) {
                $("#succes1").hide();
                $("#danger").hide();






                if (response.hasOwnProperty('message_deja')) {


                    $("#danger").show();
                    //alert(response.message);
                    document.getElementById('danger').innerText = response.message_deja;

                }



                if (response.hasOwnProperty('message')) {

                    $("#succes1").show();
                    //alert(response.message);
                    document.getElementById('succes1').innerText = response.message;
                    // document.getElementById('succes1').innerHTML += response.message_bourse;

                    if (response.hasOwnProperty('pdf_inscription') && response.hasOwnProperty(
                            'pdf_bourse')) {
                        if (response.hasOwnProperty('message_bourse')) {

                            document.getElementById('succes1').innerHTML +=
                                "<br><br> <p> {{ __('messages.RecuDetailsText') }} </p> <br> <h3> {{ __('messages.DocumentsEtudiant') }}  </h3><br><p>    {{ __('messages.CNI') }} .<br> {{ __('messages.FDB') }} .<br> </p> ";
                            document.getElementById('succes1').innerHTML +=
                                "<br> <h3> {{ __('messages.ppd') }}  </h3><br> " + response
                                .message_bourse;
                            document.getElementById('succes1').innerHTML +=
                                "<br><br> <p> {{ __('messages.RecuDetailsFooterText1') }} <a href='https://suptech-sante.ma/fr/Suivi' target='_blank'>{{ __('messages.Click') }}</a> {{ __('messages.RecuDetailsFooterTextContinue') }} <br> {{ __('messages.RecuDetailsFooterText2') }} <br> {{ __('messages.RecuDetailsFooterText3') }} </p><br> ";
                        }

                        var pdfData = atob(response.pdf_inscription);
                        var pdfArray = new Uint8Array(pdfData.length);
                        for (var i = 0; i < pdfData.length; i++) {
                            pdfArray[i] = pdfData.charCodeAt(i);
                        }
                        // Create a blob from the decoded PDF data
                        var blob = new Blob([pdfArray], {
                            type: 'application/pdf'
                        });
                        var url = URL.createObjectURL(blob);
                        var link = document.createElement('a');
                        link.href = url;
                        link.download = 'reçu_inscription.pdf';
                        link.click();



                        var pdfData = atob(response.pdf_bourse);
                        var pdfArray = new Uint8Array(pdfData.length);
                        for (var i = 0; i < pdfData.length; i++) {
                            pdfArray[i] = pdfData.charCodeAt(i);

                        }
                        // Create a blob from the decoded PDF data
                        var blob = new Blob([pdfArray], {
                            type: 'application/pdf'
                        });
                        var url = URL.createObjectURL(blob);
                        var link = document.createElement('a');
                        link.href = url;
                        link.download = 'pdf_bourse.pdf';
                        link.click();



                    }




                    if (response.hasOwnProperty('pdf_bourse') && !response.hasOwnProperty(
                            'pdf_inscription')) {
                        document.getElementById('succes1').innerHTML +=
                            "<br><br> <p> {{ __('messages.RecuDetailsText') }} </p> <br> <h3> {{ __('messages.DocumentsEtudiant') }}  </h3><br><p>    {{ __('messages.CNI') }} .<br> {{ __('messages.FDB') }} .<br> </p> ";
                        document.getElementById('succes1').innerHTML +=
                            "<br> <h3> {{ __('messages.ppd') }}  </h3><br> " + response
                            .message_bourse;
                        document.getElementById('succes1').innerHTML +=
                            "<br><br> <p> {{ __('messages.RecuDetailsFooterText1') }} <a href='https://suptech-sante.ma/fr/Suivi' target='_blank'>{{ __('messages.Click') }}</a> {{ __('messages.RecuDetailsFooterTextContinue') }} <br> {{ __('messages.RecuDetailsFooterText2') }} <br> {{ __('messages.RecuDetailsFooterText3') }} </p><br> ";


                        var pdfData = atob(response.pdf_bourse);
                        var pdfArray = new Uint8Array(pdfData.length);
                        for (var i = 0; i < pdfData.length; i++) {
                            pdfArray[i] = pdfData.charCodeAt(i);

                        }
                        // Create a blob from the decoded PDF data
                        var blob = new Blob([pdfArray], {
                            type: 'application/pdf'
                        });
                        var url = URL.createObjectURL(blob);
                        var link = document.createElement('a');
                        link.href = url;
                        link.download = 'reçu_bourse.pdf';
                        link.click();
                    }



                    if (!response.hasOwnProperty('pdf_bourse') && response.hasOwnProperty(
                            'pdf_inscription')) {

                        document.getElementById('succes1').innerText = response.message;

                        var pdfData = atob(response.pdf_inscription);
                        var pdfArray = new Uint8Array(pdfData.length);
                        for (var i = 0; i < pdfData.length; i++) {
                            pdfArray[i] = pdfData.charCodeAt(i);

                        }
                        // Create a blob from the decoded PDF data
                        var blob = new Blob([pdfArray], {
                            type: 'application/pdf'
                        });
                        var url = URL.createObjectURL(blob);
                        var link = document.createElement('a');
                        link.href = url;
                        link.download = 'reçu_inscription.pdf';
                        link.click();



                    }



                    document.getElementById("OrderInfo").reset();


                    loader.style.display = 'none';
                    msg.style.display = 'block';


                }
                loader.style.display = 'none';
                msg.style.display = 'block';
            },
            error: function(xhr, status, error) {
                console.log(xhr);
                loader.style.display = 'none';
                msg.style.display = 'block';

                $("#danger").show();

            }
        });
        e.preventDefault();
    });
</script>
<!--  Script  change the language -->

<script>
    var Days = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31]; // index => month [0-11]

    const months = ["", "{{ __('messages.janvier') }}", "{{ __('messages.fevrier') }}",
        "{{ __('messages.mars') }}", "{{ __('messages.avril') }}", "{{ __('messages.mai') }}",
        "{{ __('messages.juin') }}", "{{ __('messages.juillet') }}", "{{ __('messages.aout') }}",
        "{{ __('messages.septembre') }}", "{{ __('messages.octobre') }}", "{{ __('messages.novembre') }}",
        "{{ __('messages.decembre') }}"
    ];


    $(document).ready(function() {
        var option = "<option value='day' disabled>{{ __('messages.jour') }}</option>";
        var selectedDay = "day";
        for (var i = 1; i <= Days[0]; i++) { //add option days
            if (i <= 9) {
                option += '<option value="' + i + '">' + '0' + i + '</option>';
            } else {
                option += '<option value="' + i + '">' + i + '</option>';
            }

        }
        $('#day').append(option);
        $('#day').val(selectedDay);

        var option = "<option value='month' disabled >{{ __('messages.mois') }}</option>";
        var selectedMon = "month";
        for (var i = 1; i <= 12; i++) {

            if (i <= 9) {
                option += '<option value="' + i + '">' + months[i] + '</option>';
            } else {
                option += '<option value="' + i + '">' + months[i] + '</option>';
            }

        }
        $('#month').append(option);
        $('#month').val(selectedMon);

        var option = "<option value='month' disabled>{{ __('messages.mois') }}</option>";
        var selectedMon = "month";
        for (var i = 1; i <= 12; i++) {

            if (i <= 9) {

                option += '<option value="' + i + '">' + months[i] + '</option>';
            } else {
                option += '<option value="' + i + '">' + months[i] + '</option>';
            }

        }
        $('#month2').append(option);
        $('#month2').val(selectedMon);

        var d = new Date();
        var option = "<option value='year' disabled >{{ __('messages.annee') }}</option>";
        selectedYear = "year";
        for (var i = 1974; i <= d.getFullYear() - 16; i++) { // years start i
            option += '<option value="' + i + '">' + i + '</option>';
        }
        $('#year').append(option);
        $('#year').val(selectedYear);
    });

    function isLeapYear(year) {
        year = parseInt(year);
        if (year % 4 != 0) {
            return false;
        } else if (year % 400 == 0) {
            return true;
        } else if (year % 100 == 0) {
            return false;
        } else {
            return true;
        }
    }

    function change_year(select) {
        if (isLeapYear($(select).val())) {
            Days[1] = 29;

        } else {
            Days[1] = 28;
        }
        if ($("#month").val() == 2) {
            var day = $('#day');
            var val = $(day).val();
            $(day).empty();
            var option = '<option value="day" disabled >{{ __('messages.jour') }}</option>';
            for (var i = 1; i <= Days[1]; i++) { //add option days
                if (i <= 9) {
                    option += '<option value="' + i + '">' + '0' + i + '</option>';
                } else {
                    option += '<option value="' + i + '">' + i + '</option>';
                }

            }
            $(day).append(option);
            if (val > Days[month]) {
                val = 1;
            }
            $(day).val(val);
        }
    }

    function change_month(select) {

        var day = $('#day');
        var val = $(day).val();

        if (!val) {
            val = 1;
        }

        $(day).empty();
        var option = '<option value="day" disabled>{{ __('messages.jour') }}</option>';
        var month = parseInt($(select).val()) - 1;
        for (var i = 1; i <= Days[month]; i++) { //add option days
            if (i <= 9) {
                option += '<option value="' + i + '">' + '0' + i + '</option>';
            } else {
                option += '<option value="' + i + '">' + i + '</option>';
            }

        }

        $(day).append(option);
        if (val > Days[month]) {
            val = 1;
        }
        $(day).val(val);


    }
</script>
<script>
    const radioButtons = document.querySelectorAll('input[name="radio-group"]');
    const input1 = document.getElementById('mySelect5');
    const input2 = document.getElementById('mySelect6');
    const input3 = document.getElementById('mySelect7');
    const input4 = document.getElementById('mySelect8');
    const input5 = document.getElementById('mySelect9');
    const input6 = document.getElementById('mySelect10');

    radioButtons.forEach((button) => {
        button.addEventListener('change', (event) => {
            if (event.target.value === 'bourse_oui') {

                const SubmitButton = document.getElementById("CheckForm");
                SubmitButton.setAttribute("data-target", "#collapseTwo");
                SubmitButton.setAttribute("data-toggle", "collapse");

                input1.disabled = false;
                input2.disabled = false;
                input3.disabled = false;
                input4.disabled = false;
                input5.disabled = false;
                input6.disabled = false;


                input1.required = true;
                input2.required = true;
                input3.required = true;
                input4.required = true;
                input5.required = true;
                input6.required = true;


            } else {
                const SubmitButton = document.getElementById("CheckForm");
                SubmitButton.removeAttribute("data-target");
                SubmitButton.removeAttribute("data-toggle");

                input1.disabled = true;
                input2.disabled = true;
                input3.disabled = true;
                input4.disabled = true;
                input5.disabled = true;
                input6.disabled = true;

                input1.required = false;
                input2.required = false;
                input3.required = false;
                input4.required = false;
                input5.required = false;
                input6.required = false;

            }
        });
    });
</script>

<!---->

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>



@endsection