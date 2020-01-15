
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
<title>Motocykle.pl/podróż</title>

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

<hr class="featurette-divider">
  <div class="row featurette" id="onas">

    
<div class="row featurette">

    <div class="col-md-7 "   > 
    <div class="embed-responsive embed-responsive-16by9">
      <iframe class="embed-responsive-item"  style="border-radius: 20px;"  src="https://www.youtube.com/embed/xSzIl_k4cvY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>
    </div>
    <div class="col-md-5 " >
      <h2 class="embed-responsive-item">RPA <br /><span class="text-muted">Motul Polska</span></h2>
      <p class="lead">Wspaniała Przygoda po Afryce.
        Motul poraz pierwszy zorganizował konkurs. Oczywiście My zostaliśmy poproszeni o zorganizowanie wycieczki.
      Było to bardzo trudne zadanie ale udało nam się podołać. Pierwszy raz  organizowaliśmy wyprawę po RPA.</p>
       <p class="lead">Zainteresowany? 10 dni i tylko 7 899 zł ! </p>
       <p class="lead"><a class="btn btn-secondary" href="#" role="button">Wykup!</a></p>
    </div>
    
  </div>

  

<div class="row featurette" style = "margin-top: 100px;">

    <div class="col-md-7">
    
      <h2 class="featurette">Ameryka Tour <br /><span class="text-muted">Motul</span></h2>
      <p class="lead">Nie to że się chwalimy ale jak myślisz kto obmyslił plan wycieczki? Oczywiście że my! 
        Bardzo dobrze wspólpracujemy z firmami w USA.
        W 2019 Motul organizował konkurs gdzie można było wygrać wycieczkę marzeń!
      </p>
    </div>
    <div class="col-md-5">
    <div class="embed-responsive embed-responsive-16by9">
      <iframe class="embed-responsive-item"  style="border-radius: 20px;"  src="https://www.youtube.com/embed/V64xnk-FzAs" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>
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
</div>
</body>

</html>