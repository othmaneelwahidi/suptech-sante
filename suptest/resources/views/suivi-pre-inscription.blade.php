@extends('layouts.master_page')
@section('content')
<div class="container legend">
  <h2 class="display-4 form-Title2">Suivi De Demande De Pré-inscription</h2>
</div>

    <form method="post">
        <div class="container">
            <div class="row">
    <div class="col-lg-12 col-md-12 form-group">
                    <label for="recu">Numéro reçu d'inscription</label>
                    <input type="text" name="recu" class="form-control" id="Nom" placeholder="Vérification reçu d'inscription" required="">
                </div>            
    <div class="col-lg-12 col-md-6 form-group">
                    <label for="cin">Carte d'identité nationale (CIN):</label>
                    <input type="text" class="form-control" name="cin" id="cin" placeholder="Numéro de CIN" required="">
                </div>
    <div class="col-lg-12 col-md-6 form-group">
                    <label for="date_naissance">Date de naissance:</label>
                    <input type="date" id="date_naissance" name="date_naissance" class="form-control">
                </div>

            </div>
        </div>
        <div class="container">
            <div class="text-center">
                <button type="submit" class="bt-n" id="CheckForm">
                    <div class="my-class">
                        <span class="loader" style="display: none;"></span>
                    </div>
                    <div  style="display: block;"> Suivant </div>
                </button>
            </div>
        </div>
    </form>

    @endsection