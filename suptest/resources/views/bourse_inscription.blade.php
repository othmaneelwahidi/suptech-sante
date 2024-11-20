<!DOCTYPE html>


<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SUPTECH SANTE</title>
    <meta content="" name="description">
    <meta content="" name="keywords">



    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900"
        rel="stylesheet">

    @include('layouts.MainCss')


    <style>
        select option[value="off"] {
            background: #93b1c7;
        }


        .loader {
            width: 30px;
            height: 30px;
            border: 5px solid white;
            border-radius: 50%;
            display: block;
            box-sizing: border-box;
            position: relative;
            animation: pulse 1s linear infinite;
        }

        .loader:after {
            content: '';
            position: absolute;
            width: 30px;
            height: 30px;
            border: 5px solid white;
            border-radius: 50%;
            display: inline-block;
            box-sizing: border-box;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            animation: scaleUp 1s linear infinite;
        }

        <blade keyframes|%20scaleUp%20%7B%0D>0% {
            transform: translate(-50%, -50%) scale(0)
        }

        60%,
        100% {
            transform: translate(-50%, -50%) scale(1)
        }
        }

        <blade keyframes|%20pulse%20%7B%0D>0%,
        60%,
        100% {
            transform: scale(1)
        }

        80% {
            transform: scale(1.2)
        }
        }
    </style>

</head>

