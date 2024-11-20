@extends('layouts.master_page')
@section('content')


<div class="container legend">
  <h2 class="display-4 form-Title2">Suivi De Demande De Bourse</h2>
</div>
@if (session('status'))
<div class="alert alert-danger">
    {{ session('status') }}
</div>
@endif
    <form id="regForm" action="{{ route('check_signup', ['slug' => App::getLocale()]) }}"
        method="post">
        @csrf
        <div class="container">
            <div class="row">
    <div class="col-lg-12 col-md-12 form-group">
                    <label for="recu">Numéro reçu d'inscription</label>
                    <input type="text" name="code_inscription" class="form-control" id="Nom" placeholder="Vérification reçu d'inscription" required="">
                </div>                

                @error('code_inscription')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
            </div>
            <div class="container">
            <div class="text-center" id="nextprevious">
                <button type="submit" class="bt-n" id="CheckForm">
                    <div class="my-class">
                        <span class="loader" style="display: none;"></span>
                    </div>
                    <div  style="display: block;"> Suivant </div>
                </button>
            </div>
        </div>
        </div>
    </form>
    
    @endsection