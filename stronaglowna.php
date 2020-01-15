
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
<title>Motocykle.pl</title>

</head>

<body style="height:1500px" >




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
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" style='top: 50px' role="listbox">
          
          <div class="carousel-item active" style = 'margin-top: 20px'>
            <img class="img-fluid" src="img/8.jpg"  alt="First slide">
            <div class="container">
              <div class="carousel-caption d-none d-md-block text-left my-auto" style=' padding-left: 20px; border-radius: 10px; background: rgba(76, 80, 80, 0.5)'>
                <h1>Znajdź i wybierz!</h1>
                <p> Znajdź odpowiedni motocykl, wybierz , odbierz i ciesz się z frajdy jaką daje pasja do motocykli!</p>
                <p><a class="btn btn-outline-light" href="motocykle.php" role="button">Wejdź</a></p>
              </div>
            </div>
          </div>
        
          <div class="carousel-item">
            <img  class="img-fluid"  src="img/9.jpg" alt="Second slide">
            <div class="container">
              <div class="carousel-caption d-none d-md-block text-right my-auto" style=' padding-right: 20px; border-radius: 10px; background: rgba(76, 80, 80, 0.5)'>
              
                <h1>Zobacz naszą ofertę!</h1>
                <p>Nie tylko mamy do wypożyczenia motcykle! Przekonaj się sam.</p>
                <p><a class="btn btn-outline-light" href="#" role="button">Wybierz</a></p>
              </div>
            </div> 
          </div>
          
          <div class="carousel-item">
            <img  class="img-fluid" src="img/10.jpg" alt="Third slide">
            <div class="container">
              <div class="carousel-caption d-none d-md-block text-left" style=' padding-left: 20px; border-radius: 10px; background: rgba(76, 80, 80, 0.5)' >
                <h1>Podróż motocyklem!</h1>
                <p>Podobno każdy motocyklista marzy o podróży motocyklem. Podobno przejażdżka z Chicago do Las Vegas route 66 to przygoda której nie da się opisać </p>
                <p><a class="btn btn-outline-light" href="logowanie.php" role="button">Przekonaj się sam!</a></p>
              </div>
            </div>
          </div>
          
        </div>
        <a class="carousel-control-prev" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
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
<hr class="featurette-divider">
<div class="row">

        <div class="col-lg-4" style='margin-bottom: 1.5rem;
          text-align: center;'>
          <img class="rounded-circle" src="img/coda.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Coda Motovlog</h2>
          <p>Motocyklista i  vloger. Nasz główny reprezentant który testuje nasze sprzęty i akcesoria!</p>
          <p><a class="btn btn-secondary" href="#" role="button">Sprawdź!</a></p>
        </div><!-- /.col-lg-4 -->



        <div class="col-lg-4" style='margin-bottom: 1.5rem;
  text-align: center;'>
          <img class="rounded-circle" src="img/motobanda.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Motobanda</h2>
          <p>Od kilku znan telewizja internetowa, pożyczją motocykle i akcesoria od nas, nagrywają filmy o naszym sprzęcie, zapraszamy do oglądania! </p>
          <p><a class="btn btn-secondary" href="#" role="button">Sprawdź!</a></p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4" style='margin-bottom: 1.5rem;
  text-align: center;'>
          <img class="rounded-circle" src="img/ostry.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Oczami Ostrego</h2>
          <p>Ogladaliście Moto wizje?...Nie? to czas najwyższy, ponownie sprzeęt od nas!</p>
          <p><a class="btn btn-secondary" href="#" role="button">Sprawdź</a></p>
        </div><!-- /.col-lg-4 -->
