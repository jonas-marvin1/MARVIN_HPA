<?php
	include("connexion.php");


	if (isset($_POST["submit"])) 
	{
			$nom=$_POST["nom"];
			$email=$_POST["email"];
			$contact=$_POST["contact"];
			$message=$_POST["message"];
			

			$req="insert into contact VALUES(NULL,'$nom','$email','$contact','$message')";
			$req=mysqli_query($con,$req);


			 if ($req) 
			 {
			 header("location:modal.html");
			 }
			 else{echo "error2.0";}

	}

?>
