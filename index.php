<div class="input">

        <h2>S'inscrire</h2>
         <form action="index.php" method="post">
        <p>pseudo:</p>  <input type="text" name="pseudo"><br>
        <p>mot de passe: </p>  <input type="password" name="mot_passe"><br>
        <p>confirm mot de passe:</p> <input type="password" name="confirm_password"><br>
        <p>e-mail:</p>  <input type="email" name="email"><br>
                 <input type="submit" value="Submit" name="inscrire">
        </form>
</div>
<?php
include "connect.php";
   // if(isset($_POST['pseudo']) AND isset($_POST['mot_passe']) AND isset($_POST['confirm_password']) AND isset($_POST['email']) AND isset($_POST['inscrire']))
   // {
    if(!empty($_POST['pseudo']) AND !empty($_POST['mot_passe']) AND !empty($_POST['confirm_password']) AND !empty($_POST['email']))
    {
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $mot_passe  = htmlspecialchars($_POST['mot_passe']);
        $confirm_password = htmlspecialchars($_POST['confirm_password']);
        $email = htmlspecialchars($_POST['email']);

        if($mot_passe == $confirm_password)
        {
              $req = $bdd->prepare('INSERT INTO membre (pseudo, mot_passe, email) VALUES (:pseudo, :mot_passe, :email)');
              $req->execute(array(
              'pseudo' => $pseudo,
              'mot_passe' => $mot_passe,
              'email' => $email
            ));
            echo "inscription est réussise";
        }


        else
        {
          echo "no";
        }
    }
    else
    {
      echo "vous douvez remplire toutes les champs";

    }

  //}


?>

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


  <?php






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
