<?php
try
{
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=blog', 'root', '');
    echo 'Connection réussie !';
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query( 'SELECT (article.TITRE,article.CONTENU) FROM blog.article;');
if ( is_null($repounse)){
	echo 'la réponse est null';
}
if ( is_empty($repounse)){
	echo 'la réponse est vide';
}

while( $donnees = $reponse->fetch())
{
echo $donnees['TITRE'];
echo $donnees['CONTENU'];
}

$reponse->closeCursor();
?>