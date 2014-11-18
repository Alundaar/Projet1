<?php
try
{
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=blog', 'root', '');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query( 'SELECT (TITRE,CONTENU) FROM article');

while( $donnees = $reponse->fetch())
{
echo $donnees['TITRE']
echo $donnees['CONTENU']
}

$reponse->closeCursor();
?>