</div>
<hr class="featurette-divider">




    <div class="row featurette" id="onas">

    
        <div class="row featurette">
       
            <div class="col-md-7 "   > 
              <img class="featurette-image img-fluid mx-auto" src="img/zal.jpg" alt="500x500" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22500%22%20height%3D%22500%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20500%20500%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16f96839193%20text%20%7B%20fill%3A%23AAAAAA%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A25pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16f96839193%22%3E%3Crect%20width%3D%22500%22%20height%3D%22500%22%20fill%3D%22%23EEEEEE%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22185.1171875%22%20y%3D%22261.1%22%3E500x500%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="width: 500px; height: 500px;">
            </div>
            <div class="col-md-5 " >
              <h2 class="featurette-heading">O Nas <br /><span class="text-muted">Motocykle.pl</span></h2>
              <p class="lead">Na rynku jesteśmy obecni o 1999.
                Pierwszy salon otworzylismy w Warszawie, od 2005 współpracujemy z największymi dostawcami motocykli jak i akcesorii.
                Od 2007 roku wspołpracujemy z biurami podróży, hotelami i liniami lotniczymi na 5 kontynantach. Podróż motocyklem po Austarli?
                No problem, zastanawiasz się nad kupnem motocykla ale nie ma jazd próbnych? My mamy! Chcesz zabrać partnera na przejażdżkę, ale nie masz kasku ani kurtki 
                Dla niej/niego? My mamy!</p>
            </div>
            
          </div>

          
        <div class="row featurette" style = "margin-top: 100px;">
        
            <div class="col-md-7">
            
              <h2 class="featurette-heading">Ameryka Tour <br /><span class="text-muted">Motul</span></h2>
              <p class="lead">Nie to że się chwalimy ale jak myślisz kto obmyslił plan wycieczki? Oczywiście że my! 
                Bardzo dobrze wspólpracujemy z firmami w USA.
                W 2019 Motul organizował konkurs gdzie można było wygrać wycieczkę marzeń!
              </p>
            </div>
            <div class="col-md-5">
              <img class="featurette-image img-fluid mx-auto" src="img/motul1.jpg" alt="500x500" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22500%22%20height%3D%22500%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20500%20500%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16f96839193%20text%20%7B%20fill%3A%23AAAAAA%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A25pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16f96839193%22%3E%3Crect%20width%3D%22500%22%20height%3D%22500%22%20fill%3D%22%23EEEEEE%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22185.1171875%22%20y%3D%22261.1%22%3E500x500%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="width: 500px; height: 500px;">
            </div>
          </div>
        </div>

      
        
      <div class="row featurette" style = "margin-top: 100px;">
        <div class="col-md-7 "   > 
          <img class="featurette-image img-fluid mx-auto" src="img/Luczyn.jpg" alt="500x500" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22500%22%20height%3D%22500%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20500%20500%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16f96839193%20text%20%7B%20fill%3A%23AAAAAA%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A25pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16f96839193%22%3E%3Crect%20width%3D%22500%22%20height%3D%22500%22%20fill%3D%22%23EEEEEE%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22185.1171875%22%20y%3D%22261.1%22%3E500x500%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="width: 500px; height: 500px;">
        </div>
        <div class="col-md-5 " >
          <h2 class="featurette-heading">Harley Davidson <br /><span class="text-muted">Tor słoneczna.</span></h2>
          <p class="lead">Harley Davidson ostatnio zmieniło politykę.
             Tak, można było się przejechać za DARMO motocyklem marki Harley Davidson n torze magic_quotes_runtimetocyklowym,
              jak się zastanawisz kto udostepnił motocykle? Odpowiedz jest jedna ... My ! 
              Z amerykańskim producentem już współpracujemy wiele lat, dlatego mamy tak wiele sprzetu ze stajni Harleya! </p>
        </div>
        
      </div>
      
      <hr class="featurette-divider">
      <footer>
      
        <p class="float-right"><a href="#">Wróć do góry</a></p>
        <p>© 2020 Company, Inc. · <a href="#">Polityka prywatności</a> · <a href="#onas">O Nas</a></p>
      </footer>
      
      
  </div>
    
  
    




</body>

</html>