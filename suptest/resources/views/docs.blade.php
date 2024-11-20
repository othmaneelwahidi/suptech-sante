@extends('layouts.master_page')
@section('content')<!--____________________docs interface_________________________________________-->
<div class=" container legend">
  <h2 class="display-4 form-Title">Documents</h2>
</div>


<div class="container docs">
  <div class="row docR">
    <div class="col-lg-5 col-md-5 card">
      <a class="card-text text-center"  href="{{asset('SUPTECH_SANTE-main/assets/REGLEMENT_ETUDES_INTERIEUR_CYCLE_INGENIEUR.pdf')}}" >reglement interieur classes preparatoires et cycle d’ingenieur</a>
    </div>
    <div class="col-lg-5 col-md-5 card">
      <a class="card-text text-center"  href="{{asset('SUPTECH_SANTE-main/assets/Acte_de_cautionnement.pdf')}}">Acte de cautionnement</a>    
    </div>
  </div>
  <div class="row docR">
    <div class="col-lg-5 col-md-5 card">
      <a class="card-text text-center"  href="{{asset('SUPTECH_SANTE-main/assets/Suptech_sante_RIB.pdf')}}" >RIB</a>
    </div>
  </div>
  <div class="row docR">
    <div class="col-lg-5 col-md-5 card">
      <a class="card-text text-center"  href="{{asset('SUPTECH_SANTE-main/assets/Règlement_Inernat.pdf')}}" >Reglement internat</a>
    </div>
    <div class="col-lg-5 col-md-5 card">
      <a class="card-text text-center" href="{{asset('SUPTECH_SANTE-main/assets/REGLEMENT_INTERIEUR_CYCLE_LICENCE_MASTER VF.pdf')}}">Reglement Cycle liicence et master</a>    
    </div>
  </div>
</div>

@endsection