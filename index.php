<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 1</title>
  </head>
  <body>
    <p>
      <?php
        //index.php?lastname=Nemare&firstname=Jean
        if (isset($_GET['firstname']) AND isset($_GET['lastname'])) {
          echo $_GET['firstname'] . ' ' . $_GET['lastname'];
        }else {
          echo 'Mauvais parametres dans l\'URL.';
        }
       ?>
    </p>
  </body>
</html>
