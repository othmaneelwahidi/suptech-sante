@extends('layouts.master_page')
@section('content')
<div class=" container legend">
  <h2 class="display-4 form-Title">Demande De Bourse</h2>
</div>

@if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
    <form id="OrderInfo" action="{{ route('InsertBourse', ['slug' => App::getLocale()]) }}"
        method="post" role="form" class="php-email-form">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 form-group">
                    <label for="Nom">Nom complet :</label>
                    <input type="text" name="Nom" class="form-control" id="Nom" placeholder="Nom complet" required="">
                </div>

                <div class="col-lg-4 col-md-6 form-group">
                    <label for="email">Email :</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Email" required="">
                </div>

                <div class="col-lg-4 col-md-6 form-group">
                    <label for="cin">Carte d'identité nationale (CIN):</label>
                    <input type="text" class="form-control" name="cin" id="cin" placeholder="Numéro de CIN" required="">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 form-group">
                    <label for="date_naissance">Date de naissance:</label>
                    <input type="date" id="date_naissance" name="date_naissance" class="form-control">
                </div>

                <div class="col-lg-4 col-md-6 form-group">
                    <label for="telephone">Téléphone:</label>
                    <input type="text" class="form-control" name="telephone" id="telephone" placeholder="Téléphone" required="">
                </div>

                <div class="col-lg-4 col-md-6 form-group">
                    <label for="adresse">Adresse:</label>
                    <input type="text" class="form-control" name="adresse" id="adresse" placeholder="Adresse" required="">
                </div>
            </div>
            <input type="hidden" class="form-control" name="tsrc" id="tsrc" placeholder="tsrc" pattern="\d+" value="">
        </div>
        
            <div class="row">
                <div class="col-lg-6 col-md-6 form-group">
                    <label for="cin_massar">Code massar (CNE):</label>
                    <input type="text" class="form-control" name="cin_massar" id="cin_massar" placeholder="Code massar (CNE)" required="">
                </div>
                
            </div>
            <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 form-group">
                    <label for="nom_pere_complet">Nom complet père:</label>
                    <input type="text" class="form-control" name="nom_pere_complet" id="nom_pere_complet" placeholder="Nom complet père" required="">
                </div>

                <div class="col-lg-6 col-md-6 form-group">
                    <label for="profession">Etat:</label>
                    <select class="form-select" name="profession" id="mySelect" aria-label="select" required="">
                        <option disabled selected value="">Etat</option>
                        <option value="Père décédé">Père décédé </option>                        
                        <option value="Père non décédé">Père non décédé </option>
                    </select>
                </div>
                </div>
            <div class="row">
                <div class="col-lg-6 form-group">
                    <label for="ncm">Nom Complet mère:</label>
                    <input type="text" class="form-control" name="ncm" id="ncm" placeholder="Nom Complet mère" required="">
                </div>

                <div class="col-lg-6 col-md-6 form-group">
                    <label for="profession_mere">Etat:</label>
                    <select class="form-select" name="profession_mere" id="mySeleprofession_merect" aria-label="select" required="">
                        <option disabled selected value="">Etat</option>
                        <option value="Mère décédé">Mère décédé </option>                        
                        <option value="Mère non décédé">Mère non décédé </option>
                    </select>
                </div>
            </div>
        </div>
          
    <div class="container">
  
        <div class="row">
                <div class="col-lg-6 form-group">
                    <label for="ncm">Nom Complet Tuteur:</label>
                    <input type="text" class="form-control" name="nct" id="nct" placeholder="Nom Complet mère" required="">
                </div>

                <div class="col-lg-6 col-md-6 form-group">
                    <label for="profession">Etat:</label>
                    <select class="form-select" name="profession_tuteur" id="mySeleprofession_tuteur" aria-label="select" onchange="toogleInput()" required="">
                        <option disabled selected value="">Etat</option>
                        <option value="Aucun Tuteur ">Aucun Tuteur </option>                        
                        <option value="Tuteur">Tuteur</option>
                    </select>
                </div>
            </div>
<div class="text-center">

                <button type="submit" class="bt-n">


                 <div class="my-class">
                                    <span class="loader" style="display: none;"></span>
                 </div>
                    <div  style="display: block;"> Demander</div>
                </button>


</div>

<!--
                        <div class="alert alert-success alert-dismissible fade show  m-auto mt-5" style="width:50%; display:none;" id="succes1" role="alert">
                            <strong>
                                 Succès: </strong> Votre Pré-inscription est effectuée avec succès!

                        </div>

                        <div class="alert alert-danger alert-dismissible fade show  m-auto mt-5" style="width:50% ; display:none;" id="danger" role="alert">
                            <strong>Erreur: </strong>
                             Une erreur s'est produite! essayez plus tard

                        </div>
                   

-->
</div>


    </form>


    @endsection