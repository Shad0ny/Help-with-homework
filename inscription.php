<?php
$nom=$_POST['Nom']
$prenom=$_POST['Prenom']
$birthday=$_POST['birthday']
$mail=$_POST['mail']
$password2=$_POST['password2']
$password3=$_POST['password3']

$db = new SQLite3('connexion.db');

$query = "INSERT INTO connexion (nom,prenom,date de naissance,addresse mail,mot de passe,confirmation du mot de passe) VALUES ('$nom','$prenom','$birthday','$mail','$password2','$password3')";

$result=$db->exec($query);

if ($result) {
    echo "Données enregistrées avec succès";
} else {
    echo "Erreur lors de l'enregistrement des données";
}
$db->close();
?>
