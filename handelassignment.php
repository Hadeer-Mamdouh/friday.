<?php
session_start();
if(isset($_SESSION['email'])){

	$products   =$_POST["products"];
	$count     =$_POST["count"];
	$price     =0;
    
	if($count<0)
		echo "You cannot Enter negitive numbers";
	else if($products=="dress"){
		$price=$count*400;
		echo "Price = " . $price . "</br>";
		if($price<1000){
			$price -=(0.1*$price);
			echo "Price after sale = " . $price . "</br>";
		}
		elseif($price>=1000){
			$price -=(0.15*$price);
			echo "Price after sale = " . $price. "</br>";
		}
	}
	else if($products=="shoes"){
		$price=$count*200;
		echo "Price = " . $price . "</br>";
		if($price<1000){
			$price -=(0.1*$price);
			echo "Price after sale = " . $price . "</br>";
		}
		elseif($price>=1000){
			$price -=(0.15*$price);
			echo "Price after sale = " . $price . "</br>";
		}
	}
	else if($products=="handbag"){
		$price=$count*150;
		echo "Price = " . $price . "</br>";
		if($price<1000){
			$price -=(0.1*$price);
			echo "Price after sale = " . $price . "</br>" ;
		}
		elseif($price>=1000){
			$price -=(0.15*$price);
			echo "Price after sale = " . $price . "</br>";
		}
	}
	else if($products=="jacket"){
		$price=$count*500;
		echo "Price = " . $price . "</br>";
		if($price<1000){
			$price -=(0.1*$price);
			echo "Price after sale = " . $price . "</br>" ;
		}
		elseif($price>=1000){
			$price -=(0.15*$price);
			echo "Price after sale = " . $price . "</br>";
		}
	}
	else if($products=="pants"){
		$price=$count*300;
		echo "Price = " . $price . "</br>";
		if($price<1000){
			$price -=(0.1*$price);
			echo "Price after sale = " . $price . "</br>" ;
		}
		elseif($price>=1000){
			$price -=(0.15*$price);
			echo "Price after sale = " . $price;
		}
	}
  echo "Go to <a href='logout.php'>Log Out</a>";
     echo $products;
	
}  
    else 
{
	echo " Go <a href='login.php'>Login</a> <br/>";
}
?> 