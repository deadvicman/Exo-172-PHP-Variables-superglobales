<?php
session_start();
?>
<?php require "parts/parts.php" ?>

<div class="bg-slate-800 text-center py-2 mt-5">
    <p>User Agent: <?php echo $_SESSION['nom']; ?></p>
    <p>IP Address: <?php echo $_SESSION['prenom']; ?></p>
    <p>Server Name: <?php echo $_SESSION['age']; ?></p>
</div>

<form action="savecookie.php" method="post" >
    <div class="flex gap-3 flex-col items-center justify-center mt-20">
        <h2 class="mt-10">Connexion</h2>
        <label for="username">nom d'utilisateur</label>
        <input type="text" name="username" id="username" class="text-black">

        <label for="password">Votre mot de passe</label>
        <input type="password" name="password" id="password" class="text-black">
        <input type="submit" class="bg-slate-200 text-black p-0.5">
    </div>
</form>