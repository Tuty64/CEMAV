<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css"  href="{{asset('css/home.css')}}"> 
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    
    <title>CEMAV</title>
  </head>

  <body>
  @include('includes.nav')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center" id="portada">
                <h1 style="margin-top:120px;">CENTRE DE MEDICINA AMABLE DE VIC</h1>
                <h2>Persones tractant a persones</h2>
                <a href="{{URL::to('/contacte')}}" class="btn btn-light" style="margin-top:60px;">Contacte</a>
            </div>
        </div>
        <div class="row" id="especialitats_titol">
          <div class="col-md-12" style="text-align:center;">
             <h1 style="margin-top: 50px">Especialitats</h1>
             <p>Els nostres especialistes ofereixen tots els seus coneixements i les seves habilitats per acompanyar-vos en el vostre procés de sanació.</p>
          </div>
        </div>
        <div class="row" id="especialitats">
            <div class="col-12 col-md-2 container-departaments">
                <img src="img/Odontologia.jpg" onclick="javascript:window.location='{{URL::to('/odontologia')}}';" alt="departament 1" class="img-dep">
                <a href="{{URL::to('/odontologia')}}" class="title-dep">
                    </br><span class="title-dep">Odontologia</span>
                </a> 
            </div>
            <div class="col-12 col-md-2 container-departaments">
                <img src="img/DepilacioLaser.jpg" onclick="javascript:window.location='{{URL::to('/depilació')}}';" alt="departament 1" class="img-dep">
                <a href="{{URL::to('/depilació')}}" class="title-dep">
                    </br><span class="title-dep">Depilaciò làser</span>
                </a>
            </div>
            <div class="col-12 col-md-2 container-departaments">
                <img src="img/Fisioteràpia.jpg" onclick="javascript:window.location='{{URL::to('/fisioteràpia')}}';" alt="departament 1" class="img-dep">
                <a href="{{URL::to('/fisioteràpia')}}" class="title-dep">
                    </br><span class="title-dep">Fisioteràpia</span>
                </a>
            </div>
            <div class="col-12 col-md-2 container-departaments">
                <img src="img/Urologia.jpg" onclick="javascript:window.location='{{URL::to('/urologia')}}';" alt="departament 1" class="img-dep">
                <a href="{{URL::to('/urologia')}}" class="title-dep">
                    </br><span class="title-dep">Urologia</span>
                </a>
            </div>
            <div class="col-12 col-md-2 container-departaments">
                <img src="img/Optometria.jpg" onclick="javascript:window.location='{{URL::to('/optometria')}}';" alt="departament 1" class="img-dep">
                <a href="{{URL::to('/optometria')}}" class="title-dep">
                    </br><span class="title-dep">Optometria</span>
                </a>
            </div>
            <div class="col-12 col-md-2 container-departaments">
                <img src="img/Psicologia.png" onclick="javascript:window.location='{{URL::to('/psicologia')}}';" alt="departament 1" class="img-dep">
                <a href="{{URL::to('/psicologia')}}" class="title-dep">
                    </br><span class="title-dep">Psicologia</span>
                </a>
            </div>
        </div>
        <div class="row" id="especialitats">
            <div class="col-12 col-md-2 container-departaments">
                <img src="img/PersonesTractantPersones.jpg" onclick="javascript:window.location='{{URL::to('/oftalmologia')}}';" alt="departament 1" class="img-dep">
                <a href="{{URL::to('/oftalmologia')}}" class="title-dep">
                    </br><span class="title-dep">Oftalmologia</span>
                </a>
            </div>

            <div class="col-12 col-md-2 container-departaments">
                <img src="img/RevisionsMèdiques.jpg" onclick="javascript:window.location='{{URL::to('/traumatologia')}}';" alt="departament 1" class="img-dep">
                <a href="{{URL::to('/traumatologia')}}" class="title-dep">
                    </br><span class="title-dep">Traumatologia</span>
                </a>
            </div>
            <div class="col-12 col-md-2 container-departaments">
                <img src="img/Digestoleg.png" onclick="javascript:window.location='{{URL::to('/digestoleg')}}';" alt="departament 1" class="img-dep">
                <a href="{{URL::to('/digestoleg')}}" class="title-dep">
                    </br><span class="title-dep">Cirugia Digestòleg</span>
                </a>
            </div>
          
            <div class="col-12 col-md-2 container-departaments">
                <img src="img/Podologia.png" onclick="javascript:window.location='{{URL::to('/podologia')}}';" alt="departament 1" class="img-dep">
                <a href="{{URL::to('/podologia')}}" class="title-dep">
                    </br><span class="title-dep">Podologia</span>
                </a>
            </div>
            <div class="col-12 col-md-2 container-departaments">
                <img src="img/Nutrició.jpg" onclick="javascript:window.location='{{URL::to('/nutricio')}}';" alt="departament 1" class="img-dep">
                <a href="{{URL::to('/nutricio')}}" class="title-dep">
                    </br><span class="title-dep">Diatètica i nutrició</span>
                </a>
            </div>
            <div class="col-12 col-md-2 container-departaments">
                <img src="img/Odontologia.jpg" onclick="javascript:window.location='{{URL::to('/ortodoncista')}}';" alt="departament 1" class="img-dep">
                <a href="{{URL::to('/ortodoncista')}}" class="title-dep">
                    </br><span class="title-dep">Ortodoncista</span>
                </a>
            </div>
        </div>

        <div class="row" id="especialitats">
            <div class="col-12 col-md-2 container-departaments">
                <img src="img/RevisionsMèdiques.jpg" onclick="javascript:window.location='{{URL::to('/dermatologia')}}';" alt="departament 1" class="img-dep">
                <a href="{{URL::to('/dermatologia')}}" class="title-dep">
                    </br><span class="title-dep">Dermatologia</span>
                </a>
            </div>
            <div class="col-12 col-md-2 container-departaments">
                <img src="img/Medicina Amable.jpg" onclick="javascript:window.location='{{URL::to('/infermeria')}}';" alt="departament 1" class="img-dep">
                <a href="{{URL::to('/infermeria')}}" class="title-dep">
                    </br><span class="title-dep">Infermeria</span>
                </a>
            </div>
        </div>
    </div>
  @include('includes.footer')


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>