<body style="height: 100% !important ;">



    @include('layouts.header')

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>{{ __('messages.RequestBourse') }}</h2>
            </div>

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif


            <div class="row" id="response">

                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">

                    <form id="OrderInfo" action="{{ route('InsertBourse', ['slug' => App::getLocale()]) }}"
                        method="post" role="form" class="php-email-form">
                        @csrf
                        <div class="row">
                            <a class="mb-3"> <i class="bi bi-asterisk "></i> {{ __('messages.id') }} </a> <br>
                            <div class="col-lg-4 form-group">
                                <label> <small>{{ __('messages.nom_complet') }} :</small> </label>
                                <input type="text" name="Nom" class="form-control" id="Nom"
                                    placeholder="{{ __('messages.nom_complet') }}" required>
                            </div>

                            <div class="col-lg-4 form-group">
                                <label> <small>{{ __('messages.Email') }} :</small> </label>
                                <input type="text" name="email" class="form-control" id="email"
                                    placeholder="{{ __('messages.Email') }}" required>
                            </div>


                            <div class="col-lg-4 form-group">
                                <label> <small>{{ __('messages.cin2') }} :</small> </label>
                                <input type="text" class="form-control" name="cin" id="cin"
                                    placeholder="{{ __('messages.cin2') }} " required>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-lg-4 form-group">
                                <label for="date_naissance"> <small> {{ __('messages.dn') }}</small> </label>
                                <input type="date" id="date_naissance" name="date_naissance"
                                    style="width: 100%; height: 50px;">
                            </div>


                            <div class="col-lg-4 form-group">
                                <label> <small>{{ __('messages.Tele') }} :</small> </label>
                                <input type="text" class="form-control" name="telephone" id="telephone"
                                    placeholder="{{ __('messages.Tele') }}" required>
                            </div>

                            <div class="col-lg-4 form-group">
                                <label> <small>{{ __('messages.adresse') }} :</small> </label>
                                <input type="text" class="form-control" name="adresse" id="adresse"
                                    placeholder=" {{ __('messages.adresse') }} " required>
                            </div>


                            <input type="hidden" class="form-control" name="tsrc" id="tsrc" placeholder="tsrc "
                                pattern="\d+" value="{{ request('tsrc') }}">

                        </div>



                        <div class="row">
                            <div class="col-lg-4 form-group">
                                <label> <small>{{ __('messages.cne3') }} :</small> </label>
                                <input type="text" class="form-control" name="cin_massar" id="cin_massar"
                                    placeholder=" {{ __('messages.cne3') }} " required>
                            </div>




                            <div class="col-lg-4 form-group">
                                <label> <small>{{ __('messages.cmp') }} :</small> </label>
                                <input type="text" class="form-control" name="nom_pere_complet" id="nom_pere_complet"
                                    placeholder="{{ __('messages.cmp') }}" required>
                            </div>




                            <div class="col-lg-4 form-group">
                                <label> <small>{{ __('messages.profession') }} :</small> </label>
                                <select class="form-select" name="profession" id="mySelect" aria-label="select"
                                    required>
                                    <option disabled selected value> {{ __('messages.profession') }}
                                    </option>
                                    <option value="Parent commerçant">{{ __('messages.pcmrct') }} </option>
                                    <option value="Parent fonctionnaire">{{ __('messages.pfctn') }} </option>
                                    <option value="Parent salarié">{{ __('messages.psals') }} </option>
                                    <option value="Parent retraité">{{ __('messages.pret') }} </option>
                                    <option value="Parent dans la profession libérale">{{ __('messages.psal') }}
                                    </option>
                                    <option value="Parent sans activité professionnelle">{{ __('messages.pap') }}
                                    </option>
                                    <option value="Parent décédé">{{ __('messages.pdec') }} </option>
                                </select>

                            </div>

                            <div class="row">
                                <div class="col-lg-4 form-group">
                                    <label> <small>{{ __('messages.ncm') }} :</small> </label>
                                    <input type="text" class="form-control" name="ncm" id="email"
                                        placeholder="{{ __('messages.ncm') }}" required>
                                </div>

                                <div class="col-lg-4 form-group">
                                    <label> <small>{{ __('messages.profession') }} :</small> </label>
                                    <select class="form-select" name="profession_mere" id="mySeleprofession_merect"
                                        aria-label="select" required>
                                        <option disabled selected value> {{ __('messages.profession') }}
                                        </option>
                                        <option value="Parent commerçant">{{ __('messages.pcmrct') }} </option>
                                        <option value="Parent fonctionnaire">{{ __('messages.pfctn') }} </option>
                                        <option value="Parent salarié">{{ __('messages.psals') }} </option>
                                        <option value="Parent retraité">{{ __('messages.pret') }} </option>
                                        <option value="Parent dans la profession libérale">{{ __('messages.psal') }}
                                        </option>
                                        <option value="Parent sans activité professionnelle">{{ __('messages.pap') }}
                                        </option>
                                        <option value="Parent décédé">{{ __('messages.pdec') }} </option>
                                    </select>


                                </div>

                            </div>
                            <div class="row">
                                <a class="mb-3"> <i class="bi bi-asterisk "></i> {{ __('messages.fst') }} </a> <br>
                                <div class="col-lg-12 form-group">
                                    <select class="form-select" name="Sectors" aria-label="select" required>
                                        <option disabled selected value>{{ __('messages.fs') }} </option>

                                        <option disabled value="off">
                                            {{ __('messages.ccpi') }} </option>

                                        <option disabled style="color:red;">
                                            {{ __('messages.1ere2') }}</option>

                                        <option value="Classes préparatoires intégrées: 2ème année">
                                            {{ __('messages.2eme') }}</option>



                                        <option disabled value="off">{{ __('messages.ingenieur') }}
                                        </option>
                                        <option value="Cycle ingénieur: Génie Biomédical">
                                            {{ __('messages.gb') }}</option>
                                        <option
                                            value="Cycle ingénieur: Génie digital et intelligence Artificielle en santé">
                                            {{ __('messages.gdias') }}</option>

                                        <option disabled value="off">{{ __('messages.licence') }}</option>
                                        <option value="Licence en Maintenance Médicale (L2M)">
                                            {{ __('messages.lpmgb') }}</option>
                                        <option value="Licence en Génie Industriel et Logistique Hospitalière (LGILH)">
                                            {{ __('messages.lpgil') }}</option>
                                        <option value="Licence en Informatique Décisionnelle et e-Santé (LIDe-S)">
                                            {{ __('messages.lpidsd') }}</option>
                                        <option value="Licence en Sciences de Gestion (LSG)">
                                            {{ __('messages.lpsg') }}</option>


                                        <option
                                            value="Licence en Techniques de Laboratoires de Biologie Médicale (LTech-Labo)">
                                            {{ __('messages.ltlbm') }}</option>
                                        <option value="Licence Infirmier Polyvalent (LIP)">
                                            {{ __('messages.lip') }}</option>
                                        <option value="Licence Infirmier en Anesthésie et Réanimation (LIAR)">
                                            {{ __('messages.liar') }}</option>
                                        <option
                                            value="Licence Infirmier en Instrumentalisation de Bloc Opératoire (L2IBO)">
                                            {{ __('messages.liibo') }}</option>



                                        <option disabled value="off">
                                            {{ __('messages.FormationContinueLycence') }}</option>

                                        <option value="Formation continue Bac+3: Maintenance Médicale (L2M)">
                                            {{ __('messages.lpmgbFC') }}</option>
                                        <option
                                            value="Formation continue Bac+3: Génie Industriel et Logistique Hospitalière (LGILH)">
                                            {{ __('messages.lpgilFC') }}</option>
                                        <option
                                            value="Formation continue Bac+3: Informatique Décisionnelle et e-Santé (LIDe-S)">
                                            {{ __('messages.lpidsdFC') }}</option>
                                        <option value="Formation continue Bac+3: Sciences de Gestion (LSG)">
                                            {{ __('messages.lpsgFC') }}</option>
                                        <option
                                            value="Formation continue Bac+3: Techniques de Laboratoires de Biologie Médicale (LTech-Labo)">
                                            {{ __('messages.ltlbmFC') }}</option>
                                        <option value="Formation continue Bac+3: Infirmier Polyvalent (LIP)">
                                            {{ __('messages.lipFC') }}</option>
                                        <option
                                            value="Formation continue Bac+3: Infirmier en Anesthésie et Réanimation (LIAR)">
                                            {{ __('messages.liarFC') }}</option>
                                        <option
                                            value="Formation continue Bac+3: Infirmier en Instrumentalisation de Bloc Opératoire (L2IBO)">
                                            {{ __('messages.liiboFC') }}</option>




                                        <option disabled value="off">
                                            {{ __('messages.FormationContinueMaster') }}</option>

                                        <option
                                            value="Formation continue Bac+5: Dispositifs médicaux et affaires réglementaires">
                                            {{ __('messages.mdmarFC') }} </option>
                                        <option value="Formation continue Bac+5: Maintenance et Génie biomédical">
                                            {{ __('messages.mmgbFC') }}</option>
                                        <option
                                            value="Formation continue Bac+5: Entreprenariat et Management Technologique">
                                            {{ __('messages.memtFC') }} </option>
                                    </select>

                                </div>
                            </div>
                            <div class="row">
                                <a class="mb-3"> <i class="bi bi-asterisk "></i> {{ __('messages.tbd') }} </a> <br>
                                <div class="col-lg-12 form-group">


                                    <select class="form-select" name="type_bourse" id="mySelect"
                                        aria-label="select" required>
                                        <option disabled selected value> {{ __('messages.tbd') }}
                                        </option>
                                        <option value="100%">{{ __('messages.100') }} </option>
                                        <option value="50%">{{ __('messages.50') }} </option>
                                        <option value="20%">{{ __('messages.20') }} </option>

                                    </select>


                                </div>

                            </div>

                            <div class="row">
                                <a class="mb-3"> <i class="bi bi-asterisk "></i> {{ __('messages.possedez_vous') }}
                                </a> <br>
                                <div class="col-lg-12 form-group">


                                    <select class="form-select" name="compte_bancaire" id="mySelect"
                                        aria-label="select" required>
                                        <option disabled selected value> {{ __('messages.oui/non') }}
                                        </option>
                                        <option value="oui">{{ __('messages.oui') }} </option>
                                        <option value="non">{{ __('messages.non') }} </option>

                                    </select>


                                </div>

                            </div>


                        </div>
                        <div class="text-center">

                            <button type="submit">


                                <div class="my-class">
                                    <span class="loader"></span>
                                </div>

                                <div class="msg"> {{ __('messages.inscrire') }} </div>

                            </button>


                        </div>

                        <div class="alert alert-success alert-dismissible fade show  m-auto mt-5"
                            style="width:50%; display:none;" id="succes1" role="alert">
                            <strong>
                                {{ __('messages.success') }}</strong>{{ __('messages.successMsg') }}

                        </div>

                        <div class="alert alert-danger alert-dismissible fade show  m-auto mt-5"
                            style="width:50% ; display:none;" id="danger" role="alert">
                            <strong>{{ __('messages.echec') }}</strong>
                            {{ __('messages.erreurMsg') }}

                        </div>
                    </form>


                </div>


            </div>


        </div>
    </section><!-- End Contact Us Section -->

    <div
        style="position: fixed; bottom: 20px; left: 30px; z-index: 99; font-size: 18px; border: none; outline: none; color: white; cursor: pointer; border-radius: 4px;">

        <select class="form-control changeLang">
            <option value="fr" {{ session()->get('locale') == 'fr' ? 'selected' : '' }}>
                {{ __('Fr') }}</option>
            <option value="ar" {{ session()->get('locale') == 'ar' ? 'selected' : '' }}>
                {{ __('Ar') }}</option>
        </select>



    </div>

    </main>
    <!-- End #main -->
    @include('layouts.footer')
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    @include('layouts.MainJs')

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
            $("#succes1").hide();
            $("#danger").hide();
            $.ajax({
                type: "POST",

                url: "{{ route('InsertBourse', ['slug' => App::getLocale()]) }}",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                dataType: 'json',
                success: function(response) {
                    $("#succes1").hide();
                    $("#danger").hide();
                    if (response.flag == 'true') {
                        // window.open(response);


                        // Create a blob from the decoded PDF data

                        $("#succes1").show();
                        document.getElementById('response').innerHTML =
                            "<h5 style='color: green; text-align: center;'>{{ __('messages.vdebe') }}</h5> <br> <p> {{ __('messages.RecuDetailsText') }} </p>";
                        document.getElementById('response').innerHTML +=
                            "<h5 style='color: black; text-align: session()->get('locale') == 'ar' ? right : left;'>{{ __('messages.DocumentsEtudiant') }} : </h5> <br> <p>    {{ __('messages.CNI') }} .<br> {{ __('messages.FDB') }} .<br> </p>";
                        document.getElementById('response').innerHTML +=
                            "<h5 style='color: black; text-align: session()->get('locale') == 'ar' ? right : left;'>{{ __('messages.ppd') }} : </h5> ";
                        document.getElementById('response').innerHTML += response.message;
                        document.getElementById('response').innerHTML +=
                            "<br><br> <p> {{ __('messages.RecuDetailsFooterText1') }} <a href='https://suptech-sante.ma/fr/Suivi' target='_blank'>{{ __('messages.Click') }}</a> {{ __('messages.RecuDetailsFooterTextContinue') }} <br> {{ __('messages.RecuDetailsFooterText2') }} <br> {{ __('messages.RecuDetailsFooterText3') }} </p><br> ";


                        var pdfData = atob(response.pdf);
                        var pdfArray = new Uint8Array(pdfData.length);
                        for (var i = 0; i < pdfData.length; i++) {
                            pdfArray[i] = pdfData.charCodeAt(i);
                        }

                        var blob = new Blob([pdfArray], {
                            type: 'application/pdf'
                        });

                        var url = URL.createObjectURL(blob);
                        var link = document.createElement('a');
                        link.href = url;
                        link.download = 'reçu_bourse.pdf';
                        link.click();

                        loader.style.display = 'none';
                        msg.style.display = 'block';






                        /*
                        loader.style.display = 'none';
                        msg.style.display = 'block';
                        $("#danger").show();
                        //alert(response.message);
                        document.getElementById('danger').innerText = response.message;
                        */
                    } else if (response.flag == 'already') {
                        document.getElementById('response').innerHTML =
                            "<h5 style='color: red; text-align: center;'>Vous êtes déja inscrit à cette bourse</h5> ";
                    }
                },
                error: function(xhr, status, error) {
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
        /* Show/hide the "other" input based on the selected option
      const select = document.getElementById("mySelect");
      const otherOption = document.getElementById("otherOption");
      select.addEventListener("change", function() {
        if (select.value === "other") {
          otherOption.style.display = "block";
        } else {
          otherOption.style.display = "none";
        }
      });*/
    </script>
    <script>
        $(".changeLang").change(function() {
            if ($(this).val() == 'fr') {
                window.location.href = "/fr/bourse_inscription";
            } else if ($(this).val() == 'ar') {
                window.location.href = "/ar/bourse_inscription";
            }
        });
    </script>

    <!--  End Script  change the language -->

</body>

</html>
