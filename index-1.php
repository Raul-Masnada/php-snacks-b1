<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php-snacks-1</title>
    <style>
      body {
        background-color: black;
        color: white;
      }

    </style>
  </head>
  <body>
    <div class="container">

      <?php

        $name = $_GET['name'];
        $eMail = $_GET['mail'];
        $at = strpos($eMail, '@');
        $dot = strpos($eMail, '.');
        $age = $_GET['age'];

        if (strlen($name) > 3 && is_numeric($age) && $dot != false && $at != false) {

          echo "<h1>Accesso riuscito</h1>";
        }
         else {

          echo "<h1>Accesso negato</h1>";
        }
      ?>

     </div>


  </body>
</html>
  <!-- per accedere  http://localhost/?name=raul&mail=raul.masnada@gmail.com&age=23 -->
