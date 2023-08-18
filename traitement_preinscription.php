<?php
	include("connexion.php");


	if (isset($_POST["submit"])) 
	{
			$nom=$_POST["nom"];
			$prenom=$_POST["prenom"];
			$contact=$_POST["contact"];
			$mail=$_POST["mail"];
			$sexe=$_POST["sexe"];
			$nationalite=$_POST["nationalite"];
			$fonction=$_POST["fonction"];
			$etude=$_POST["etude"];
			$formation=$_POST["formation"];
			$hpa=$_POST["hpa"];
            $cv=$_POST["cv"];
			$diplome=$_POST["diplome"];
			$commentaire=$_POST["commentaire"];
            $certificat=$_POST["certificat"];

			

			$req="insert into inscription values(Null,'$nom','$prenom','$mail','$sexe','$nationalite','$contact','$etude',
            '$fonction','$hpa','$cv','$diplome','$commentaire','$certificat')";
			$req=mysqli_query($con,$req);


			 if ($req) 
			 {
			 header("location:modal.html");
			 }
			 else{echo "error2.0";}

	}

?>