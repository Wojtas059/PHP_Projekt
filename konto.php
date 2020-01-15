<?php
session_start();
if(!isset($_SESSION['zalogowany']))
{
    header('Location: logowanie.php');
    exit();
}
if(isset($_POST['imie']))
{
         //Sprawdz poprawność
         $imie = $_POST['imie'];

         //sprawdzenie poprawnosci imienia
         if((strlen($imie)<2 )|| (strlen($imie)>20 ))
         {
            $wszystko_ok=false;
            $_SESSION['e_imie']="Imie musi posiadać od 2 do 20 znaków";
            
         }
        else {
          require_once "connect.php";
        mysqli_report(MYSQLI_REPORT_STRICT);
        try
        {
            $polaczenie = new mysqli($host,$db_user,$db_password, $db_name);
            if($polaczenie->connect_errno!=0)
                {
                    throw new Exception(mysqli_connect_errno());
                }
            else 
            {       
                    $id=$_SESSION['id'];
                    if($polaczenie->query("UPDATE myguests SET imie='$imie' WHERE id=$id"))
                    {
                       echo "Udało się zmienić imie, aby zobaczyć zmiany musisz sie ponownie zalogować ";
                       echo "<a  href='logout.php'>Zaloguj się ponownie</a>";
                       exit();
                        

                    }
                    else 
                    {
                         throw new Exception($polaczenie->error);
                    }
                }
                $polaczenie->close();
          }
        

        catch(Exception $e)
        {
            echo '<span style="color:red;">Błąd servera! Przepraszamy za niedogodności i prosimy o rejestracje w innym 
            terminie!</span>';
            echo '<br />Informacja developerska: '.$e;
        }
  }
}


