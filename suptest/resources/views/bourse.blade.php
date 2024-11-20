@extends('layouts.master_page')
@section('content')

<!--%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%Form%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%-->

<div class=" container legend">
  <h2 class="display-4 form-Title">Vérification d'inscription</h2>
</div>

    <form id="regForm" action="{{ route('check_signup', ['slug' => App::getLocale()]) }}"
      method="post">
      @csrf
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 form-group">
                    <label for="recu" id="register">Numéro reçu d'inscription</label>
                    <input type="text" name="code_inscription" class="form-control"  placeholder="Vérification reçu d'inscription" required="">
                </div>

                
            </div>
            
        
          
    <div class="container">
  
  </div>
  
  @error('code_inscription')
  <div class="alert alert-danger">{{ $message }}</div>
@enderror

<div class="text-center">

                <button type="submit" id="btn">


                 <div class="my-class">
                   <span class="loader" style="display: none;"></spa>
                 </div>
                    <div  style="display: block;"> Suivant </div>
                </button>


</div>

</div>


</form>







    @endsection