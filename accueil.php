<?php
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$login =$_POST['login'];
$mdp =$_POST['mdp'];
$host = $_SERVER['HTTP_HOST']; // on récupère le nom de l'hôte
$uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\'); // on récupère le début de
// l'URL
if ($login=='admin' && $mdp=='azerty') {
    header("Location: http://$host$uri/index.html"); // vers profil.html
    } else { header("Location: http://$host$uri/profil.html"); // vers index.html
}

echo "Bonjour $prenom $nom";
?>