if(isset($_POST['nazwisko']))
      {
      $nazwisko = $_POST['nazwisko'];
      $wszystko_ok=true;
      //sprawdzanie poprawnosci nazwiska
      if((strlen($nazwisko)<2 )|| (strlen($nazwisko)>30 ))
      {
        $wszystko_ok=false;
        $_SESSION['e_nazwisko']="Nazwisko musi posiadać od 2 do 30 znaków";
        
      }
      if(ctype_alnum($nazwisko)==false)
      {
        $wszystko_ok=false;
        $_SESSION['e_nazwisko']="Nazwisko może składać się tylko z liter i cyfr(bez polskich znaków)";
      }
      
      
      if($wszystko_ok==true)
      {
        require_once "connect.php";
        mysqli_report(MYSQLI_REPORT_STRICT);
        try
        {
          $polaczenie = new mysqli($host,$db_user,$db_password, $db_name);
          if($polaczenie->connect_errno!=0)
              {
                  throw new Exception(mysqli_connect_errno());
              }
          else 
          {       
                  $id=$_SESSION['id'];
                  if($polaczenie->query("UPDATE myguests SET nazwisko='$nazwisko' WHERE id=$id"))
                  {
                     echo "Udało się zmienić nazwisko, aby zobaczyć zmiany musisz sie ponownie zalogować";
                     echo "<a  href='logout.php'>Zaloguj się ponownie</a>";
                     exit();
                      

                  }
                  else 
                  {
                       throw new Exception($polaczenie->error);
                  }
              }
              $polaczenie->close();
        }
        catch(Exception $e)
        {
            echo '<span style="color:red;">Błąd servera! Przepraszamy za niedogodności i prosimy o rejestracje w innym 
            terminie!</span>';
            echo '<br />Informacja developerska: '.$e;
        }
      }
      }

      if(isset($_POST['email']))
      {
        $email = $_POST['email'];
        $wszystko_ok=true;
        $emailB = filter_var($email, FILTER_SANITIZE_EMAIL);
       if((filter_var($emailB,FILTER_VALIDATE_EMAIL)==false) || ($emailB!=$email))
       {
        $wszystko_ok=false;
        $_SESSION['e_email']="Podaj poprawny adres email";
        
       }
       require_once "connect.php";
        mysqli_report(MYSQLI_REPORT_STRICT);
        
        $polaczenie = new mysqli($host,$db_user,$db_password, $db_name);
       $rezultat = $polaczenie->query("SELECT id FROM myguests WHERE email='$email'");
       if(!$rezultat) throw new Exception($polaczenie->error);
       $ile_takich_email = $rezultat->num_rows;
       if($ile_takich_email>0)
       {
           $wszystko_ok=false;
           $_SESSION['e_email']="Istnieje juz konto z takim adresem email";
       }
      
      
      if($wszystko_ok==true)
      {
        
        try
        {
          
          if($polaczenie->connect_errno!=0)
              {
                  throw new Exception(mysqli_connect_errno());
              }
          else 
          {       
                  $id=$_SESSION['id'];
                  if($polaczenie->query("UPDATE myguests SET email='$email' WHERE id=$id"))
                  {
                     echo "Udało się zmienić email, aby zobaczyć zmiany musisz sie ponownie zalogować";
                     echo "<a  href='logout.php'>Zaloguj się ponownie</a>";
                     exit();
                      

                  }
                  else 
                  {
                       throw new Exception($polaczenie->error);
                  }
              }
              $polaczenie->close();
        }
        catch(Exception $e)
        {
            echo '<span style="color:red;">Błąd servera! Przepraszamy za niedogodności i prosimy o rejestracje w innym 
            terminie!</span>';
            echo '<br />Informacja developerska: '.$e;
        }
      }
      }
      if(isset($_POST['haslo1']))
      {
        $haslo1=$_POST['haslo1'];
        $haslo2=$_POST['haslo2'];
        $wszystko_ok=true;

        if((strlen($haslo1)<8) || (strlen($haslo1)>20))
        {
            $wszystko_ok=false;
            $_SESSION['e_haslo']="Hasło musi posiadać od 8 do 20 znaków";
        }

        if($haslo1!=$haslo2)
        {
            $wszystko_ok=false;
            $_SESSION['e_haslo']="Podane hasła nie są identyczne";
        }
           

            if(password_verify($haslo1,$_SESSION['pass']))
            {
              $wszystko_ok=false;
              $_SESSION['e_haslo']="Hasło na takie same nie może być zmienione";
            }
            if($wszystko_ok==true)
      {
        require_once "connect.php";
        mysqli_report(MYSQLI_REPORT_STRICT);
        try
        {
          $polaczenie = new mysqli($host,$db_user,$db_password, $db_name);
          if($polaczenie->connect_errno!=0)
              {
                  throw new Exception(mysqli_connect_errno());
              }
          else 
          {       
            $haslo_hash = password_hash($haslo1, PASSWORD_DEFAULT);
                  $id=$_SESSION['id'];
                  if($polaczenie->query("UPDATE myguests SET pass='$haslo_hash' WHERE id=$id"))
                  {
                     echo "Udało się zmienić haslo, aby zobaczyć zmiany musisz sie ponownie zalogować";
                     echo "<a  href='logout.php'>Zaloguj się ponownie</a>";
                     exit();
                      

                  }
                  else 
                  {
                       throw new Exception($polaczenie->error);
                  }
              }
              $polaczenie->close();
        }
        catch(Exception $e)
        {
            echo '<span style="color:red;">Błąd servera! Przepraszamy za niedogodności i prosimy o rejestracje w innym 
            terminie!</span>';
            echo '<br />Informacja developerska: '.$e;
        }
      }
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
<script src='https://kit.fontawesome.com/a076d05399.js'></script>

<title>Motocykle.pl/moje_konto</title>
<style>
        .error {
            color:red;
            margin-top: 10px;
            margin-bottom: 10px;
        }
        .featurette-divider {
  margin: 5rem 0; /* Space out the Bootstrap <hr> more */
}
        
    </style>



</head>

<body >




<nav class="navbar navbar-expand-sm navbar-inverse bg-dark navbar-dark fixed-top">
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
    
  <ul class="navbar-nav" >
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






<div class="form">
<div class="jumbotron text-center">
<?php
    $avatar = "img.png";
    ?>
  <img style='float: left; margin-left: 60px;'  class="rounded-circle" src=<?php echo $avatar?> height="100" width="100">
  <h1 style='float left; '><?php 
    echo "<p>Witaj ".$_SESSION['imie']." ".$_SESSION['nazwisko'].'!';
    
    ?></h1>
    
   </div>

  <div class="container">
    <div class="row">
      <div class="col-sm-4" style='font-size: large;'>
        <h4>Twoje Dane:</h4><br />
<?php   
        echo '<form class="form" method="post">';
        echo 'Twoje imię: '.$_SESSION['imie'].'<br />';
       echo '<input type="text" class="form-control" name="imie">';
       if(isset($_SESSION['e_imie']))
            {
                echo '<div class="error">'.$_SESSION['e_imie'].'</div>';
                unset($_SESSION['e_imie']);

            }
        //echo '<input type="submit" class="btn btn-outline-dark" value="Zmień" >';
        //echo '</form>';

        //echo '<form class="form" method="post">';
        echo 'Twoje nazwisko: '.$_SESSION['nazwisko'].'<br />';
        echo '<input type="text" class="form-control" name="nazwisko">';
        if(isset($_SESSION['e_nazwisko']))
            {
                echo '<div class="error">'.$_SESSION['e_nazwisko'].'</div>';
                unset($_SESSION['e_nazwisko']);

            }
        //echo '<input type="submit" class="btn btn-outline-dark" value="Zmień" >';
        //echo '</form>';

        //echo '<form class="form" method="post">';
        echo 'Twój email: '.$_SESSION['email'].'<br />';
        echo '<input type="text" class="form-control" name="email">';
        if(isset($_SESSION['e_email']))
            {
                echo '<div class="error">'.$_SESSION['e_email'].'</div>';
                unset($_SESSION['e_email']);

            }
        //echo '<input type="submit" class="btn btn-outline-dark" value="Zmień" >';
        //echo '</form>';
            
        //echo '<form class="form" method="post">';
        echo 'Zmień hasło:<br />';
        echo '<input type="password" class="form-control" name="haslo1">';
        if(isset($_SESSION['e_haslo']))
            {
                echo '<div class="error">'.$_SESSION['e_haslo'].'</div>';
                unset($_SESSION['e_haslo']);

            }
        echo 'Powtórz hasło: <br />';
        echo '<input type="password" class="form-control" name="haslo2">';
        echo '<input type="submit" class="btn btn-outline-dark" value="Zmień" >';
        echo '</form>';   
    ?>
      
      <form method="post"  action="usun.php">
      Jeżeli usuniesz konto, będzie to akcja nie odwracalna!<br />
    <input type="submit" class="btn btn-secondary" value="Usuń konto!" name="submit">
    </form>
      </div>  
      <div class="col-sm-4">
        

    
      </div> 
      <div class="col-sm-4">
        
      <img class="img-fluid" src="img/1.jpg">
    
      </div> 
    </div>
  </div>
  
</div>
<div class="container marketing" >

<hr class='featurette-divider '>
  </div>

</body>
<footer class="my-auto" >
      <div class="container">
      
        <p class="float-right my-auto"><a href="#">Wróć do góry</a></p>
        <p class="my-auto">© 2020 Company, Inc. · <a href="#">Polityka prywatności</a> · <a href='stronaglowna.php#onas'>O Nas</a></p>
      </div>
      </footer>
</html>