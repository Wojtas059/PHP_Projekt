
<?php

session_start();
if((!isset($_POST['email'])) || (!isset($_POST['haslo'])))
{
    header('Location: logowanie.php');
    exit();
}
require_once "connect.php";

$polaczenie = @new mysqli($host,$db_user,$db_password, $db_name);

if($polaczenie->connect_errno!=0)
{
    echo "Error: ".$polaczenie->connect_errno;
}
else 
{
    $email = $_POST['email'];
    $haslo = $_POST['haslo'];

    $login = htmlentities($email, ENT_QUOTES, "UTF-8");
    

    if($rezultat = @$polaczenie->query(sprintf("SELECT * FROM myguests WHERE email= '%s'",
     mysqli_real_escape_string($polaczenie,$email))))
    {
         $ilu = $rezultat->num_rows;
         if($ilu > 0)
         {
            $wiersz = $rezultat->fetch_assoc();

            if(password_verify($haslo,$wiersz['pass']))
            {

            

                $_SESSION['zalogowany']=true;
            
                
                $_SESSION['id']=$wiersz['id'];
                $_SESSION['email']= $wiersz['email'];
                $_SESSION['imie'] = $wiersz['imie'];
                $_SESSION['nazwisko'] = $wiersz['nazwisko'];
                $_SESSION['pass'] = $wiersz['pass'];
                

                unset($_SESSION['blad']);
                $rezultat->free_result();
                header('Location: konto.php');
            }
            else
            {
                $_SESSION['blad']='<span style="color:red">Nieprawidłowy email lub hasło!</span>';
                header('Location: logowanie.php');
            }
         }
         else
         {
            $_SESSION['blad']='<span style="color:red">Nieprawidłowy email lub hasło!</span>';
            header('Location: logowanie.php');
         }
    }
    $polaczenie->close();
}






?>