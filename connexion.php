


<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
</head>

<body>

  <div class="input">

          <h2>Se connecter</h2>
           <form action="connexion.php" method="post">
          <p>pseudo:</p>  <input type="text" name="pseudo"><br>
          <p>mot de passe: </p>  <input type="password" name="mot_passe"><br>
                   <input type="submit" value="Se connecter" name="se_connecter">
          </form>
</div>



<?php

include "connect.php";


if(isset($_POST['se_connecter']))
{
  $pseudo = htmlspecialchars($_POST['pseudo']);
  $mot_passe = htmlspecialchars($_POST['mot_passe']);


  if(!empty($_POST['pseudo']) AND !empty($_POST['mot_passe']))
  {
    $req = $bdd->prepare('SELECT * FROM membre WHERE pseudo = :pseudo, mot_passe = :mot_passe');
    $req->execute(array(
      'pseudo' => $pseudo,
      'mot_passe' =>$mot_passe
    ));


        if ($pseudo == 'admin' AND $mot_passe == 'admin')
        {
          echo 'bienvenue dans votre compt';
        }
        else
        {
          echo'vous dovez rentrer un mot de passe correct';

        }
  }
  else
  {
    echo"vous dovez remplire les champs";
  }
}

?>
  <script src="js/vendor/modernizr-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>
