<?php
if(isset($_POST['username']) && isset($_POST['password'])) {
    setcookie("nom", $_POST['username'], time() + 3600, '/', "localhost", true, true);
    setcookie("password", $_POST['password'], time() + 3600, '/', "localhost", true, true);

    $name = $_COOKIE['nom'];
    $pass = $_COOKIE['password'];

    if(isset($_COOKIE['nom']) && isset($_COOKIE['password'])) {
        echo "Utilisateur : " . $name . "<br>";
        echo "Mot de passe : " . $pass;
    }
    else{
        echo "Aucun cookie n'a été fournis..";
    }
}
?>

<script src="https://cdn.tailwindcss.com"></script>
<body class="bg-slate-800 p-2 text-white">
<div class="mt-4 flex flex-col justify-center items-center gap-2">
    <h2>Modifié le cookie</h2>
    <form action="modifcookie.php" method="post">
        <input type="user" name="user" placeholder="Utilisateur" class="text-black">
        <input type="password" name="pass" placeholder="Mot de passe" class="text-black">
        <input type="submit">
    </form>
</div>
</body>