@extends('layouts.master_page')
@section('content')<!--==============================formations=================================================================-->

<div class="sec" id="sec" style="margin-top: 0%;">
        <div class="row" >
            <div class="col-md-12 text-right"  >
              <div class="formation-title align-content-lg-start d-flex Title-s">

                <img src="{{asset('SUPTECH_SANTE-main/assets/grad-cap.png')}}" alt="Icon" >
                <h3 class="underline-text  custom-underline" id="cycle">Cycles classes preparatoires</h3>
        
              </div>
            </div>
        </div>

        <div class="containerF ">
            
            <div class="row Frow ">
                <div class="col-lg-3 col-md-6">
                  <a href="1sty-cycle-initial " class=" hoverarea" >
                     <img src="{{asset('SUPTECH_SANTE-main/assets/medical-snake.png')}}" class="img-tree--left" alt="">
                     <img src="{{asset('SUPTECH_SANTE-main/assets/medical-snake.png')}}" class="img-tree--right" alt="">
                    <div class="card card-formations ">
                    <h4>1ère année</h4>
                    <center> <img src="{{asset('SUPTECH_SANTE-main/assets/2.png')}}" class="img-fluid"> </center>   
                    </div>   
                  </a>
                </div>

                <div class="col-lg-3 col-md-6">
                  <a href="2nd-y-cycle-initial " class=" hoverarea" >
                    <img src="{{asset('SUPTECH_SANTE-main/assets/medical-snake.png')}}" class="img-tree--left" alt="">
                    <img src="{{asset('SUPTECH_SANTE-main/assets/medical-snake.png')}}" class="img-tree--right" alt="">
                    <div class="card card-formations ">
                    <h4>2ème année</h4>
                    <center> <img src="{{asset('SUPTECH_SANTE-main/assets/2.png')}}" class="img-fluid"> </center>
                    </div>   
                  </a>
                </div>
            </div> 
        </div>
        <div class="row  " >
            <div class="col-md-12 text-right"  >
              <div class="formation-title align-content-lg-start d-flex Title-s">

                <img src="{{asset('SUPTECH_SANTE-main/assets/grad-cap.png')}}" alt="Icon" >
                <h3 class="underline-text  custom-underline" id="CI">Cycles Ingénieur</h3>
        
              </div>
            </div>
        </div>

        <div class="cards">
            <div class="row Frow ">
                <div class="col-lg-3 col-md-6">
                  <a href="GB-initial " class=" hoverarea" >
                    <img src="{{asset('SUPTECH_SANTE-main/assets/medical-snake.png')}}" class="img-tree--left" alt="">
                    <img src="{{asset('SUPTECH_SANTE-main/assets/medical-snake.png')}}" class="img-tree--right" alt="">
                    <div class="card card-formations ">
                    <h4>Génie Biomédical</h4>
                    <center> <img src="{{asset('SUPTECH_SANTE-main/assets/4.png')}}" class="img-fluid"> </center>   
                    </div>   
                  </a>
                </div>

                <div class="col-lg-3 col-md-6">
                  <a href="GDIAS-initial " class=" hoverarea" >
                    <img src="{{asset('SUPTECH_SANTE-main/assets/medical-snake.png')}}" class="img-tree--left" alt="">
                    <img src="{{asset('SUPTECH_SANTE-main/assets/medical-snake.png')}}" class="img-tree--right" alt="">
                    <div class="card card-formations ">
                    <h4>Génie digital et intelligence Artificielle en santé</h4>
                    <center> <img src="{{asset('SUPTECH_SANTE-main/assets/3.png')}}" class="img-fluid"> </center>
                    </div>   
                  </a>
                </div>
                <div class="col-lg-3 col-md-6">
                  <a href="GBtech-initial " class=" hoverarea" >
                    <img src="{{asset('SUPTECH_SANTE-main/assets/medical-snake.png')}}" class="img-tree--left" alt="">
                    <img src="{{asset('SUPTECH_SANTE-main/assets/medical-snake.png')}}" class="img-tree--right" alt="">
                    <div class="card card-formations ">
                    <h4>Ingénierie Biotechnologie</h4>
                    <center> <img src="{{asset('SUPTECH_SANTE-main/assets/5.png')}}" class="img-fluid"> </center>
                    </div>   
                  </a>
                </div>
            </div> 
        </div>
        <div class="row " >
            <div class="col-md-12 text-right"  >
              <div class="formation-title align-content-lg-start d-flex Title-s">

                <img src="{{asset('SUPTECH_SANTE-main/assets/grad-cap.png')}}" alt="Icon" >
                <h3 class="underline-text  custom-underline" id="Licence">Cycles Licence</h3>
        
              </div>
            </div>
        </div>

        <div class="cards">
            <div class="row Frow ">
                <div class="col-lg-3 col-md-6">
                  <a href="LMM-initial " class=" hoverarea" >
                    <img src="{{asset('SUPTECH_SANTE-main/assets/medical-snake.png')}}" class="img-tree--left" alt="">
                    <img src="{{asset('SUPTECH_SANTE-main/assets/medical-snake.png')}}" class="img-tree--right" alt="">
                    <div class="card card-formations ">
                    <h4>Licence en Maintenance Médicale (L2M)</h4>
                    <center> <img src="{{asset('SUPTECH_SANTE-main/assets/9.png')}}" class="img-fluid"> </center>   
                    </div>   
                  </a>
                </div>

                <div class="col-lg-3 col-md-6">
                  <a href="LGIH-initial " class=" hoverarea" >
                    <img src="{{asset('SUPTECH_SANTE-main/assets/medical-snake.png')}}" class="img-tree--left" alt="">
                    <img src="{{asset('SUPTECH_SANTE-main/assets/medical-snake.png')}}" class="img-tree--right" alt="">
                    <div class="card card-formations ">
                    <h4>Licence en Génie Industriel et Logistique Hospitalière (LGILH)</h4>
                    <center> <img src="{{asset('SUPTECH_SANTE-main/assets/Genie-indistruel.png')}}" class="img-fluid"> </center>
                    </div>   
                  </a>
                </div>

                <div class="col-lg-3 col-md-6">
                  <a href="LIDSED-initial " class=" hoverarea" >
                    <img src="{{asset('SUPTECH_SANTE-main/assets/medical-snake.png')}}" class="img-tree--left" alt="">
                    <img src="{{asset('SUPTECH_SANTE-main/assets/medical-snake.png')}}" class="img-tree--right" alt="">
                    <div class="card card-formations ">
                    <h4>Licence en Informatique Décisionnelle et e-Santé (LIDe-S)</h4>
                    <center> <img src="{{asset('SUPTECH_SANTE-main/assets/10.png')}}" class="img-fluid"> </center>
                    </div>   
                  </a>
                </div>
        </div> 
        <div class="row Frow ">
                <div class="col-lg-3 col-md-6">
                  <a href="LSG-initial " class=" hoverarea" >
                    <img src="{{asset('SUPTECH_SANTE-main/assets/medical-snake.png')}}" class="img-tree--left" alt="">
                    <img src="{{asset('SUPTECH_SANTE-main/assets/medical-snake.png')}}" class="img-tree--right" alt="">
                    <div class="card card-formations ">
                    <h4>Licence en Sciences de Gestion (LSG)</h4>
                    <center> <img src="{{asset('SUPTECH_SANTE-main/assets/8.png')}}" class="img-fluid"> </center>
                    </div>   
                  </a>
                </div>
            
            
                <div class="col-lg-3 col-md-6">
                  <a href="LBM-initial " class=" hoverarea" >
                    <img src="{{asset('SUPTECH_SANTE-main/assets/medical-snake.png')}}" class="img-tree--left" alt="">
                    <img src="{{asset('SUPTECH_SANTE-main/assets/medical-snake.png')}}" class="img-tree--right" alt="">
                    <div class="card card-formations ">
                    <h4>Licence en Techniques de Laboratoires de Biologie Médicale (LTech-Labo)</h4>
                    <center> <img src="{{asset('SUPTECH_SANTE-main/assets/13.png')}}" class="img-fluid"> </center>   
                    </div>   
                  </a>
                </div>

                <div class="col-lg-3 col-md-6">
                  <a href="LIP-initial " class=" hoverarea" >
                    <img src="{{asset('SUPTECH_SANTE-main/assets/medical-snake.png')}}" class="img-tree--left" alt="">
                    <img src="{{asset('SUPTECH_SANTE-main/assets/medical-snake.png')}}" class="img-tree--right" alt="">
                    <div class="card card-formations ">
                    <h4>Licence Infirmier Polyvalent (LIP)</h4>
                    <center> <img src="{{asset('SUPTECH_SANTE-main/assets/14.png')}}" class="img-fluid"> </center>
                    </div>   
                  </a>
                </div>
