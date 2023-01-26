<?php
session_start();
$_SESSION['nom'] = "Doe";
$_SESSION['prenom'] = "John";
$_SESSION['age'] = "37";
?>

<!doctype html>
<html lang="fr">
<?php require "parts/parts.php" ?>
<body>

<h1 class="bg-slate-800 text-center py-2">User Information</h1>
<div class="bg-slate-800 text-center py-2 mt-5">
    <p>User Agent: <?php echo $_SERVER['HTTP_USER_AGENT']; ?></p>
    <p>IP Address: <?php echo $_SERVER['REMOTE_ADDR']; ?></p>
    <p>Server Name: <?php echo $_SERVER['SERVER_NAME']; ?></p>
</div>
<a href="page2.php"
   class="bg-slate-800 transition 100ms hover:bg-slate-200 hover:text-black rounded flex justify-center mt-8 items-center ">2eme page</a>
</body>
</html>
