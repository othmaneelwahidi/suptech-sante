@extends('layouts.master_page')
@section('content')
<div class="align-self-center"> 
    <h1 class="display-1 p-title">Résultats du Concours d'Accès aux Classes Préparatoires de l'Ecole SUPTECH SANTE</h1> 
    <div class="resultsC container-fluid"> 
        <div class="row"> 
            <div class="col-lg-5 col-md-5"> 
                <div class="session-container"> 
                    <h2 class="sesT ">Session 1</h2> 
                    <div class="session"> 
                        <a class="session-link" href="#"><h3>Site Mohammedia</h3></a> 
                    </div> 
                    <div class="session"> 
                        <a class="session-link" href="#"><h3>Site Essaouira</h3></a> 
                    </div> 
                </div> 
            </div> 
            <div class="col-md-5 col-lg-5"> 
                <div class="session-container"> 
                    <h2 class="sesT">Session 2</h2> 
                    <div class="session"> <a class="session-link" href="#">
                        <h3>Mohammedia</h3></a> </div> <div class="session"> 
                            <a class="session-link" href="#"><h3>Site Essaouira</h3></a> 
                        </div> 
                    </div> 
                </div> 
            </div> 
        </div> 
    </div> 



    @endsection