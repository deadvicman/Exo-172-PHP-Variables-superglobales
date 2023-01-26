<script src="https://cdn.tailwindcss.com"></script>

<?php
if(isset($_POST['user']) && isset($_POST['pass'])) {
    setcookie("nom", $_POST['user'], time() + 3600, '/', "localhost", true, true);
    setcookie("password", $_POST['pass'], time() + 3600, '/', "localhost", true, true);

    $name = $_COOKIE['nom'];
    $pass = $_COOKIE['password'];

    if(isset($_COOKIE['nom']) && isset($_COOKIE['password'])) {
        echo "Nouveau nom : " . $name . "<br>";
        echo "Nouveau mot de passe : " . $pass . "<br>";
        echo "Cookie modifié";
    }
    else{
        echo "Aucun cookie n'a été fourni..";
    }
}