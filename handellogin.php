<?php
session_start();
$email=$_POST["email"];
$pass=$_POST["pass"];

$_SESSION["email"]=$email;
$_SESSION["pass"]=$pass;



if ($email=='' || $pass=='' || $email==null || $pass==null){
    
    echo "All Data Required" ;
    
}
else if(strlen($pass)<8){
    echo "Password Must be more than 8 numbers or charecters";
}
else {
    echo "Go to <a href='assignment3.php'>Product Page</a>";
}

?>