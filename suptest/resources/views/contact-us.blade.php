@extends('layouts.nav_c')
@section('content')

@if(Session::has('locale'))
    @if(Session::get('locale') == 'ar')
        <html lang="ar" dir="rtl">
    @else
        <html lang="fr">
    @endif
@else
<html lang="fr">
@endif

<main>
    <div class="contact-container contact-header">
        <h2 class="contact-title" id="contact-heading">Contactez-nous</h2>
    </div>
    <div class="contact-container" data-aos="fade-up">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <form action="/InsertContact" id="contact-us-form" method="post" role="form" class="contact-email-form">
    @csrf
    <div class="contact-wrapper">
        <img src="{{asset('SUPTECH_SANTE-main/assets/mail.png')}}" alt="Mail Icon" class="contact-image">
        <div class="contact-form-content">
            <div class="row">
                <div class="contact-column">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label id="label-name" for="input-name">Nom complet :</label>
                            <input class="form-control input-name" type="text" name="name" id="input-name" placeholder="Nom complet">
                        </div>
                        <div class="form-group">
                            <label id="label-phone" for="input-phone">Téléphone :</label>
                            <input class="form-control input-phone" type="tel" name="Tele" id="input-phone" placeholder="+212600000000">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label id="label-email" for="input-email">Email :</label>
                            <input class="form-control input-email" type="email" id="input-email" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label id="label-subject" for="input-subject">Objet :</label>
                            <input class="form-control input-subject" type="text" name="subject" id="input-subject" placeholder="Objet">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label id="label-message" for="input-message">Message :</label>
                            <textarea class="form-control textarea-message" name="message" id="input-message" style="height: 80px;"></textarea>
                        </div>
                        <div class="contact-column">
                            <div class="text-center">
                                <button type="submit" class="contact-submit-btn">
                                    <div>Envoyer</div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

    </div>
</main>

<script>
    $("#success-alert").hide();
    $("#error-alert").hide();

    $("#contact-us-form").on("submit", function(e) {
        $("#success-alert").hide();
        $("#error-alert").hide();
        $.ajax({
            type: "POST",
            url: "{{ route('InsertContact', ['slug' => App::getLocale()]) }}",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function(response) {
                $("#success-alert").show();
                $("#contact-us-form")[0].reset(); 
            },
            error: function(response) {
                $("#error-alert").show();
            }
        });
        e.preventDefault();
    });
</script>

<script>  
    $(".language-switcher").change(function(){
        if($(this).val() == 'fr'){
            window.location.href = "/fr/contact";
        } else if($(this).val() == 'ar'){
            window.location.href = "/ar/contact";
        }
    });
</script>

@endsection
