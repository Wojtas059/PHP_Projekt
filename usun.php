
<?php

session_start();


if(!isset($_POST['submit']))
{
    header('Location: konto.php');
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
    $id=$_SESSION['id'];
    if($rezultat = @$polaczenie->query(sprintf("DELETE FROM myguests WHERE id='$id'",
     mysqli_real_escape_string($polaczenie))))
    {
        echo "Udało się usunąć konto ";
                     echo "<a  href='logout.php'>Zarejestruj się ponownie</a>";
                     exit();
    }
   
    $polaczenie->close();
}






?>