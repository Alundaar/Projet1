<?php
try
{
    // On se connecte � MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=blog', 'root', '');
    echo 'Connection r�ussie !';
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arr�te tout
        die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query( 'SELECT (article.TITRE,article.CONTENU) FROM blog.article;');
if ( is_null($repounse)){
	echo 'la r�ponse est null';
}
if ( is_empty($repounse)){
	echo 'la r�ponse est vide';
}

while( $donnees = $reponse->fetch())
{
echo $donnees['TITRE'];
echo $donnees['CONTENU'];
}

$reponse->closeCursor();
?>