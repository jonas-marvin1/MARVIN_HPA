<?php
	include("connexion.php");

	if (isset($_POST["submit"])) 
	{


		
			$news = $_POST["news"];
		
			$req = "insert into mail VALUES(NULL, '$news')";
			
			$req=mysqli_query($con,$req);

			 if ($req) 
			 {
			 header("location:modal.html");
			 }
			 else{echo "error2.0";}

	}

?>