<?php
    session_start();
    if((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
    {
        header('Location: konto.php');
        exit();
    }
?>

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
<link href="stylh.css" rel="stylesheet">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<title>Motocykle.pl/logowanie</title>

</head>

<body   >
 


    
      <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
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
          
          if((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
          {
              echo '<li class="nav-item">
              <a class="btn btn-outline-white btn-outline" href="konto.php"><i class="fa fa-user"></i> '.$_SESSION['imie'].'</a>
              </li>';
              echo '<li class="nav-item">
            <a class="btn btn-outline-white btn-outline" href="logout.php"><i class="fas fa-sign-out-alt"></i> Wyloguj się </a>
          </li>';
          }
          else
          {
            echo '<li class="nav-item">
            <a class="btn btn-outline-white btn-outline" href="logowanie.php"><i class="fas fa-sign-in-alt"></i> Login </a>
          </li>';
          }
      ?>
        </ul>
        </div>
      </nav>

      <div  style='position: relative;
  text-align: center;
  color: white;'>
      <img  class="img-fluid my-auto" src="img/5.jpg" alt="Third slide">
      <div class="carousel-caption" >
      <div class="row" >
                  
                  <div class="col-sm-4" style='  border-radius: 10px; background: rgba(76, 80, 80, 0.4)'>
                    <form action="zaloguj.php" method="post" >
                      E-mail: <br> <input type="text" class="form-control" name="email" /> <br>
                      Hasło: <br> <input type="password" class="form-control" name="haslo" /> <br><br />
                      
                      <button type="submit" class="btn btn-outline-light">Zaloguj się</button>
                      
                    </form>
                    <?php

                    if(isset($_SESSION['blad'])) echo $_SESSION['blad'];
                    ?>
                  </div>
                
                  <div class="col-sm-4" >
                  
                  </div>
                  
                  <div class="col-sm-4 my-auto" style=' border-radius: 10px; background: rgba(76, 80, 80, 0.4)'>
                    <br />
                    <h4>Nie masz jeszcze konta?</h4>
                    Zarejestruj się i otrzymaj 5% zniżki!
                    <br /> <br /> 
                    <a type="button" href="rejestracja.php" class="btn btn-outline-light">Zarejestruj się</a>
                    <br />
                    <br /> 
                  </div>
                
       </div>
      </div>
      </div>
      <div class="container">
      <hr class="featurette-divider">
      <footer>
      
        <p class="float-right"><a href="#">Wróć do góry</a></p>
        <p>© 2020 Company, Inc. · <a href="#">Polityka prywatności</a> · <a href="#onas">O Nas</a></p>
      </footer> 
      </div>  
</body>

</html>