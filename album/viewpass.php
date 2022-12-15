<?php  

include "connexion.php";
session_start();
$idu=$_SESSION["idu"];
$vpass=$_SESSION["vpass"];
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <input type="text" name="vpass" value="<?php echo $vpass ;?>" id="" disabled="true">
    </form>
</body>
</html>