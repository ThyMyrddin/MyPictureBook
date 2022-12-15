<?php  
include "connexion.php";
session_start();

if(isset($_GET["submit"])){
    $user=$_GET["username"];
    $pass=$_GET["pass"];
    $sql="select * from user where username='$user' and mdp='$pass'";
    $q=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($q);
    if(!empty($row)){
        $idu=$row["idu"];
        $vpass=$row["viewpass"];
        $_SESSION["vpass"]=$vpass;
        $_SESSION["idu"]=$idu;
        $_SESSION["name"]=$user;
        $_SESSION["pass"]=$pass;
        header("location:albums.php");
    }
    else{
        session_destroy();
        header("location:../Login_form/index2.php");
    }
}


?>