<?php
// // permet de voir toutes les variables
//     var_dump($_POST);
// declaration des variable de chaque elts du formulaire
    $nom = $_POST["Nom"];
    $prenom = $_POST["Prenom"];
    $datedeNaissance = $_POST["dateDeNaissance"];
    $genre = $_POST["genre"];
    $mail = $_POST["email"];
    $message = $_POST["message"];
    
    $message = "Nom: ".$nom."\nPrenom: ".$prenom."\nDate de naissance: ".$datedeNaissance."\nGenre: ".$genre."\nMessage: ".$message;

    echo "$nom";


// envoi du formulaire sur mail
    mail("dcl.fabieno@18pixel.fr", "inscription", $message, "FROM : ".$mail);
?>
