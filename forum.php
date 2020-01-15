<?php 
require_once "connect.php";
session_start();


if(isset($_POST['kom']))
    {
      $komentarz=$_POST['kom'];

      $wszystko_ok=true;
      if((strlen($komentarz)<5 )|| (strlen($komentarz)>255 ))
      {
         $wszystko_ok=false;
         $_SESSION['e_kom']="Komentrz musi być dłuższy niż 5 znaków i nie mniejszy niż 255 znaków";
         
      }
      if((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
    {
      
      
    }
    else
    {
      $wszystko_ok=false;
      $_SESSION['e_kom']="Aby dodać komentarz to musisz się zalogować";
      
    }
    if($wszystko_ok==true)
                 {
    
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
              
                 if($wszystko_ok==true)
                 {  
                  $id=$_SESSION['id'];
                    if($polaczenie->query("INSERT INTO komentarze VALUES (NULL,'$id','$komentarz')"))
                    {
                        
                        header('Location: forum.php');

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
<link href="stylh.css" rel="stylesheet">
<title>Motocykle.pl/forum</title>
<style>
        .error {
            color:red;
            margin-top: 10px;
            margin-bottom: 10px;
        }
    </style>
</head>

<body  style=' background-image-max-width: 100%; background-image-height: auto; background-image: url("img/2.jpg"); '>




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

<div class="jumbotron text-center" style=" color:white; border-radius: 10px; background: rgba(76, 80, 80, 0.4)">

  
<h1 >FORUM!</h1>
  
 </div>
    <div class="container " style='color:white; padding-top: 20px; border-radius: 10px; background: rgba(76, 80, 80, 0.3);' >
    
    <form class="form my-auto" method="post" style='border-radius: 10px; background: rgba(76, 80, 80, 0.2);  padding: 20px;'>
        Dodaj komentarz:
       <input type="text" class="form-control" name="kom">
       <?php if(isset($_SESSION['e_kom']))
            {
                echo '<div class="error">'.$_SESSION['e_kom'].'</div>';
                unset($_SESSION['e_kom']);

            }?><br />
        <input type="submit" class="btn btn-outline-light" value="dodaj" >
        </form><br />
        <?php
        $polaczenie = @new mysqli($host,$db_user,$db_password, $db_name);
        if($polaczenie->connect_errno!=0)
        {
            echo "Error: ".$polaczenie->connect_errno;
        }
        else 
        {
          if($rezultat = @$polaczenie->query(sprintf("SELECT * FROM komentarze WHERE id > 0",
          mysqli_real_escape_string($polaczenie))))
          $ilu = $rezultat->num_rows;
          $polaczenie->close();
          if($ilu > 0)
                 {
        
                    
        
                 
                  for ($i = 1 ; $i <= $ilu ; $i++)
                  {
        
        
                   
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
                        $rezultat = $polaczenie->query("SELECT * FROM komentarze WHERE id='$i'");
                        if(!$rezultat) throw new Exception($polaczenie->error);
                        $wiersz = $rezultat->fetch_assoc();

                        $_SESSION['kom']=$wiersz['text'];
                        $id_u=$wiersz['id_u'];
                        $imie = "Użytkownik";
                        $nazwisko = "usunięty";   
                        mysqli_report(MYSQLI_REPORT_STRICT);
                try
                {
                        $polaczenie1 = new mysqli($host,$db_user,$db_password, $db_name);
                    if($polaczenie1->connect_errno!=0)
                        {
                            throw new Exception(mysqli_connect_errno());
                        }
                    else 
                    {



                      $rezultat1 = $polaczenie1->query("SELECT * FROM myguests WHERE id='$id_u'");
                      if(!$rezultat1) throw new Exception($polaczenie1->error);
                      $ile_u = $rezultat1->num_rows;
                      if($ile_u > 0)
                      {
                        $wiersz1 = $rezultat1->fetch_assoc();
                      $imie = $wiersz1['imie'];
                      $nazwisko = $wiersz1['nazwisko'];

                      $rezultat1->free_result();
                      $polaczenie1->close();
                      }
                    }
                  }
                  catch(Exception $e)
                {
                    echo '<span style="color:red;">Błąd servera! Przepraszamy za niedogodności i prosimy o rejestracje w innym 
                    terminie!</span>';
                    echo '<br />Informacja developerska: '.$e;
                }
                        
                        echo '<div class"row"><div class="col-xs-4"><img class="rounded-circle" src="img.png" alt="Generic placeholder image" width="35" height="35"><br />'.$imie.' '.$nazwisko.'</div>';
                        echo '<div class="col-xs-4"><textarea rows="4" cols="50" class="form-control" type="text"  value="" disabled>'.$_SESSION['kom'].'</textarea></div><div class="col-xs-2"></div></div> <br />';
                       
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
                  
                
        }
        }
        
        ?>
    </div>
    
    

    </div>



<div class="container marketing" >

<hr class='featurette-divider '>
    
      
      
      
      
  </div>
 
</body>
<footer class="my-auto" style='color:white;'>
      <div class="container">
        <p class="float-right my-auto"><a href="#">Wróć do góry</a></p>
        <p class="my-auto">© 2020 Company, Inc. · <a href="#">Polityka prywatności</a> · <a href='stronaglowna.php#onas'>O Nas</a></p>
      </div>
      </footer>
</html>