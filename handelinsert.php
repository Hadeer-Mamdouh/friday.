<?php
    session_start();

    $proName=$_POST['proName']; 
    $value=$_POST['value'];
    $_SESSION["value"]=$value;
    $_SESSION['proName'] =array($proName=>$value);
                
           
            print_r ($_SESSION['proName']);

        echo"Go to <a href='search.php'>Search<a>";
           


?>