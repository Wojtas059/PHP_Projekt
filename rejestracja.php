<?php
    session_start();
    
    if((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
    {
        header('Location: konto.php');
        exit();
    }

    if(isset($_POST['email']))
    {
       //Udana walidacja 
       $wszystko_ok=true;
       //Sprawdz poprawność
       $nazwisko = $_POST['nazwisko'];

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
         //Udana walidacja 
         $wszystko_ok=true;
         //Sprawdz poprawność
         $imie = $_POST['imie'];

         //sprawdzenie poprawnosci imienia
         if((strlen($imie)<2 )|| (strlen($imie)>20 ))
         {
            $wszystko_ok=false;
            $_SESSION['e_imie']="Imie musi posiadać od 2 do 20 znaków";
            
         }
         if(ctype_alnum($imie)==false)
         {
            $wszystko_ok=false;
            $_SESSION['e_imie']="Imie może składać się tylko z liter i cyfr(bez polskich znaków)";
         }

         //sprawdzanie poprawnosci adresu email
            $email = $_POST['email'];
            $emailB = filter_var($email, FILTER_SANITIZE_EMAIL);
           if((filter_var($emailB,FILTER_VALIDATE_EMAIL)==false) || ($emailB!=$email))
           {
            $wszystko_ok=false;
            $_SESSION['e_email']="Podaj poprawny adres email";
           }
        //sprawdz poprawnosc hasla
        $haslo1=$_POST['haslo1'];
        $haslo2=$_POST['haslo2'];

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

        $haslo_hash = password_hash($haslo1, PASSWORD_DEFAULT);
        //Czy zaakceptowano regulamin
        if(!isset($_POST['regulamin']))
        {
            $wszystko_ok=false;
            $_SESSION['e_regulamin']="Podwierdz akceptacje regulaminu";
        }
        
        $sekret="6LcCDc0UAAAAALHIlbIHxpAjzwpo_neWCFg2N5YF";
        $sprawdz = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$sekret.'&response='.$_POST['g-recaptcha-response']);
           
        $odpowiedz=json_decode($sprawdz);
        
        if($odpowiedz->success==false)
        {
            $wszystko_ok=false;
            $_SESSION['e_bot']="Powierdz że nie jesteś robotem";
        }

        //Zapamietaj wprowadzone dane
        $_SESSION['fr_nazwisko']=$nazwisko;
        $_SESSION['fr_imie']=$imie;
        $_SESSION['fr_email']=$email;
        $_SESSION['fr_haslo1']=$haslo1;
        $_SESSION['fr_haslo2']=$haslo2;
        if(isset($_POST['regulamin']))$_SESSION['fr_regulamin'] = true;
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
                //Czy email juz istnieje
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
                    if($polaczenie->query("INSERT INTO myguests VALUES (NULL,'$imie','$nazwisko','$email','$haslo_hash')"))
                    {
                        $_SESSION['udanarejestracja']=true;
                        header('Location: logowanie.php?email='.$email.'&pass='.$haslo_hash);

                    }
                    else 
                    {
                         throw new Exception($polaczenie->error);
                    }
                }
                $polaczenie->close();
            }
        }

        catch(Exception $e)
        {
            echo '<span style="color:red;">Błąd servera! Przepraszamy za niedogodności i prosimy o rejestracje w innym 
            terminie!</span>';
            echo '<br />Informacja developerska: '.$e;
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
<script src="https://www.google.com/recaptcha/api.js" ></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Ubuntu&display=swap" rel="stylesheet">

<title>Motocykle.pl/rejestracja</title>
<style>
        .error {
            color:red;
            margin-top: 10px;
            margin-bottom: 10px;
        }
    </style>

</head>

<body class="img-fluid" style=' background-image-max-width: 100%; background-image-height: auto; background-image: url("img/6_2.jpg"); ' >




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





<div class="form" style='color:white;'>

  <div class="jumbotron text-center" style=' font-size: 60px;  font-family:"Open Sans Condensed"; background: rgba(76, 80, 80, 0.3)'>
     Motocykle - Pasja która porusza ... 
   </div>

  <div class="container" style='font-family: "Ubuntu"; '>
    <div class="row">
      <div class="col-sm-4" style=' border-radius: 10px; background: rgba(76, 80, 80, 0.4)'>
        <form class="form" method="post">
            <h3>Rejestracja</h3>
            Nazwisko:
            <input type="text" class="form-control" value="<?php
        if(isset($_SESSION['fr_nazwisko']))
        {
            echo $_SESSION['fr_nazwisko'];
            unset($_SESSION['fr_nazwisko']);
        }
        ?>" name="nazwisko">
        <?php
            if(isset($_SESSION['e_nazwisko']))
            {
                echo '<div class="error">'.$_SESSION['e_nazwisko'].'</div>';
                unset($_SESSION['e_nazwisko']);

            }
        ?>
            Imie:
            <input type="text" class="form-control" value="<?php
        if(isset($_SESSION['fr_imie']))
        {
            echo $_SESSION['fr_imie'];
            unset($_SESSION['fr_imie']);
        }
        ?>" name="imie">
        <?php
            if(isset($_SESSION['e_imie']))
            {
                echo '<div class="error">'.$_SESSION['e_imie'].'</div>';
                unset($_SESSION['e_imie']);

            }
        ?>

            Email:
            <input type="text" class="form-control" value="<?php
        if(isset($_SESSION['fr_email']))
        {
            echo $_SESSION['fr_email'];
            unset($_SESSION['fr_email']);
        }
        ?>" name="email"><br/>
        <?php
            if(isset($_SESSION['e_email']))
            {
                echo '<div class="error">'.$_SESSION['e_email'].'</div>';
                unset($_SESSION['e_email']);
            }
        ?>
            Hasło:
            <input type="password" class="form-control" name="haslo1" <?php
        if(isset($_SESSION['fr_haslo1']))
        {
            echo $_SESSION['fr_haslo1'];
            unset($_SESSION['fr_haslo1']);
        }
        ?> >
            
        <?php
            if(isset($_SESSION['e_haslo']))
            {
                echo '<div class="error">'.$_SESSION['e_haslo'].'</div>';
                unset($_SESSION['e_haslo']);
            }
        ?>
            Powtórz hasło:
            <input type="password" class="form-control" name="haslo2" <?php
            if(isset($_SESSION['fr_haslo2']))
        {
            echo $_SESSION['fr_haslo2'];
            unset($_SESSION['fr_haslo2']);
        }?>>
            
            <label>
            <input type="checkbox" name="regulamin" value="<?php 
                if(isset($_SESSION['fr_regulamin']))
                {
                    echo "checked";
                    unset($_SESSION['fr_regulamin']);
                }
            ?>" /> Akceptuje regulamin
        </label>
        <?php
         if(isset($_SESSION['e_regulamin']))
         {
             echo '<div class="error">'.$_SESSION['e_regulamin'].'</div>';
             unset($_SESSION['e_regulamin']);
         }
        ?>
            <br />
            <div class="g-recaptcha" data-sitekey="6LcCDc0UAAAAAPnfDHUnwhLmGFyetoknIyzaVCHu"></div>
            <?php
         if(isset($_SESSION['e_bot']))
         {
             echo '<div class="error">'.$_SESSION['e_bot'].'</div>';
             unset($_SESSION['e_bot']);
         }
        ?>
            <br /> <br /> 
            <input type="submit" class="btn btn-outline-light" value="Rejestruj" name="rejstracja">
            <input type="reset" class="btn btn-outline-light" value="Wyczyść">
        
        </form>
      </div>  
    </div>
  </div>

</div>



</body>

</html>