<?php 
	
function go()
 {
 $dbhost = "localhost";
 $dbuser = "test";
 $dbpass = "123";
 $db = "base";
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname='.$db.';charset=utf8', $dbuser, $dbpass);
	}
	catch (Exception $e)
	{
			die('Erreur : ' . $e->getMessage());
	}
	$reponse = $bdd->query('SELECT * FROM students');
	
	while ($donnees = $reponse->fetch())
	{
		echo "<li>".$donnees['firstname']." ".$donnees['lastname']." ".$donnees['mail']."</li>";
	}
	$bdd = null;
}



	
?>


<html>
<head>

</head>
<body> 
<h1>Students</h1>
<p>
<ul>
<?php
go();
?>
</ul>

</p>


</body>
</html>

