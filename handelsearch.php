<?php
    session_start();
  
    function searchProduct($array,$keyword)
  {   
	foreach($array as $key => $value)
	{
		if(strpos($key, $keyword))
		echo $key." ".$value."<br/>";
	}
  } 


$value=$_SESSION["value"];
$proName=$_SESSION['proName'] ;
$array=array($proName=>$value);
$keyword=$_POST['keyword'];


$_SESSION['keyword']=$keyword;

searchProduct($array,$keyword);
?>