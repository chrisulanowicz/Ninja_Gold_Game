<?php
	session_start();
	if(!isset($_SESSION["log"])){
		$_SESSION["log"]=[];
	}	
	if(isset($_POST["building"]) && $_POST["building"]="farm"){
		$_SESSION["gold"]=rand(10,20);
		$_SESSION["count"]+=$_SESSION["gold"];
		$_SESSION["log"][]="<p>You entered a farm and earned " . $_SESSION["gold"] . " gold. (" . date("F jS Y g:i a") . ")</p>";
	}
	if(isset($_POST["rock"]) && $_POST["rock"]="cave"){
		$_SESSION["gold"]=rand(5,10);
		$_SESSION["count"]+=$_SESSION["gold"];
		$_SESSION["log"][]="<p>You entered a cave and earned " . $_SESSION["gold"] . " gold. (" . date("F jS Y g:i a") . ")</p>";
	}
	if(isset($_POST["lumber"]) && $_POST["lumber"]="house"){
		$_SESSION["gold"]=rand(2,5);
		$_SESSION["count"]+=$_SESSION["gold"];
		$_SESSION["log"][]="<p>You entered a house and earned " . $_SESSION["gold"] . " gold. (" . date("F jS Y g:i a") . ")</p>";
	}
	if(isset($_POST["vegas"]) && $_POST["vegas"]="casino"){
		$probability=rand(1,1000);
		if($probability<2){
	 		$_SESSION["gold"]=1000000;
	 		$_SESSION["log"][]="<p class='jackpot'>You HIT THE JACKPOT and earned " . $_SESSION["gold"] . " gold. (" . date("F jS Y g:i a") . ")</p>";
	 	}
	 	elseif($probability<300){
	 		$_SESSION["gold"]=rand(0,50);
	 		$_SESSION["log"][]="<p>You entered a casino and WON " . $_SESSION["gold"] . " gold. (" . date("F jS Y g:i a") . ")</p>";
	 	}
	 	else{
	 		$_SESSION["gold"]=rand(-50,0);
	 		$_SESSION["log"][]="<p class='lost'>You entered a casino and LOST " . $_SESSION["gold"] . " gold. (" . date("F jS Y g:i a") . ")</p>";
	 	}
	 	$_SESSION["count"]+=$_SESSION["gold"];
	 }
	if(isset($_POST["restart"]) && $_POST["restart"]=="restart"){
		$_SESSION["activities"]="";
		session_destroy();
	}
	header("Location:index.php");