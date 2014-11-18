<?php
try
{
    // On se connecte à MySQL
    $bdd = mysql_connect('localhost', 'root', '');
    echo 'Connection réussie !';
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

mysql_select_db('blog',$bdd);

$sql = "SELECT TITRE,CONTENU FROM article";

$req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());

while( $data = mysql_fetch_array($req) )
{
echo $donnees['TITRE'];
echo $donnees['CONTENU'];
}

$reponse->closeCursor();
?>