</div>
<div class="row Frow ">
                <div class="col-lg-3 col-md-6">
                  <a href="LIAR-initial " class=" hoverarea" >
                    <img src="{{asset('SUPTECH_SANTE-main/assets/medical-snake.png')}}" class="img-tree--left" alt="">
                    <img src="{{asset('SUPTECH_SANTE-main/assets/medical-snake.png')}}" class="img-tree--right" alt="">
                    <div class="card card-formations ">
                    <h4>Licence Infirmier en Anesthésie et Réanimation (LIAR)</h4>
                    <center> <img src="{{asset('SUPTECH_SANTE-main/assets/15.png')}}" class="img-fluid"> </center>
                    </div>   
                  </a>
                </div>

                <div class="col-lg-3 col-md-6">
                  <a href="LIIBO-initial " class=" hoverarea" >
                    <img src="{{asset('SUPTECH_SANTE-main/assets/medical-snake.png')}}" class="img-tree--left" alt="">
                    <img src="{{asset('SUPTECH_SANTE-main/assets/medical-snake.png')}}" class="img-tree--right" alt="">
                    <div class="card card-formations ">
                    <h4>Licence Infirmier en Instrumentalisation de Bloc Opératoire (L2IBO)</h4>
                    <center> <img src="{{asset('SUPTECH_SANTE-main/assets/16.png')}}" class="img-fluid"> </center>
                    </div>   
                  </a>
                </div>
            
            
                <div class="col-lg-3 col-md-6">
                  <a href="LMMDSS-initial " class=" hoverarea" >
                    <img src="{{asset('SUPTECH_SANTE-main/assets/medical-snake.png')}}" class="img-tree--left" alt="">
                    <img src="{{asset('SUPTECH_SANTE-main/assets/medical-snake.png')}}" class="img-tree--right" alt="">
                    <div class="card card-formations ">
                    <h4>Licence en Management et Marketing Digital du Sport et Santé</h4>
                    <center> <img src="{{asset('SUPTECH_SANTE-main/assets/11.png')}}" class="img-fluid"> </center>
                    </div>   
                  </a>
                </div>
