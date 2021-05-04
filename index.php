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
      h1 {
        color: red;
      }
    </style>
  </head>
  <body>

    <div class="container">
      <h1>PARTITE BASKET</h1>

    <?php

    function getRndNum() {
      $rndNum = rand(50,100);
      return $rndNum;
    }

      $matches = [
       [
          'team1' => 'bergamo',
          'team2' => 'milano',
          'punti1' => getRndNum(),
          'punti2' => getRndNum(),
        ],
       [
          'team1' => 'venezia',
          'team2' => 'caserta',
          'punti1' => getRndNum(),
          'punti2' => getRndNum(),
        ],
       [
          'team1' => 'napoli',
          'team2' => 'brescia',
          'punti1' => getRndNum(),
          'punti2' => getRndNum(),
        ],
       [
          'team1' => 'firenze',
          'team2' => 'bologna',
          'punti1' => getRndNum(),
          'punti2' => getRndNum(),
        ]
      ];


      for ($i=0; $i < count($matches); $i++) {
        $local = $matches[$i]['team1'];
        $guest = $matches[$i]['team2'];
        $punti1 = $matches[$i]['punti1'];
        $punti2 = $matches[$i]['punti2'];

        echo '<h2>' .$local .' - ' .$guest .' | ' .$punti1 .'-' .$punti2 .'</h2>';
      };
      ?>
     </div>
  </body>
</html>
