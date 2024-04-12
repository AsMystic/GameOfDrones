<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="style.css"> </head>

<body>
  <div class="container">
    <?php
      session_start();

      if (isset($_SESSION['login'])) {
        $login = $_SESSION['login'];
        echo "<p class='title'>Bienvenue " . $login . " !</p>";
      }
    ?>

	<a href="afficher_drones.php"><button class="button">Liste des drones</button></a>
</div>
	<a href="ajouter_drones.php"><button class="button">Ajouter un drone</button></a>
</div>
	<a href="login.php"><button class="buttondeco" style="vertical-align:middle"><span>Quitter </span></button></a>
</div>
</body>

</html>