</div>
<div class="row Frow ">
                <div class="col-lg-3 col-md-6">
                  <a href="LIFDM-initial " class=" hoverarea" >
                    <img src="{{asset('SUPTECH_SANTE-main/assets/medical-snake.png')}}" class="img-tree--left" alt="">
                    <img src="{{asset('SUPTECH_SANTE-main/assets/medical-snake.png')}}" class="img-tree--right" alt="">
                    <div class="card card-formations ">
                    <h4>Licence en Ingénierie et fabrication des dispositifs médicaux</h4>
                    <center> <img src="{{asset('SUPTECH_SANTE-main/assets/12.png')}}" class="img-fluid"> </center>
                    </div>   
                  </a>
                </div>
            </div>
        </div>
        <div class="row " >
            <div class="col-md-12 text-right"  >
              <div class="formation-title align-content-lg-start d-flex Title-s">

                <img src="{{asset('SUPTECH_SANTE-main/assets/grad-cap.png')}}" alt="Icon" >
                <h3 class="underline-text  custom-underline" id="master">Cycle Master</h3>
        
              </div>
            </div>
        </div>

        <div class="cards">
            <div class="row Frow">
                <div class="col-lg-3 col-md-6" >
                  <a href="MDMAR-initial " class=" hoverarea" >
                    <img src="{{asset('SUPTECH_SANTE-main/assets/medical-snake.png')}}" class="img-tree--left" alt="">
                    <img src="{{asset('SUPTECH_SANTE-main/assets/medical-snake.png')}}" class="img-tree--right" alt="">
                    <div class="card card-formations ">
                    <h4>Master en dispositifs médicaux et affaires réglementaires </h4>
                    <center> <img src="{{asset('SUPTECH_SANTE-main/assets/18.png')}}" class="img-fluid"> </center>   
                    </div>   
                  </a>
                </div>

                <div class="col-lg-3 col-md-6">
                  <a href="MMBG-initial " class=" hoverarea" >
                    <img src="{{asset('SUPTECH_SANTE-main/assets/medical-snake.png')}}" class="img-tree--left" alt="">
                    <img src="{{asset('SUPTECH_SANTE-main/assets/medical-snake.png')}}" class="img-tree--right" alt="">
                    <div class="card card-formations ">
                    <h4>Master en Maintenance et Génie biomédical </h4>
                    <center> <img src="{{asset('SUPTECH_SANTE-main/assets/22.png')}}" class="img-fluid"> </center>
                    </div>   
                  </a>
                </div>

                <div class="col-lg-3 col-md-6">
                  <a href="MEMT-initial " class=" hoverarea" style="text-decoration: none;">
                    <img src="{{asset('SUPTECH_SANTE-main/assets/medical-snake.png')}}" class="img-tree--left" alt="">
                    <img src="{{asset('SUPTECH_SANTE-main/assets/medical-snake.png')}}" class="img-tree--right" alt="">
                    <div class="card card-formations ">
                    <h4>Master en entreprenariat et Management Technologique </h4>
                    <center> <img src="{{asset('SUPTECH_SANTE-main/assets/19.png')}}" class="img-fluid"> </center>
                    </div>   
                  </a>
                </div>
            </div> 
        </div>

    </div>
    
    @endsection