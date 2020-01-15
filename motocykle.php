
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<link rel = "stylesheet" type= "text/css" href="style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link href="stylh.css" rel="stylesheet">
<title>Motocykle.pl/wybierz</title>

</head>

<body  >




<nav class="navbar navbar-expand-sm  bg-dark navbar-inverse navbar-dark fixed-top">


  <a class="navbar-brand" href="#" ><img src="logo_nowe.png" height="42" width="42"></a>
  <div class="navbar-collapse collapse" >
  <ul class="navbar-nav  mr-auto">
    <li class="nav-item my-auto">
      <a class="btn btn-outline-white btn-outline" href="stronaglowna.php"><i class="fa fa-home"></i> HOME</a>
    </li>
    <li class="nav-item my-auto">
      <a class="nav-link" href="motocykle.php"><i class="fa fa-motorcycle"></i></a>
    </li> 
    <li class="nav-item my-auto">
      <a class="nav-link" href="trip.php"><i class="fa fa-road"></i></a>
    </li>
    <li class="nav-item my-auto">
      <a class="nav-link " href="akcesoria.php"><i class="fas fa-tools"></i></a>
    </li>
    <li class="nav-item my-auto">
      <a class="nav-link " href="forum.php"><i class="fab fa-forumbee"></i></a>
    </li>
    
  </ul>
    
    <ul class="navbar-nav">
    <?php
    session_start();
    if((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
    {
        echo '<li class="nav-item">
        <a class="btn btn-outline-white btn-outline"  href="konto.php"><i class="fa fa-user"></i> '.$_SESSION['imie'].'</a>
        </li>';
        echo '<li class="nav-item">
      <a class="btn btn-outline-white btn-outline" href="logout.php"><i class="fas fa-sign-out-alt"></i> Wyloguj się </a>
    </li>';
    }
    else
    {
      echo '<li class="nav-item">
      <a class="btn btn-outline-white btn-outline"   href="logowanie.php"><i class="fas fa-sign-in-alt"></i> Login </a>
    </li>';
    }
?>
  </ul>
  </div>
</nav>

      
    <div class="container">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators my-auto " style='width:300px; margin: auto;  border-radius: 10px; background: rgba(76, 80, 80, 0.5)'>
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          <li data-target="#carousel-example-generic" data-slide-to="3"></li>
          <li data-target="#carousel-example-generic" data-slide-to="4"></li>
          <li data-target="#carousel-example-generic" data-slide-to="5"></li>
          <li data-target="#carousel-example-generic" data-slide-to="6"></li>
          <li data-target="#carousel-example-generic" data-slide-to="7"></li>
        </ol>
        <div class="carousel-inner" style='top: 50px' role="listbox">
          
          
          <div class="carousel-item active"> <!-- > 125<!-->
          <div class="row">
              <div class="col-xs-6 col-sm-4">
                <div >
                  <p class="mm-klasa">Pulsar NS125</p>
                  <p class="mm-cena" style="font-size: 14px; color: #3db06d; margin-top: 0;">
                  
                  <i class="far fa-check-circle"></i> Kategoria B<br>
                  
                  <p class="mm-cena">
                  <strong>Wynajem na dni</strong></p>
                  <div class="row">
                    <div class="col-sm-6">
                      <p class="mm-cena"><strong>1 dzień</strong><br>
                      Cena: <strong>75 zł</strong>
                      </p>
                    </div>
                    <div class="col-sm-6">
                      <p class="mm-cena"><strong>2 dni</strong><br>
                      Cena: <strong>75 zł</strong>
                      </p>
                    </div>
                    <div class="col-sm-6">
                      <p class="mm-cena"><strong>3 dni i więcej</strong><br>
                      Cena: <strong>75 zł</strong>
                      </p>
                    </div>
                    <div class="col-sm-6">
                      <p class="mm-cena"><strong>Weekend</strong><br>
                      Cena: <strong>225 zł</strong>
                      </p>
                    </div>
                    <div class="col-sm-12">
                      <p>CENY BRUTTO ZA DOBĘ<br>(zawierają podatek VAT 23%)</p>
                      <p class="mm-cena">Limit km: <strong>100 km</strong><br>
                      Bez limitu km: <strong>plus 20 zł</strong></p>
                      <p class="mm-cena">Kufer centralny: 15 zł, Uchwyt na telefon Ram Mount: 15 zł, Pakiet kufry+uchwyt: 25 zł</p>
                    </div>
                  </div>

                  <p class="mm-cena"></p><hr><p></p>
                  <p class="mm-cena"><strong>Wynajem na miesiące</strong></p>
                  <p class="mm-cena">Cena: <strong>900 zł</strong><br> brutto / miesiąc</p>
                  <div role="form" class="wpcf7" id="wpcf7-f210-o6" lang="pl-PL" dir="ltr">                    
                    <form action="/#wpcf7-f210-o6" method="post" class="wpcf7-form" novalidate="novalidate">
                      <div style="display: none;">
                        <input type="hidden" name="_wpcf7" value="210">
                        <input type="hidden" name="_wpcf7_version" value="4.7">
                        <input type="hidden" name="_wpcf7_locale" value="pl_PL">
                        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f210-o6">
                        <input type="hidden" name="_wpnonce" value="04fc55d195">
                      </div>
                      <div style="display: none;">
                        <span class="wpcf7-form-control-wrap mtr-form-wybrana-klasa">
                          <input type="text" name="mtr-form-wybrana-klasa" value="Yamaha Tricity 125" size="40" class="wpcf7-form-control wpcf7dtx-dynamictext wpcf7-dynamictext" aria-invalid="false">
                        </span>
                      </div>
                      <div class="form-group">
                        <div >
                          <p><button type="button" class="btn btn-outline-secondary">Zamów!</button></p>
                          <span class="ajax-loader"></span>
                        </div>
                      </div>
                      <input type="hidden" name="step" value="1-3" class="wpcf7-form-control cf7msm-multistep wpcf7-multistep"> 
                    </form>
                  </div>


                </div><!-- /mm-promocja-opis -->
              </div><!-- /col-sm-6 -->
              <div class="col-xs-6 col-sm-8 mm-promocja-dymek-padding-top">
                <div class="mm-promocja-foto">
                  <img src="img/bike/1.jpg" class="img-responsive img-fluid center-block mm-promocja-img wp-post-image img-responsive " alt="Wypożyczalnia motocykli" sizes="(max-width: 700px) 100vw, 700px" title="oferta_03">
                  <p class="mm-info">&nbsp;</p>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item"> <!-- > Dominar <!-->
          <div class="row">
              <div class="col-xs-6 col-sm-4">
                <div >
                  <p class="mm-klasa">Dominar 400</p>
                  <p class="mm-cena" style="font-size: 14px; color: #3db06d; margin-top: 0;">
                  <i class="far fa-check-circle"></i> ABS<br>
                  <i class="far fa-check-circle"></i> Kategoria A2<br>
                  <p class="mm-cena">
                  <strong>Wynajem na dni</strong></p>
                  <div class="row">
                    <div class="col-sm-6">
                      <p class="mm-cena"><strong>1 dzień</strong><br>
                      Cena: <strong>230 zł</strong>
                      </p>
                    </div>
                    <div class="col-sm-6">
                      <p class="mm-cena"><strong>2 dni</strong><br>
                      Cena: <strong>180 zł</strong>
                      </p>
                    </div>
                    <div class="col-sm-6">
                      <p class="mm-cena"><strong>3 dni i więcej</strong><br>
                      Cena: <strong>140 zł</strong>
                      </p>
                    </div>
                    <div class="col-sm-6">
                      <p class="mm-cena"><strong>Weekend</strong><br>
                      Cena: <strong>420 zł</strong>
                      </p>
                    </div>
                    <div class="col-sm-12">
                      <p>CENY BRUTTO ZA DOBĘ<br>(zawierają podatek VAT 23%)</p>
                      <p class="mm-cena">Limit km: <strong>100 km</strong><br>
                      Bez limitu km: <strong>plus 20 zł</strong></p>
                      <p class="mm-cena">Kufer centralny: 15 zł, Uchwyt na telefon Ram Mount: 15 zł, Pakiet kufry+uchwyt: 25 zł</p>
                    </div>
                  </div>

                  <p class="mm-cena"></p><hr><p></p>
                  <p class="mm-cena"><strong>Wynajem na miesiące</strong></p>
                  <p class="mm-cena">Cena: <strong>900 zł</strong><br> brutto / miesiąc</p>
                  <div role="form" class="wpcf7" id="wpcf7-f210-o6" lang="pl-PL" dir="ltr">                    
                    <form action="/#wpcf7-f210-o6" method="post" class="wpcf7-form" novalidate="novalidate">
                      <div style="display: none;">
                        <input type="hidden" name="_wpcf7" value="210">
                        <input type="hidden" name="_wpcf7_version" value="4.7">
                        <input type="hidden" name="_wpcf7_locale" value="pl_PL">
                        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f210-o6">
                        <input type="hidden" name="_wpnonce" value="04fc55d195">
                      </div>
                      <div style="display: none;">
                        <span class="wpcf7-form-control-wrap mtr-form-wybrana-klasa">
                          <input type="text" name="mtr-form-wybrana-klasa" value="Yamaha Tricity 125" size="40" class="wpcf7-form-control wpcf7dtx-dynamictext wpcf7-dynamictext" aria-invalid="false">
                        </span>
                      </div>
                      <div class="form-group">
                        <div >
                          <p><button type="button" class="btn btn-outline-secondary">Zamów!</button></p>
                          <span class="ajax-loader"></span>
                        </div>
                      </div>
                      <input type="hidden" name="step" value="1-3" class="wpcf7-form-control cf7msm-multistep wpcf7-multistep"> 
                    </form>
                  </div>


                </div><!-- /mm-promocja-opis -->
              </div><!-- /col-sm-6 -->
              <div class="col-xs-6 col-sm-8 mm-promocja-dymek-padding-top">
                <div class="mm-promocja-foto">
                  <img src="img/bike/2.jpg" class="img-responsive img-fluid center-block mm-promocja-img wp-post-image img-responsive " alt="Wypożyczalnia motocykli" sizes="(max-width: 700px) 100vw, 700px" title="oferta_03">
                  <p class="mm-info">&nbsp;</p>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item"> <!-- > GS310<!-->
          <div class="row">
              <div class="col-xs-6 col-sm-4">
                <div >
                  <p class="mm-klasa">BMW GS310</p>
                  <p class="mm-cena" style="font-size: 14px; color: #3db06d; margin-top: 0;">
                  <i class="far fa-check-circle"></i> ABS<br>
                  <i class="far fa-check-circle"></i> Kategoria A2<br>
                  <i class="far fa-check-circle"></i> Kontrola trakcji</p>
                  <p class="mm-cena">
                  <strong>Wynajem na dni</strong></p>
                  <div class="row">
                    <div class="col-sm-6">
                      <p class="mm-cena"><strong>1 dzień</strong><br>
                      Cena: <strong>230 zł</strong>
                      </p>
                    </div>
                    <div class="col-sm-6">
                      <p class="mm-cena"><strong>2 dni</strong><br>
                      Cena: <strong>180 zł</strong>
                      </p>
                    </div>
                    <div class="col-sm-6">
                      <p class="mm-cena"><strong>3 dni i więcej</strong><br>
                      Cena: <strong>140 zł</strong>
                      </p>
                    </div>
                    <div class="col-sm-6">
                      <p class="mm-cena"><strong>Weekend</strong><br>
                      Cena: <strong>420 zł</strong>
                      </p>
                    </div>
                    <div class="col-sm-12">
                      <p>CENY BRUTTO ZA DOBĘ<br>(zawierają podatek VAT 23%)</p>
                      <p class="mm-cena">Limit km: <strong>100 km</strong><br>
                      Bez limitu km: <strong>plus 20 zł</strong></p>
                      <p class="mm-cena">Kufer centralny: 15 zł, Uchwyt na telefon Ram Mount: 15 zł, Pakiet kufry+uchwyt: 25 zł</p>
                    </div>
                  </div>

                  <p class="mm-cena"></p><hr><p></p>
                  <p class="mm-cena"><strong>Wynajem na miesiące</strong></p>
                  <p class="mm-cena">Cena: <strong>900 zł</strong><br> brutto / miesiąc</p>
                  <div role="form" class="wpcf7" id="wpcf7-f210-o6" lang="pl-PL" dir="ltr">                    
                    <form action="/#wpcf7-f210-o6" method="post" class="wpcf7-form" novalidate="novalidate">
                      <div style="display: none;">
                        <input type="hidden" name="_wpcf7" value="210">
                        <input type="hidden" name="_wpcf7_version" value="4.7">
                        <input type="hidden" name="_wpcf7_locale" value="pl_PL">
                        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f210-o6">
                        <input type="hidden" name="_wpnonce" value="04fc55d195">
                      </div>
                      <div style="display: none;">
                        <span class="wpcf7-form-control-wrap mtr-form-wybrana-klasa">
                          <input type="text" name="mtr-form-wybrana-klasa" value="Yamaha Tricity 125" size="40" class="wpcf7-form-control wpcf7dtx-dynamictext wpcf7-dynamictext" aria-invalid="false">
                        </span>
                      </div>
                      <div class="form-group">
                        <div >
                          <p><button type="button" class="btn btn-outline-secondary">Zamów!</button></p>
                          <span class="ajax-loader"></span>
                        </div>
                      </div>
                      <input type="hidden" name="step" value="1-3" class="wpcf7-form-control cf7msm-multistep wpcf7-multistep"> 
                    </form>
                  </div>


                </div><!-- /mm-promocja-opis -->
              </div><!-- /col-sm-6 -->
              <div class="col-xs-6 col-sm-8 mm-promocja-dymek-padding-top">
                <div class="mm-promocja-foto">
                  <img src="img/bike/3.jpg" class="img-responsive img-fluid center-block mm-promocja-img wp-post-image img-responsive " alt="Wypożyczalnia motocykli" sizes="(max-width: 700px) 100vw, 700px" title="oferta_03">
                  <p class="mm-info">&nbsp;</p>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item"> <!-- > MT07 <!-->
          <div class="row">
              <div class="col-xs-6 col-sm-4">
                <div >
                  <p class="mm-klasa">Yamaha MT07</p>
                  <p class="mm-cena" style="font-size: 14px; color: #3db06d; margin-top: 0;">
                  <i class="far fa-check-circle"></i> ABS<br>
                  <i class="far fa-check-circle"></i> Miejski przecinak<br>
                  <i class="far fa-check-circle"></i> Dostepny w wersji na kat.A2<br>
                  <i class="far fa-check-circle"></i> Kontrola trakcji</p>
                  <p class="mm-cena">
                  <strong>Wynajem na dni</strong></p>
                  <div class="row">
                    <div class="col-sm-6">
                      <p class="mm-cena"><strong>1 dzień</strong><br>
                      Cena: <strong>250 zł</strong>
                      </p>
                    </div>
                    <div class="col-sm-6">
                      <p class="mm-cena"><strong>2 dni</strong><br>
                      Cena: <strong>200 zł</strong>
                      </p>
                    </div>
                    <div class="col-sm-6">
                      <p class="mm-cena"><strong>3 dni i więcej</strong><br>
                      Cena: <strong>160 zł</strong>
                      </p>
                    </div>
                    <div class="col-sm-6">
                      <p class="mm-cena"><strong>Weekend</strong><br>
                      Cena: <strong>480 zł</strong>
                      </p>
                    </div>
                    <div class="col-sm-12">
                      <p>CENY BRUTTO ZA DOBĘ<br>(zawierają podatek VAT 23%)</p>
                      <p class="mm-cena">Limit km: <strong>100 km</strong><br>
                      Bez limitu km: <strong>plus 20 zł</strong></p>
                      <p class="mm-cena">Kufer centralny: 15 zł, Uchwyt na telefon Ram Mount: 15 zł, Pakiet kufry+uchwyt: 25 zł</p>
                    </div>
                  </div>

                  <p class="mm-cena"></p><hr><p></p>
                  <p class="mm-cena"><strong>Wynajem na miesiące</strong></p>
                  <p class="mm-cena">Cena: <strong>900 zł</strong><br> brutto / miesiąc</p>
                  <div role="form" class="wpcf7" id="wpcf7-f210-o6" lang="pl-PL" dir="ltr">                    
                    <form action="/#wpcf7-f210-o6" method="post" class="wpcf7-form" novalidate="novalidate">
                      <div style="display: none;">
                        <input type="hidden" name="_wpcf7" value="210">
                        <input type="hidden" name="_wpcf7_version" value="4.7">
                        <input type="hidden" name="_wpcf7_locale" value="pl_PL">
                        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f210-o6">
                        <input type="hidden" name="_wpnonce" value="04fc55d195">
                      </div>
                      <div style="display: none;">
                        <span class="wpcf7-form-control-wrap mtr-form-wybrana-klasa">
                          <input type="text" name="mtr-form-wybrana-klasa" value="Yamaha Tricity 125" size="40" class="wpcf7-form-control wpcf7dtx-dynamictext wpcf7-dynamictext" aria-invalid="false">
                        </span>
                      </div>
                      <div class="form-group">
                        <div >
                          <p><button type="button" class="btn btn-outline-secondary">Zamów!</button></p>
                          <span class="ajax-loader"></span>
                        </div>
                      </div>
                      <input type="hidden" name="step" value="1-3" class="wpcf7-form-control cf7msm-multistep wpcf7-multistep"> 
                    </form>
                  </div>


                </div><!-- /mm-promocja-opis -->
              </div><!-- /col-sm-6 -->
              <div class="col-xs-6 col-sm-8 mm-promocja-dymek-padding-top">
                <div class="mm-promocja-foto">
                  <img src="img/bike/4.jpg" class="img-responsive img-fluid center-block mm-promocja-img wp-post-image img-responsive " alt="Wypożyczalnia motocykli" sizes="(max-width: 700px) 100vw, 700px" title="oferta_03">
                  <p class="mm-info">&nbsp;</p>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item"> <!-- > Tracer 700<!-->
          <div class="row">
              <div class="col-xs-6 col-sm-4">
                <div >
                  <p class="mm-klasa">Yamaha Tracer 700</p>
                  <p class="mm-cena" style="font-size: 14px; color: #3db06d; margin-top: 0;">
                  <i class="far fa-check-circle"></i> ABS<br>
                  <i class="far fa-check-circle"></i>Kontrola trakcji<br>
                  <i class="far fa-check-circle"></i>Dostepne kufry</p>
                  <p class="mm-cena">
                  <strong>Wynajem na dni</strong></p>
                  <div class="row">
                    <div class="col-sm-6">
                      <p class="mm-cena"><strong>1 dzień</strong><br>
                      Cena: <strong>75 zł</strong>
                      </p>
                    </div>
                    <div class="col-sm-6">
                      <p class="mm-cena"><strong>2 dni</strong><br>
                      Cena: <strong>75 zł</strong>
                      </p>
                    </div>
                    <div class="col-sm-6">
                      <p class="mm-cena"><strong>3 dni i więcej</strong><br>
                      Cena: <strong>75 zł</strong>
                      </p>
                    </div>
                    <div class="col-sm-6">
                      <p class="mm-cena"><strong>Weekend</strong><br>
                      Cena: <strong>225 zł</strong>
                      </p>
                    </div>
                    <div class="col-sm-12">
                      <p>CENY BRUTTO ZA DOBĘ<br>(zawierają podatek VAT 23%)</p>
                      <p class="mm-cena">Limit km: <strong>100 km</strong><br>
                      Bez limitu km: <strong>plus 20 zł</strong></p>
                      <p class="mm-cena">Kufer centralny: 15 zł, Uchwyt na telefon Ram Mount: 15 zł, Pakiet kufry+uchwyt: 25 zł</p>
                    </div>
                  </div>

                  <p class="mm-cena"></p><hr><p></p>
                  <p class="mm-cena"><strong>Wynajem na miesiące</strong></p>
                  <p class="mm-cena">Cena: <strong>900 zł</strong><br> brutto / miesiąc</p>
                  <div role="form" class="wpcf7" id="wpcf7-f210-o6" lang="pl-PL" dir="ltr">                    
                    <form action="/#wpcf7-f210-o6" method="post" class="wpcf7-form" novalidate="novalidate">
                      <div style="display: none;">
                        <input type="hidden" name="_wpcf7" value="210">
                        <input type="hidden" name="_wpcf7_version" value="4.7">
                        <input type="hidden" name="_wpcf7_locale" value="pl_PL">
                        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f210-o6">
                        <input type="hidden" name="_wpnonce" value="04fc55d195">
                      </div>
                      <div style="display: none;">
                        <span class="wpcf7-form-control-wrap mtr-form-wybrana-klasa">
                          <input type="text" name="mtr-form-wybrana-klasa" value="Yamaha Tricity 125" size="40" class="wpcf7-form-control wpcf7dtx-dynamictext wpcf7-dynamictext" aria-invalid="false">
                        </span>
                      </div>
                      <div class="form-group">
                        <div >
                          <p><button type="button" class="btn btn-outline-secondary">Zamów!</button></p>
                          <span class="ajax-loader"></span>
                        </div>
                      </div>
                      <input type="hidden" name="step" value="1-3" class="wpcf7-form-control cf7msm-multistep wpcf7-multistep"> 
                    </form>
                  </div>


                </div><!-- /mm-promocja-opis -->
              </div><!-- /col-sm-6 -->
              <div class="col-xs-6 col-sm-8 mm-promocja-dymek-padding-top">
                <div class="mm-promocja-foto">
                  <img src="img/bike/5.jpg" class="img-responsive img-fluid center-block mm-promocja-img wp-post-image img-responsive " alt="Wypożyczalnia motocykli" sizes="(max-width: 700px) 100vw, 700px" title="oferta_03">
                  <p class="mm-info">&nbsp;</p>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item"> <!-- > Tracer 900<!-->
          <div class="row">
              <div class="col-xs-6 col-sm-4">
                <div >
                  <p class="mm-klasa">Yamaha Tracer 900</p>
                  <p class="mm-cena" style="font-size: 14px; color: #3db06d; margin-top: 0;">
                  <i class="far fa-check-circle"></i> ABS<br>
                  <i class="far fa-check-circle"></i> Kontrola trakcji<br>
                  <i class="far fa-check-circle"></i> Tempomat</p>
                  <p class="mm-cena">
                  <strong>Wynajem na dni</strong></p>
                  <div class="row">
                    <div class="col-sm-6">
                      <p class="mm-cena"><strong>1 dzień</strong><br>
                      Cena: <strong>270 zł</strong>
                      </p>
                    </div>
                    <div class="col-sm-6">
                      <p class="mm-cena"><strong>2 dni</strong><br>
                      Cena: <strong>220 zł</strong>
                      </p>
                    </div>
                    <div class="col-sm-6">
                      <p class="mm-cena"><strong>3 dni i więcej</strong><br>
                      Cena: <strong>180 zł</strong>
                      </p>
                    </div>
                    <div class="col-sm-6">
                      <p class="mm-cena"><strong>Weekend</strong><br>
                      Cena: <strong>540 zł</strong>
                      </p>
                    </div>
                    <div class="col-sm-12">
                      <p>CENY BRUTTO ZA DOBĘ<br>(zawierają podatek VAT 23%)</p>
                      <p class="mm-cena">Limit km: <strong>100 km</strong><br>
                      Bez limitu km: <strong>plus 20 zł</strong></p>
                      <p class="mm-cena">Kufer centralny: 15 zł, Uchwyt na telefon Ram Mount: 15 zł, Pakiet kufry+uchwyt: 25 zł</p>
                    </div>
                  </div>

                  <p class="mm-cena"></p><hr><p></p>
                  <p class="mm-cena"><strong>Wynajem na miesiące</strong></p>
                  <p class="mm-cena">Cena: <strong>900 zł</strong><br> brutto / miesiąc</p>
                  <div role="form" class="wpcf7" id="wpcf7-f210-o6" lang="pl-PL" dir="ltr">                    
                    <form action="/#wpcf7-f210-o6" method="post" class="wpcf7-form" novalidate="novalidate">
                      <div style="display: none;">
                        <input type="hidden" name="_wpcf7" value="210">
                        <input type="hidden" name="_wpcf7_version" value="4.7">
                        <input type="hidden" name="_wpcf7_locale" value="pl_PL">
                        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f210-o6">
                        <input type="hidden" name="_wpnonce" value="04fc55d195">
                      </div>
                      <div style="display: none;">
                        <span class="wpcf7-form-control-wrap mtr-form-wybrana-klasa">
                          <input type="text" name="mtr-form-wybrana-klasa" value="Yamaha Tricity 125" size="40" class="wpcf7-form-control wpcf7dtx-dynamictext wpcf7-dynamictext" aria-invalid="false">
                        </span>
                      </div>
                      <div class="form-group">
                        <div >
                          <p><button type="button" class="btn btn-outline-secondary">Zamów!</button></p>
                          <span class="ajax-loader"></span>
                        </div>
                      </div>
                      <input type="hidden" name="step" value="1-3" class="wpcf7-form-control cf7msm-multistep wpcf7-multistep"> 
                    </form>
                  </div>


                </div><!-- /mm-promocja-opis -->
              </div><!-- /col-sm-6 -->
              <div class="col-xs-6 col-sm-8 mm-promocja-dymek-padding-top">
                <div class="mm-promocja-foto">
                  <img src="img/bike/7.jpg" class="img-responsive img-fluid center-block mm-promocja-img wp-post-image img-responsive " alt="Wypożyczalnia motocykli" sizes="(max-width: 700px) 100vw, 700px" title="oferta_03">
                  <p class="mm-info">&nbsp;</p>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item " style = 'margin-top: 20px'> <!-- > Harley davidson<!-->
          <div class="row">
              <div class="col-xs-6 col-sm-4">
                <div >
                  <p class="mm-klasa"><h3>Harley Davidson</h3>
                  <br /><h4>Iron 883</h4></p>
                  <p class="mm-cena" style="font-size: 14px; color: #3db06d; margin-top: 0;">
                  <i class="far fa-check-circle"></i> ABS<br>
                  <p class="mm-cena">
                  <strong>Wynajem na dni</strong></p>
                  <div class="row">
                    <div class="col-sm-6">
                      <p class="mm-cena"><strong>1 dzień</strong><br>
                      Cena: <strong>320 zł</strong>
                      </p>
                    </div>
                    <div class="col-sm-6">
                      <p class="mm-cena"><strong>2 dni</strong><br>
                      Cena: <strong>280 zł</strong>
                      </p>
                    </div>
                    <div class="col-sm-6">
                      <p class="mm-cena"><strong>3 dni i więcej</strong><br>
                      Cena: <strong>240 zł</strong>
                      </p>
                    </div>
                    <div class="col-sm-6">
                      <p class="mm-cena"><strong>Weekend</strong><br>
                      Cena: <strong>720 zł</strong>
                      </p>
                    </div>
                    <div class="col-sm-12">
                      <p>CENY BRUTTO ZA DOBĘ<br>(zawierają podatek VAT 23%)</p>
                      <p class="mm-cena">Limit km: <strong>100 km</strong><br>
                      Bez limitu km: <strong>plus 20 zł</strong></p>
                      <p class="mm-cena">Kufer centralny: 15 zł, Uchwyt na telefon Ram Mount: 15 zł, Pakiet kufry+uchwyt: 25 zł</p>
                    </div>
                  </div>

                  <p class="mm-cena"></p><hr><p></p>
                  <p class="mm-cena"><strong>Wynajem na miesiące</strong></p>
                  <p class="mm-cena">Cena: <strong>900 zł</strong><br> brutto / miesiąc</p>
                  <div role="form" class="wpcf7" id="wpcf7-f210-o6" lang="pl-PL" dir="ltr">                    
                    <form action="/#wpcf7-f210-o6" method="post" class="wpcf7-form" novalidate="novalidate">
                      <div style="display: none;">
                        <input type="hidden" name="_wpcf7" value="210">
                        <input type="hidden" name="_wpcf7_version" value="4.7">
                        <input type="hidden" name="_wpcf7_locale" value="pl_PL">
                        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f210-o6">
                        <input type="hidden" name="_wpnonce" value="04fc55d195">
                      </div>
                      <div style="display: none;">
                        <span class="wpcf7-form-control-wrap mtr-form-wybrana-klasa">
                          <input type="text" name="mtr-form-wybrana-klasa" value="Yamaha Tricity 125" size="40" class="wpcf7-form-control wpcf7dtx-dynamictext wpcf7-dynamictext" aria-invalid="false">
                        </span>
                      </div>
                      <div class="form-group">
                        <div >
                          <p><button type="button" class="btn btn-outline-secondary">Zamów!</button></p>
                          <span class="ajax-loader"></span>
                        </div>
                      </div>
                      <input type="hidden" name="step" value="1-3" class="wpcf7-form-control cf7msm-multistep wpcf7-multistep"> 
                    </form>
                  </div>


                </div>
              </div>
              <div class="col-xs-6 col-sm-8 mm-promocja-dymek-padding-top">
                <div class="mm-promocja-foto">
                  <img src="img/bike/6.jpg" class="img-responsive img-fluid center-block mm-promocja-img wp-post-image img-responsive " alt="Wypożyczalnia motocykli" sizes="(max-width: 700px) 100vw, 700px" title="oferta_03">
                  <p class="mm-info">&nbsp;</p>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item " style = 'margin-top: 20px'> <!-- > BMW gs 1200<!-->
          <div class="row">
              <div class="col-xs-6 col-sm-4">
                <div >
                  <p class="mm-klasa"><h3>BMW R1200GS</h3></p>
                  <p class="mm-cena" style="font-size: 14px; color: #3db06d; margin-top: 0;">
                  <i class="far fa-check-circle"></i> ABS<br>
                  <i class="far fa-check-circle"></i> Kontrola trakcji<br>
                  <i class="far fa-check-circle"></i> Hamulce Brembo </p>
                  <p class="mm-cena">
                  <strong>Wynajem na dni</strong></p>
                  <div class="row">
                    <div class="col-sm-6">
                      <p class="mm-cena"><strong>1 dzień</strong><br>
                      Cena: <strong>75 zł</strong>
                      </p>
                    </div>
                    <div class="col-sm-6">
                      <p class="mm-cena"><strong>2 dni</strong><br>
                      Cena: <strong>75 zł</strong>
                      </p>
                    </div>
                    <div class="col-sm-6">
                      <p class="mm-cena"><strong>3 dni i więcej</strong><br>
                      Cena: <strong>75 zł</strong>
                      </p>
                    </div>
                    <div class="col-sm-6">
                      <p class="mm-cena"><strong>Weekend</strong><br>
                      Cena: <strong>225 zł</strong>
                      </p>
                    </div>
                    <div class="col-sm-12">
                      <p>CENY BRUTTO ZA DOBĘ<br>(zawierają podatek VAT 23%)</p>
                      <p class="mm-cena">Limit km: <strong>100 km</strong><br>
                      Bez limitu km: <strong>plus 20 zł</strong></p>
                      <p class="mm-cena">Kufer centralny: 15 zł, Uchwyt na telefon Ram Mount: 15 zł, Pakiet kufry+uchwyt: 25 zł</p>
                    </div>
                  </div>

                  <p class="mm-cena"></p><hr><p></p>
                  <p class="mm-cena"><strong>Wynajem na miesiące</strong></p>
                  <p class="mm-cena">Cena: <strong>900 zł</strong><br> brutto / miesiąc</p>
                  <div role="form" class="wpcf7" id="wpcf7-f210-o6" lang="pl-PL" dir="ltr">                    
                    <form action="/#wpcf7-f210-o6" method="post" class="wpcf7-form" novalidate="novalidate">
                      <div style="display: none;">
                        <input type="hidden" name="_wpcf7" value="210">
                        <input type="hidden" name="_wpcf7_version" value="4.7">
                        <input type="hidden" name="_wpcf7_locale" value="pl_PL">
                        <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f210-o6">
                        <input type="hidden" name="_wpnonce" value="04fc55d195">
                      </div>
                      <div style="display: none;">
                        <span class="wpcf7-form-control-wrap mtr-form-wybrana-klasa">
                          <input type="text" name="mtr-form-wybrana-klasa" value="Yamaha Tricity 125" size="40" class="wpcf7-form-control wpcf7dtx-dynamictext wpcf7-dynamictext" aria-invalid="false">
                        </span>
                      </div>
                      <div class="form-group">
                        <div >
                          <p><button type="button" class="btn btn-outline-secondary">Zamów!</button></p>
                          <span class="ajax-loader"></span>
                        </div>
                      </div>
                      <input type="hidden" name="step" value="1-3" class="wpcf7-form-control cf7msm-multistep wpcf7-multistep"> 
                    </form>
                  </div>


                </div><!-- /mm-promocja-opis -->
              </div><!-- /col-sm-6 -->
              <div class="col-xs-6 col-sm-8 mm-promocja-dymek-padding-top">
                <div class="mm-promocja-foto">
                  <img src="img/bike/8.jpg" class="img-responsive img-fluid center-block mm-promocja-img wp-post-image img-responsive " alt="Wypożyczalnia motocykli" sizes="(max-width: 700px) 100vw, 700px" title="oferta_03">
                  <p class="mm-info">&nbsp;</p>
                </div>
              </div>
            </div>
          </div>
          
          
        </div>
        <a class="carousel-control-prev" href="#carousel-example-generic" role="button"
         data-slide="prev" style=' margin: auto; width:40px;height:40px;  border-radius: 10px; background: rgba(76, 80, 80, 0.5)'>
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only" >Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-generic" role="button"
         data-slide="next" style=' margin: auto; width:40px;height:40px;  border-radius: 10px; background: rgba(76, 80, 80, 0.5)'>
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only" >Next</span>
        </a>
      </div>
    </div>
    
    <script src="../../../docs/assets/js/vendor/jquery-slim.min.js"></script>
    <script src="../../dist/util.js"></script>
    <script src="../../dist/carousel.js"></script>

    <script>
      // Should throw an error because carousel is in transition
      

      $(function () {
        // Test to show that the carousel doesn't slide when the current tab isn't visible
        $('#carousel-example-generic').on('slid.bs.carousel', function (event) {
          console.log('slid at ', event.timeStamp)
        })
        testCarouselTransitionError()
      })
    </script>

    </div>



<div class="container marketing" >

<hr class='featurette-divider '>
    
      
      <footer class="my-auto">
      
        <p class="float-right my-auto"><a href="#">Wróć do góry</a></p>
        <p class="my-auto">© 2020 Company, Inc. · <a href="#">Polityka prywatności</a> · <a href='stronaglowna.php#onas'>O Nas</a></p>
      </footer>
      
      
  </div>
 
</body>

</html>